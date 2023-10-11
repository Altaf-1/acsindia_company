<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class TrackingNotification extends Notification
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
            ->greeting('Hi ' . $this->data['name'] . ',')
            ->subject('Tracking ID of Study Materials')
            ->line('Please follow the Tracking ID to monitor your package of Hard copy Study Materials through India Post. Your Tracking ID number: ')
            ->line($this->data['id'])
            ->line("If you'd like to review your registration forms or view or make a payment, you can do so on your dashboard. Log in with the email you received this message at. If you do not remember your password, simply click the “Forgot Password” link and follow the prompts.")
            ->line(new HtmlString("<a href='https://www.acsindiaias.com/'>ACCESS YOUR DASHBOARD</a>"))
            ->line("If you have any questions or concerns, feel free to contact me at email or +919085268769.")
            ->salutation(new HtmlString('<span>All the Best, <br> Academy of Civil Services<span>'));
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
