<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Icono;

class IconoController extends Controller
{

    public function cambiarIcono()
{
    $icono = Icono::first();
    $navColor = $icono ? $icono->nav_color : '#000000'; // Color de navegación por defecto si no existe
    $textColor = $icono ? $icono->text_color : '#ffffff'; // Color de texto por defecto si no existe
    $darkMode = $icono ? $icono->dark_mode : false; // Agregar esta línea

    return view('admin.icono.edit', compact('icono', 'navColor', 'textColor', 'darkMode'));
}


    public function guardarIcono(Request $request)
    {

        $navColor = $request->input('nav_color');
        $textColor = $request->input('text_color');
        $darkMode = $request->input('dark_mode');
        $request->validate([
            'icono' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nav_color' => 'nullable|string|max:7', // Validación para el color de navegación hexadecimal
            'text_color' => 'nullable|string|max:7', // Validación para el color de texto hexadecimal
        ]);

        $imagePath = $request->file('icono')->store('iconos', 'public');
        $nombreImagen = basename($imagePath);

        $rutaRelativaImagen = 'iconos/' . $nombreImagen;

        // Verificar si ya existe un registro en la tabla 'iconos'
        $icono = Icono::first();

        if ($icono) {
            // Si existe, actualizarlo
            $dataToUpdate = [
                'nombre' => $nombreImagen,
                'ruta_completa_imagen' => $rutaRelativaImagen,
                'dark_mode' => $request->has('dark_mode') ? true : false, // Agregar esta línea

            ];

            if ($request->has('nav_color')) {
                $dataToUpdate['nav_color'] = $request->nav_color;
            }

            if ($request->has('text_color')) {
                $dataToUpdate['text_color'] = $request->text_color;
            }

            $icono->update($dataToUpdate);
        } else {
            // Si no existe, crear un nuevo registro
            $dataToCreate = [
                'nombre' => $nombreImagen,
                'ruta_completa_imagen' => $rutaRelativaImagen,
                'dark_mode' => $request->has('dark_mode') ? true : false, // Agregar esta línea

            ];

            if ($request->has('nav_color')) {
                $dataToCreate['nav_color'] = $request->nav_color;
            }

            if ($request->has('text_color')) {
                $dataToCreate['text_color'] = $request->text_color;
            }

            $icono = Icono::create($dataToCreate);
        }

    
        // Pasar la variable $icono a la vista
        return view('admin.icono.edit', compact('icono', 'navColor', 'textColor', 'darkMode'))
        ->with('success', 'Icono actualizado exitosamente.');    }
}
