<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PatientAccountActivationNotification extends Notification
{
    use Queueable;
    private $token;
    private $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($patient)
    {
        $this -> name = $patient -> name;
        $this -> token = $patient -> access_token;
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
                    ->line('Hi ' . $this -> name .', Thanks for your acount, Now you have to activate your account ')
                    ->action('Activate', url('/patient_account_activation/' . $this -> token ))
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
