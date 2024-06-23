<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CookieConsent extends Component
{
    public $cookiePolicyLink;

    public function __construct($cookiePolicyLink)
    {
        $this->cookiePolicyLink = $cookiePolicyLink;
    }

    public function render()
    {
        return view('components.cookie-consent');
    }
}
