<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionExpiryAlertEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user_name;
    public $days_left;
    public $business_name;
    public $app_name;
    public $url;
    public $app_url;
    public $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name, $days_left, $business_name,$app_name, $url, $app_url,$body)
    {
        $this->user_name = $user_name;
        $this->days_left = $days_left;
        $this->business_name = $business_name;
        $this->app_name = $app_name;
        $this->url = $url;
        $this->app_url = $app_url;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Subscription Expiry Alert')->view('emails.expiry_alert');
    }
}
