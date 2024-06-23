<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Laravel\Cashier\Exceptions\IncompletePayment;

class Subscriptions extends Component

{
    public $price;
    public $name = "señales";

    protected $listeners = ['render'];

    public function mount($price){
        $this->price = $price; 
    }

    public function render()
    {
        return view('livewire.subscriptions');
    }

    public function newSubscription(){

        try {
            auth()->user()->newSubscription($this->name, $this->price)->create();

            $this->emitTo('invoices', 'render');
            $this->emitTo('subscriptions', 'render');


        } catch (IncompletePayment $exception) {
            return redirect()->route(
                'cashier.payment',
                [$exception->payment->id, 'redirect' => route('billing.index')]
            );
        }

      

    }

    public function changingPlans(){

        auth()->user()->subscription($this->name)->swap($this->price);

        $this->emitTo('invoices', 'render');
        $this->emitTo('subscriptions', 'render');

    }

    public function cancelingSubscription(){

        auth()->user()->subscription($this->name)->cancel();
        $this->emitTo('subscriptions', 'render');

    }

    public function resuminSubscription(){

        auth()->user()->subscription($this->name)->resume();
        $this->emitTo('subscriptions', 'render');

    }
}
