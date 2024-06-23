<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;


class AuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();

    }


    public function callback(){
        $user = Socialite::driver('facebook')->user();

    $user = User::firstOrCreate([
         'email' => $user->getEmail(),
    ],[ 
        'name' => $user->getName(),
    ]);


    $user->createAsStripeCustomer();

        auth()->login($user);
        

        return redirect()->to('/');
    }
}
