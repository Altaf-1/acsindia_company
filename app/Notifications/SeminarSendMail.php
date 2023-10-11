<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class SeminarSendMail extends Notification
{
    use Queueable;
    public $data;
    public $greetLine;
    public $date;
    public $venue;
    public $contact;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $greetLine, $date, $venue, $contact)
    {
        $this->data = $data;
        $this->greetLine = $greetLine;
        $this->date = $date;
        $this->venue = $venue;
        $this->contact = $contact;
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
            ->line($this->greetLine)
            ->line("Registration Number")
            ->line("ACS: 0" . $this->data['id'])
            ->line($this->date)
            ->salutation(new HtmlString('<span>Regards, <br> Academy of Civil Services<span>'))
            ->line($this->venue)
            ->line($this->contact);
        // ->line('GUWAHATI CENTER: 3rd floor,Chitrabon Enclave, R G BARUAH ROAD, Near Gauhati Commerce College')
        // ->line("For more details: 6000793224");
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
