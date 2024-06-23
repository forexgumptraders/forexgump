<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;
use Illuminate\Notifications\Messages\BroadcastMessage;

class MessageSent extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(public $article)
    {
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['broadcast', 'database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nueva señal')
            ->greeting('Forex Gump')
            ->line('Señal: ' . $this->article['title'])
           
            ->line('Orden: ' .$this->article['orden'])
            ->line('Entrada: ' . strip_tags($this->article['entrada']))
            ->line('Stop Loss: ' . strip_tags($this->article['sl']))
            ->line('Take Profit: ' . strip_tags($this->article['tp']))
            ->action('Ver Señal', route('articles.show', $this->article->id))
            ->line('www.forexgump.com');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {

        $notifiable->notification += 1;
        $notifiable->save();

        return [
            'url' => route('articles.show', $this->article->id),
            'message' => 'Nueva notificación relacionada con: ' . $this->article->title
        ];
    }


    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'article' => $this->article,
            'channel' => "private-user.{$notifiable->id}",
        ]);
    }

    
}
