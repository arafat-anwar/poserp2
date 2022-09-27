<?php

namespace App\Console\Commands;

use App\Business;
use App\BusinessLocation;
use App\Mail\SendSubscriptionExpiryAlertEmail;
use App\System;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Modules\Superadmin\Entities\Subscription;
use Modules\Superadmin\Notifications\SendSubscriptionExpiryAlert;
use Notification;

class SendSubscriptionExpiryAlertCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'subscription expire';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $min_alert_days = System::where('key', 'package_expiry_alert_days')->value('value');
        $now = \Carbon::today()->toDateString();
        $expiring_subscriptions = Subscription::approved()
            ->with(['business', 'business.owner'])
            ->get();
        foreach ($expiring_subscriptions as $subscription){
            $days_left = \Carbon::now()->diffInDays($subscription->end_date) + 1;
            if ($days_left <= $min_alert_days){
                $owner_name = $subscription->business->owner->first_name.' '.$subscription->business->owner->last_name??$subscription->business->owner->username;
                $app_name = config('app.name');
                $business_name = $subscription->business->name;
                $days_left = $days_left;
                $url = env('APP_URL') . '/subscription';
                $app_url = env('APP_URL');
                $body = "Your subscription for $business_name will expire in $days_left days. Please renew your subscription to continue using $app_name.";
                $email = $subscription->business->owner->email;
                $find_locations = BusinessLocation::where('business_id', $subscription->business_id)->first();
                $mobile = $find_locations->mobile;
                if (!empty($mobile) && env('APP_ENV')== 'production'){
                    $valid_mobile = $this->validate_mobile($mobile);
                    if ($valid_mobile){
                        try {
                            $user_name = $owner_name;
                            $smsBody = "عزيزي {$user_name} ، تنتهي صلاحية اشتراكك في برنامج مهام السحابي بعد {$days_left} يوم.  يرجى تجديد الاشتراك لمتابعة الاستخدام {$business_name} {$url}";
                            $this->SendSMS($mobile, $smsBody);
                        } catch (\Exception $e){
                            info($e->getMessage());
                        }
                    }else{
                        info('invalid mobile number => '.$mobile);
                    }
                }
                try {
                    if (!empty($email)) {
                        $user_name = $owner_name;
                        \Mail::to($email)->send(new SendSubscriptionExpiryAlertEmail($user_name, $days_left, $business_name,$app_name, $url, $app_url,$body));
                    }
                } catch (\Exception $e) {
                    \Log::error($e->getMessage());
                }
//                Notification::send($subscription->business->owner, new SendSubscriptionExpiryAlert($subscription));
            }
        }
    }

    function validate_mobile($mobile)
    {
        return preg_match('/^((?:[+?0?0?966]+)(?:\s?\d{2})(?:\s?\d{7}))$/', $mobile);
    }

    public function SendSMS($toNumber, $body)
    {
        $username = 'eis1980';
        $token = 'LsQg79YcOn5Q1suXsCqS';
        $src = 'MHAM';
        $dests = $toNumber;
        $body = $body;
        $priority = 1;
        $delay = 0;
        $validity = 0;
        $maxParts = 0;
        $dlr = 0;
        $prevDups = 0;
        $msgClass = 'promotional';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://api.oursms.com/api-a/msgs");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(array(
                'username' => $username,
                'token' => $token,
                'src' => $src,
                'dests' => $dests,
                'body' => $body,
                'priority' => $priority,
                'delay' => $delay,
                'validity' => $validity,
                'maxParts' => $maxParts,
                'dlr' => $dlr,
                'prevDups' => $prevDups,
                'msgClass' => $msgClass
            ))
        );

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close ($ch);

// Further processing ...
        if ($server_output == "OK") {
            return true;
        } else {
            return false;
        }
    }
}
