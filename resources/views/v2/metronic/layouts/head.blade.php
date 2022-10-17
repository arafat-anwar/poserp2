<head>
	<base href=""/>
	<link rel="icon" type="image/x-icon" href="{{ asset('/img/fav.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ Session::get('business.name') }}</title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:url" content="#" />
	<meta property="og:site_name" content="#" />
	<link rel="canonical" href="#" />
	
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	
	<!--begin::Vendor Stylesheets(used by this page)-->
	<link href="{{ asset('metronic/assets') }}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="{{ asset('metronic/assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="{{ asset('metronic/assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />{{-- 
	<link href="{{ asset('metronic/assets') }}/css/style.bundle.v2.css?v=7.2.9" rel="stylesheet" type="text/css" /> --}}
	<link href="{{ asset('metronic/assets') }}/css/style.custom.css" rel="stylesheet" type="text/css" />
	{{-- <link href="{{ asset('css') }}/vendor.css" rel="stylesheet" type="text/css" /> --}}
	<!--end::Global Stylesheets Bundle-->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	<link href="{{ asset('metronic/assets') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

	@include('v2.metronic.layouts.css')
</head>
