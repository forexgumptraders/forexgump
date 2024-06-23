<?php

// app/Jobs/SendNotificationJob.php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Notifications\MessageSent;
use App\Models\User;
use Illuminate\Support\Facades\Notification;


class SendNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $article;
    public $users;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($article, $users)
    {
        $this->article = $article;
        $this->users = $users;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
         // Crea la notificación
         $notification = new MessageSent($this->article);

         // Envía la notificación a todos los usuarios obtenidos
         Notification::send($this->users, $notification);
         
 
    }
}
