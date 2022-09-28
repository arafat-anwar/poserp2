<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="icon" type="image/x-icon" href="{{ asset('/img/fav.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="mhamcloud |, المبيعات والمخازن اونلاين بإشتراك شهري">
    <meta name="author" content="mhamcloud">
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="mhamcloud - برنامج المحاسبة لإدارة الأنشطة التجارية"/>
    <meta property="og:site_name" content="mhamcloud "/>
    <meta property="og:image" content="https://mhamcloud.com/img/PNG%20LOGO00004.png"/>
    <meta property="og:description" content=" مرحبا   نحن نعم علي بناء و تطوير المواقع وبرامج سطح المكتب"/>

    <meta name="keywords" content="صيدليات ,
		مخازن , مخزون , مستودعات , حسابات , مشتريات , مبيعات , عملاء , موردين , عملاء وموردين , محلات ، إدارة محلات ،
		برنامج مخازن , برنامج حسابات , برنامج مستودعات , برنامج مشتريات , برنامج عملاء , برنامج موردين , برنامج عملاء وموردين , برنامج محلات , برنامج مخزون , إدارة مستودعات ،برنامج محلات ،برنامج مخازن مجانى ,
		برنامج المخازن , برنامج الحسابات , برنامج المستودعات , برنامج المشتريات , برنامج العملاء , برنامج الموردين , برنامج العملاء والموردين ، برنامج المحلات , برنامج المخزون , برنامج إدارة المستودعات ، برنامج المحلات ،برنامج للمخازن مجانى ,
		برنامج للمخازن , برنامج للحسابات , برنامج للمستودعات , برنامج للمشتريات , برنامج للعملاء , برنامج للموردين , برنامج للعملاء والموردين ، برنامج للمحلات , برنامج للمخزون , برنامج لإدارة المستودعات ، برنامج للمحلات ،
		برنامج عربى ,
		justagain , pharmacy , drugs , ERP , store , customers , clients , suppliers , sales , stores , store , point of sale , pos , pos system , supermarket system ,
		" />


    <title>@yield('title') - {{ config('app.name', 'POS') }}</title> 

    @include('layouts.partials.css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="">
    @inject('request', 'Illuminate\Http\Request')
    @if (session('status'))
        <input type="hidden" id="status_span" data-status="{{ session('status.success') }}" data-msg="{{ session('status.msg') }}">
    @endif
    <div class="container-fluid">
        <div class="row eq-height-row">
            <div class="col-md-12 col-sm-7 col-xs-12 right-col eq-height-col" style="background-image: url({{ asset('/img/login-register-bg.jpg') }}); justify-content: center;">
                <div class="row" style="margin-top: 80px">
                    <div style="display: flex; gap: 10px">
                        <div class="col-md-3 col-xs-6" style="text-align: left;">
                            <select class="form-control select2 select2-hidden-accessible" id="change_lang" style="margin: 10px;min-width: 140px">
                                @foreach(config('constants.langs') as $key => $val)
                                    <option value="{{$key}}"
                                            @if( (empty(request()->lang) && config('app.locale') == $key)
                                            || request()->lang == $key)
                                            selected
                                            @endif
                                    >
                                        {{$val['full_name']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-7 col-xs-12" style="text-align: right;">
                        @if(!($request->segment(1) == 'business' && $request->segment(2) == 'register'))
                            <!-- Register Url -->
                                @if(config('constants.allow_registration'))
                                    <a style="margin-right: 20px" href="{{ route('business.getRegister') }}@if(!empty(request()->lang)){{'?lang=' . request()->lang}} @endif" class="btn  btn-flat" ><b>{{ __('business.not_yet_registered')}}</b> {{ __('business.register_now') }}</a>
                                    <!-- pricing url -->
                                    {{--@if(Route::has('pricing') && config('app.env') != 'demo' && $request->segment(1) != 'pricing')
                                        &nbsp; <a href="{{ action('\Modules\Superadmin\Http\Controllers\PricingController@index') }}">@lang('superadmin::lang.pricing')</a>
                                    @endif--}}
                                @endif
                            @endif
                            @if($request->segment(1) != 'login')
                                &nbsp; &nbsp;<span class="text-white">{{ __('business.already_registered')}} </span><a href="{{ action('Auth\LoginController@login') }}@if(!empty(request()->lang)){{'?lang=' . request()->lang}} @endif">{{ __('business.sign_in') }}</a>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        @yield('content')
                    </div>
                 </div>


            </div>
        </div>




    </div>




    
    @include('layouts.partials.javascripts')
    
    <!-- Scripts -->
    <script src="{{ asset('js/login.js?v=' . $asset_v) }}"></script>
    
    @yield('javascript')

    <script type="text/javascript">
        $(document).ready(function(){
            $('.select2_register').select2();

            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

</html>