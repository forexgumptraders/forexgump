<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{

    public $count = 3;

    protected $listeners = ['notification'];

    public function getListeners()
    {
        return [
            'echo-notification:App.Models.User.' . auth()->id() . ',MessageSent' => 'render',
        ];
    }

    public function getNotificationsProperty()
    {
        return auth()->user()->notifications->take($this->count);
    }


    public function incrementCount()
    {
        $this->count += 3;
    }
    public function read($id)
    {
        auth()->user()->notifications->find($id)->markAsRead();
    }
    public function resetNotificationCount()
    {

        auth()->user()->notification = 0;
        auth()->user()->save();
    }



    public function render()
    {
        return view('livewire.notification-component');
    }
}
