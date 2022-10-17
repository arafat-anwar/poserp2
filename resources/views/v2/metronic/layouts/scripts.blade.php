<script>var hostUrl = "{{ asset('metronic/assets') }}/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('metronic/assets') }}/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('metronic/assets') }}/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used by this page)-->
<script src="{{ asset('metronic/assets') }}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used by this page)-->
<script src="{{ asset('metronic/assets') }}/js/widgets.bundle.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/widgets.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/create-app.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/new-target.js"></script>
<script src="{{ asset('metronic/assets') }}/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->


<script type="text/javascript">
    base_path = "{{url('/')}}";
    //used for push notification
    APP = {};
    APP.PUSHER_APP_KEY = '{{config('broadcasting.connections.pusher.key')}}';
    APP.PUSHER_APP_CLUSTER = '{{config('broadcasting.connections.pusher.options.cluster')}}';
    //variable from app service provider
    APP.PUSHER_ENABLED = '{{$__is_pusher_enabled}}';
    @auth
        @php
            $user = Auth::user();
        @endphp
        APP.USER_ID = "{{$user->id}}";
    @else
        APP.USER_ID = '';
    @endauth
</script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js?v=$asset_v"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js?v=$asset_v"></script>
<![endif]-->
<script src="{{ asset('js/vendor.js?v=' . $asset_v) }}"></script>

@if(file_exists(public_path('js/lang/' . session()->get('user.language', config('app.locale')) . '.js')))
    <script src="{{ asset('js/lang/' . session()->get('user.language', config('app.locale') ) . '.js?v=' . $asset_v) }}"></script>
@else
    <script src="{{ asset('js/lang/en.js?v=' . $asset_v) }}"></script>
@endif
@php
    $business_date_format = session('business.date_format', config('constants.default_date_format'));
    $datepicker_date_format = str_replace('d', 'dd', $business_date_format);
    $datepicker_date_format = str_replace('m', 'mm', $datepicker_date_format);
    $datepicker_date_format = str_replace('Y', 'yyyy', $datepicker_date_format);

    $moment_date_format = str_replace('d', 'DD', $business_date_format);
    $moment_date_format = str_replace('m', 'MM', $moment_date_format);
    $moment_date_format = str_replace('Y', 'YYYY', $moment_date_format);

    $business_time_format = session('business.time_format');
    $moment_time_format = 'HH:mm';
    if($business_time_format == 12){
        $moment_time_format = 'hh:mm A';
    }

    $common_settings = !empty(session('business.common_settings')) ? session('business.common_settings') : [];

    $default_datatable_page_entries = !empty($common_settings['default_datatable_page_entries']) ? $common_settings['default_datatable_page_entries'] : 25;
@endphp

<script>
    moment.tz.setDefault('{{ Session::get("business.time_zone") }}');
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        @if(config('app.debug') == false)
            $.fn.dataTable.ext.errMode = 'throw';
        @endif
    });
    
    var financial_year = {
        start: moment('{{ Session::get("financial_year.start") }}'),
        end: moment('{{ Session::get("financial_year.end") }}'),
    }
    @if(file_exists(public_path('AdminLTE/plugins/select2/lang/' . session()->get('user.language', config('app.locale')) . '.js')))
    //Default setting for select2
    $.fn.select2.defaults.set("language", "{{session()->get('user.language', config('app.locale'))}}");
    @endif

    var datepicker_date_format = "{{$datepicker_date_format}}";
    var moment_date_format = "{{$moment_date_format}}";
    var moment_time_format = "{{$moment_time_format}}";

    var app_locale = "{{session()->get('user.language', config('app.locale'))}}";

    var non_utf8_languages = [
        @foreach(config('constants.non_utf8_languages') as $const)
        "{{$const}}",
        @endforeach
    ];

    var __default_datatable_page_entries = "{{$default_datatable_page_entries}}";

    var __new_notification_count_interval = "{{config('constants.new_notification_count_interval', 60)}}000";
</script>

@if(file_exists(public_path('js/lang/' . session()->get('user.language', config('app.locale')) . '.js')))
    <script src="{{ asset('js/lang/' . session()->get('user.language', config('app.locale') ) . '.js?v=' . $asset_v) }}"></script>
@else
    <script src="{{ asset('js/lang/en.js?v=' . $asset_v) }}"></script>
@endif

<script src="{{ asset('js/functions.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/common.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/app.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/help-tour.js?v=' . $asset_v) }}"></script>
<script src="{{ asset('js/documents_and_note.js?v=' . $asset_v) }}"></script>

<!-- TODO -->
@if(file_exists(public_path('AdminLTE/plugins/select2/lang/' . session()->get('user.language', config('app.locale')) . '.js')))
    <script src="{{ asset('AdminLTE/plugins/select2/lang/' . session()->get('user.language', config('app.locale') ) . '.js?v=' . $asset_v) }}"></script>
@endif
@php
    $validation_lang_file = 'messages_' . session()->get('user.language', config('app.locale') ) . '.js';
@endphp
@if(file_exists(public_path() . '/js/jquery-validation-1.16.0/src/localization/' . $validation_lang_file))
    <script src="{{ asset('js/jquery-validation-1.16.0/src/localization/' . $validation_lang_file . '?v=' . $asset_v) }}"></script>
@endif

@if(!empty($__system_settings['additional_js']))
    {!! $__system_settings['additional_js'] !!}
@endif

@yield('javascript')

@if(Module::has('Essentials'))
  @includeIf('essentials::layouts.partials.footer_part')
@endif

<script type="text/javascript">
    $(document).ready( function(){
        var locale = "{{session()->get('user.language', config('app.locale'))}}";
        var isRTL = @if(in_array(session()->get('user.language', config('app.locale')), config('constants.langs_rtl'))) true; @else false; @endif

        $('#calendar').fullCalendar('option', {
            locale: locale,
            isRTL: isRTL
        });
    });
</script>

<script src="{{ asset('metronic/assets') }}/plugins/custom/datatables/datatables.bundle.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.each($('.dataTable'), function(index, val) {
            $(this).addClass('align-middle table-row-dashed fs-6 gy-5 no-footer');
            $(this).find('thead').addClass('bg-dark text-white');
            $(this).find('.previous').find('a').html('hello');
            $(this).find('.next').find('a').html('world');
        });
        $('.dataTables_filter').find('input').css('border', '1px solid #bbb !important;');
        $('.dataTables_wrapper').addClass('bg-white p-4 pt-5');
        $('.dt-buttons').addClass('mt-4');
    });
</script>