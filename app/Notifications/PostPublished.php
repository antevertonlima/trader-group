<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notifiable;

class PostPublished extends Notification
{
    use Queueable;
    use Notifiable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($user)
    {
        /*return TelegramMessage::create()
            ->to('@TraderGroupMiniIndiceBovespa')
            ->content('Usuario '.$user->name.' acabou de entrar. Teste Telegram channel!'); */
        $url = url('https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6029/6029014_rd.jpg');

        return TelegramMessage::create()
            ->to('@TraderGroupMiniIndiceBovespa') // Optional.
            ->content("[inline URL](http://www.example.com/)") // Markdown supported.
            ->options(['photo' => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6029/6029014_rd.jpg'])
            //->file('/storage/archive/6029014.jpg', 'photo') // local photo
            // OR
            //->file('https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6029/6029014_rd.jpg', 'photo') // remote photo
            ->button('Download PDF', $url); // Inline Button
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
