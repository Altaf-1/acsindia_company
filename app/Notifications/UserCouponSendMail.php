<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class UserCouponSendMail extends Notification
{
    use Queueable;
    public $code,$user;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($code, $user)    {
        $this->code = $code;
        $this->user = $user;
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
                    ->subject('Coupon Code')
                    ->greeting('Dear Aspirant '.$this->user)
                    ->line('ACS India is happy to reward you the 50% Scholarship coupon code which you have earned for attending the offline Seminar')
                    ->line('Your coupon code is: '.$this->code)
                    ->line('Please use the code while you check out')
                    ->line('Click the below link to visit the website')
                    ->line(new HtmlString("<center><a style='color:white; padding: 5px; background-color: orange; border-radius: 2px' href='https://www.acsindiaias.com/'>Visit the Website</a></center>"))
                    ->action('Join our telegram channel', 'https://t.me/acsias')
                    ->line('Hope to see you soon with us.')
                    ->line('Regards')
                    ->line('Academy of Civil Services')
                    ->line('Call us : 6000793224');

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
