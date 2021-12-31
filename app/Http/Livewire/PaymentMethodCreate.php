<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethodCreate extends Component
{
    public function render()
    {
        return view('livewire.payment-method-create', [
    'intent' => auth()->user()->createSetupIntent()
	]);

    }
}
