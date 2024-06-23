<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookiePolicyController extends Controller
{
    public function show()
    {
        return view('components.cookie-policy'); // Puedes crear esta vista según tus necesidades
    }
}
