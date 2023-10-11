<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class AcsScholarshipAndMentoring extends Notification
{
    use Queueable;

    public $data;
    public $greetLine;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $greetLine)
    {
        $this->data = $data;
        $this->greetLine = $greetLine;
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
            ->greeting('Dear ' . $this->data->name . ',')
            ->subject('Thank you for Registration')
            ->line($this->greetLine)
            ->line("Registration Number")
            ->line("ACS: 0" . $this->data->id)
            ->salutation(new HtmlString('<span>Regards, <br> Academy of Civil Services<span>'));
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
