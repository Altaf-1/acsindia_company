<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OfflineRegister extends Notification
{
    use Queueable;
    public $data;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
            ->greeting('Dear ' . $this->data['name'] . ',')
            ->subject('Thank you for Registration')
            ->line('REGISTRATION CONFIRMED')
            ->line('Thank you for registering in the All Assam Offline APSC PRELIMS Mock exam to be held on 25th February 2023.')
            ->line('✅ Admit cards for the test and the test centre of each district will be declared soon.')
            ->line('✅ To access the course content related to this exam.')
            ->line('🖋️ Go to the website www.acsindiaias.com and log in to your registered account.')
            ->line('🖋️ Then click on your name in the above right corner and go to my courses and scroll below.')
            ->line('🖋️ All the best!');
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
