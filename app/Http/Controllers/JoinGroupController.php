<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JoinGroupController extends Controller
{
    // public function redirectToTelegramGroup(Request $request)
    // {
    //     // Obtener el ID de Telegram desde el atributo personalizado en el enlace
    //     $telegramId = $request->get('telegram_id');
    
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
}
