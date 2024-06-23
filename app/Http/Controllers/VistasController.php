<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;


class VistasController extends Controller
{

    public function home()
    {
        // Obtener la cantidad de usuarios
        $userCount = User::count();

        // Pasar la cantidad de usuarios a la vista
        return view('home.home', ['userCount' => $userCount]);
    }

    public function tradingai()
    {

        return view('home.trading-ai');
    }


    public function policy()
    {

        return view('home.policy');
    }


    public function terms()
    {

        return view('home.terms');
    }


    public function cookies()
    {

        return view('home.cookies');
    }

    public function faqs()
    {

        return view('home.faqs');
    }

    public function telegram()
    {
        // Obtener el código del grupo de Telegram
        $telegramGroupCode = '+TCdsP204umtkYzgx'; // Reemplaza 'código_del_grupo' con el código del grupo real
    
        // Construir el enlace de invitación al grupo de Telegram sin el messageId ni botUsername
        $telegramGroupInviteLink = "https://t.me/$telegramGroupCode";
        
    
        // Pasar la variable $telegramGroupInviteLink a la vista 'home.telegram'
        return view('home.telegram', compact('telegramGroupInviteLink'));
    }
    
    public function telegramplus()
    {
        // Obtener el código del grupo de Telegram
        $telegramGroupCodePlus = '+OxymO_9wE41mNzlh'; // Reemplaza 'código_del_grupo' con el código del grupo real
    
        // Construir el enlace de invitación al grupo de Telegram sin el messageId ni botUsername
        $telegramGroupInviteLinkPlus = "https://t.me/$telegramGroupCodePlus";
        
    
        // Pasar la variable $telegramGroupInviteLink a la vista 'home.telegram'
        return view('home.telegram-plus', compact('telegramGroupInviteLinkPlus'));
    }

    
}

// public function redirectToTelegramGroup(Request $request)
    // {
    //     // Obtener el ID de Telegram desde el formulario oculto
    //     $telegramId = $request->input('telegram_id');
    
    //     // Verificar que el usuario esté autenticado
    //     if (Auth::check()) {
    //         // Validar que el 'telegram_id' no esté duplicado en la tabla de usuarios, excluyendo al usuario autenticado
    //         $validator = Validator::make(['telegram_id' => $telegramId], [
    //             'telegram_id' => 'unique:users,telegram_id,' . Auth::id(),
    //         ]);
    
          
    //         if ($validator->fails()) {
    //             return response()->json(['error' => true, 'message' => $validator->errors()->all()]);
    //         }
    
    //         // Actualizar el ID de Telegram en el campo 'telegram_id' del usuario
    //         DB::table('users')
    //             ->where('id', Auth::id()) // Filtrar por el ID del usuario autenticado
    //             ->update(['telegram_id' => $telegramId]);
    //     }
    
    //     // Redirigir al grupo de Telegram
    //     return redirect('https://t.me/+TCdsP204umtkYzgx');
    // }

// public function redirectToTelegramGroup(Request $request)
// {
//     // Obtener el ID de Telegram desde el formulario oculto
//     $telegramId = $request->input('telegram_id');

//     // Verificar que el usuario esté autenticado
//     if (Auth::check()) {
//         // Obtener el usuario autenticado
//         $user = Auth::user();

//         // Guardar el ID de Telegram en el campo 'telegram_id' del usuario
//         DB::table('users')
//             ->where('id', $user->id)
//             ->update(['telegram_id' => $telegramId]);
//     }

//     // Redirigir al grupo de Telegram
//     return redirect('https://t.me/+TCdsP204umtkYzgx');
// }
