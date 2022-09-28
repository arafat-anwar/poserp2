<?php

namespace Modules\Superadmin\Http\Controllers;

use App\BusinessLocation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Business;
use App\User;

use Modules\Superadmin\Notifications\SuperadminCommunicator;
use Modules\Superadmin\Entities\SuperadminCommunicatorLog;

use Yajra\DataTables\Facades\DataTables;

class CommunicatorController extends BaseController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        if (!auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }

        $businesses = Business::orderby('name')
                                ->pluck('name', 'id');

        return view('superadmin::'.viewSource().'communicator.index')
                ->with(compact('businesses'));
    }

    /**
     * Sends notification to the required business owners.
     * @param  Request $request
     * @return Response
     */
    public function send(Request $request)
    {
        if (!auth()->user()->can('superadmin')) {
            abort(403, 'Unauthorized action.');
        }

        //Disable in demo
        if (config('app.env') == 'demo') {
            $output = ['success' => 0,
                            'msg' => 'Feature disabled in demo!!'
                        ];
            return back()->with('status', $output);
        }

        $input = $request->input();

        //Get business owners
        $business_owners = User::join('business as B', 'users.id', '=', 'B.owner_id')
                        ->whereIn('B.id', $input['recipients'])
                        ->select('users.*')
                        ->groupBy('users.id')
                        ->get();
//dd($business_owners);
        if (count($request->select_type)==2){
            //Send email to all business owners
            \Notification::send($business_owners, new SuperadminCommunicator($input));

            foreach ($business_owners as $business_owner){
                //Send sms to all business owners
                $business_location = BusinessLocation::where('business_id', $business_owner->business_id)->first();
                $validateNumber = $this->validate_mobile($business_location->mobile);
                if ($validateNumber && $business_location->mobile != null && env('APP_ENV') != 'local'){
                    $toNumber = $business_location->mobile;
                    $sub = $input['subject'];
                    $msg= $input['message'];
                    $body = $sub . ' ' . $msg;
//                            dd($body);
                    $this->SendSMS($toNumber, $body);
                }
            }
        }else{
            //email or sms
            foreach ($request->select_type as $select_type){
                if ($select_type == 0){
                    //email
                    //Send notifications
                    \Notification::send($business_owners, new SuperadminCommunicator($input));
                }elseif ($select_type == 1){
                    foreach ($business_owners as $business_owner){
                        //sms
                        $business_location = BusinessLocation::where('business_id', $business_owner->business_id)->first();

//                        dd($business_location->mobile);
                        $validateNumber = $this->validate_mobile($business_location->mobile);
//                        dd($validateNumber);
                        if ($validateNumber && $business_location->mobile != null && env('APP_ENV') != 'local'){
                            $toNumber = $business_location->mobile;
                            $sub = $input['subject'];
                            $msg= $input['message'];
                            $body = $sub . ' ' . $msg;
//                            dd($body);
                            $this->SendSMS($toNumber, $body);
                        }
                    }
                }else{
                    //no
                    return 0;
                }
            }
        }

        //Create Log
        SuperadminCommunicatorLog::create([
            'business_ids' => $input['recipients'],
            'subject' => $input['subject'],
            'message' => $input['message']
        ]);

        $output = ['success' => 1,
                    'msg' => __('lang_v1.success')
                ];

        return back()->with('status', $output);
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

    public function getHistory()
    {
        $history = SuperadminCommunicatorLog::select('subject', 'message', 'created_at');

        return Datatables::of($history)
                         ->editColumn(
                             'created_at',
                             '{{@format_date($created_at)}} {{@format_time($created_at)}}'
                         )
                         ->make(false);
    }
}
