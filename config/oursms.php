<?php
return [
    /*
    |-------------------------------------
    | OurSMS service credentials
    |-------------------------------------
    */
    'user_id'  =>  env('OURSMS_USER_ID',  'eis1980'),
    'secret_key'  =>  env('OURSMS_SECRET_KEY',  'LsQg79YcOn5Q1suXsCqS'),

    /*
    |-------------------------------------
    | OurSMS service API base_uri
    |-------------------------------------
    */
        'base_uri'  =>  'https://oursms.app/api/v1/SMS'

];