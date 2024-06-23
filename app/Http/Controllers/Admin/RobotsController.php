<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File; 
use Illuminate\Support\Facades\Storage;


class RobotsController extends Controller
{
    public function index(){

        $robots = File::all();



        return view('admin.robots.index', compact('robots'));
    }
    public function store(Request $request){
        // Validar que se ha seleccionado un archivo
        $request->validate([
            'file' => 'required|file',
        ]);
    
        // Si llegamos a este punto, significa que se ha seleccionado un archivo
    
        $name = $request->file('file')->getClientOriginalName();
    
        $path = $request->file('file')->store('/robots');
    
        $array = explode('public', $path);
    
        $save = new File;
    
        $save->name = $name;
        $save->path = 'storage/'.$array[0];
    
        $save->save();
    
        return redirect()->route('admin.robots.index')->with('status', 'Robot subido correctamente');
        
    }

    public function destroy($id){
        $robot = File::findOrFail($id);

        // Eliminar el archivo físico
        $path = str_replace('storage/storage', 'storage', $robot->path);

        unlink(public_path($path));

        Storage::delete($robot->path);

        // Eliminar el registro de la base de datos
        $robot->delete();

        return redirect()->route('admin.robots.index')->with('status', 'Robot subido correctamente');
    }

    
    
    
}
