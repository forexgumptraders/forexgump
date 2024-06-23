<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\File; 


class SerenusController extends Controller
{

    public function __construct()
{
    $this->middleware('auth');
}

    public function serenusIndex()
    {
        return view('robot.serenusIndex');
    }

    public function serenus()
    {
        // Obtén todos los robots
        $robots = File::all();

        // Filtra el robot "Supra" sin importar la extensión
        $serenusRobot = $robots->first(function ($robot) {
            // Busca 'supra' en el nombre del archivo sin importar mayúsculas o minúsculas
            return stripos($robot->name, 'serenus') !== false;
        });

        return view('robot.serenus', compact('serenusRobot'));
    }

    

    public function store(Request $request){
        
        $name = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->store('/robots');

        $array = explode('public', $path);

        $save = new File;

        $save->name = $name;
        $save->path = 'storage/'.$array[0];

    

        $save->save();

        return redirect()->route('robot.serenus')->with('status', 'Robot subido correctamente');

    }

    public function createPaypalOrder(Request $request)
    {
        

        $access_token = $this->generateAccessTokenPayPal();

        $response = Http::withHeaders([
            'Content_Type' => 'application/json',
            'Authorization' => "Bearer $access_token",
        ])->post(config('services.paypal.url') . '/v2/checkout/orders', [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                0 => [
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => $request->amount,
                    ]
                ]
            ]

        ])->json();

        return $response;
    }

    public function capturePaypalOrder(Request $request)
    {
        $orderID = $request->orderID;
        $access_token = $this->generateAccessTokenPayPal();
        $response = Http::withHeaders([

            "Content_Type" => "application/json",
            "Authorization" => "Bearer $access_token",

        ])->post(config('services.paypal.url') . "/v2/checkout/orders/$orderID/capture", [
            'intent' => 'CAPTURE',
        ])->json();

        if(!isset($response['status']) || $response['status'] !== 'COMPLETED'){
            throw new \Exception("Error al capturar el pago");
            
        }

          // La captura se completó con éxito, actualiza el campo "robot" del usuario
            $user = Auth::user();
            $user->serenus = 'activo';
            $user->save();
            
        //Aqui puedes realizar una accion luego de una captura

        return $response;
    }

    public function generateAccessTokenPayPal()
    {
        $auth = base64_encode(config('services.paypal.client_id') . ':' . config('services.paypal.secret'));
        $response = Http::asForm()->withHeaders([
            'Authorization' => "Basic $auth",
        ])
            ->post(config('services.paypal.url') . '/v1/oauth2/token', [
                'grant_type' => 'client_credentials'
            ])->json();

        return $response['access_token'];
    }


   
}
