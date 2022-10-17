@extends('v2.metronic.index')
@section('title', __('superadmin::lang.superadmin') . ' | Business')

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
{{--                        <h1>@lang( 'superadmin::lang.all_business' )</h1>--}}
                        <h1>@lang( 'superadmin::lang.manage_business' )</h1>
{{--                        <small>@lang( 'superadmin::lang.manage_business' )</small>--}}
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="m-0">
                            <!--begin::Menu toggle-->
                            <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
												</svg>
											</span>
                                <!--end::Svg Icon-->Filter</a>
                            <!--end::Menu toggle-->
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631ace3f3a3b1">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631ace3f3a3b1" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                        </div>
                        <!--end::Filter menu-->
                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            @can('superadmin')
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Row-->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
                        <!--begin::Col-->

                            @foreach ($businesses as $business)
                                @php
                                    $address = $business->locations->first();
//                                @endphp
                            <div class="col-md-4">
                                <!--begin::Card-->
                                <div class="card card-flush h-md-100">
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-1 mt-5" style="margin: 0 auto">
                                        @if(!empty($business->logo))
                                            <div class="image-input-wrapper w-150px h-150px" style="background-image: url('{{ asset('/uploads/business_logos/' . $business->logo) }}')"></div>
                                        @endif
                                    </div>
{{----}}
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            @if(!empty($business->owner))
                                                <h2>{{ $business->name }}</h2>
                                            @endif
                                        </div>
                                        <div class="right pt-5">
                                            {{--                                        @if($package->is_active == 1)--}}
                                            {{--                                        <span class="badge badge-light-primary">New</span>--}}
                                            {{--                                            --}}
{{--                                            @if($package->is_active == 1)--}}
{{--                                                <span class="badge badge-light-primary"> @lang('superadmin::lang.active') </span>--}}
{{--                                            @else--}}
{{--                                                <span class="badge badge-light-danger">@lang('superadmin::lang.inactive') </span>--}}
{{--                                            @endif--}}
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-1">
                                        <!--begin::Users-->
{{--                                        <div class="fw-bold text-gray-600 mb-5">Total users with this role: 5</div>--}}
                                        <!--end::Users-->
                                        <!--begin::Permissions-->
                                        <div class="d-flex flex-column text-gray-600">
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span>
                                                 @if(!empty($business->owner))
                                                     @if(!empty($business->owner->email))
                                                        {{ $business->owner->email }}<br>
                                                     @endif
                                                     @if(!empty($business->owner->first_name || $business->owner->last_name))
                                                        {{ $business->owner->first_name . ' ' . $business->owner->last_name }} <br>
                                                     @endif
                                                     @if(!empty($business->owner->mobile))
                                                         {{ $business->owner->mobile }}<br>
                                                     @endif
                                                     @if(!empty($business->owner->contact_no))
                                                        {{ $business->owner->contact_no }} <br>
                                                     @endif
                                                     @if(!empty($address->mobile))
                                                     {!! $address->mobile !!} <br>
                                                     @endif
                                                     {!! $address->alternate_number !!}
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span>
                                                <address class="widget-user-desc">
                                                    @php
                                                        $address_array = [];
                                                        $city_landmark = '';
                                                        if(!empty($address->city)){
                                                            $city_landmark = $address->city;
                                                        }
                                                        if(!empty($address->landmark)){
                                                            $city_landmark .= '- ' . $address->landmark;
                                                        }
                                                        if(!empty($city_landmark)){
                                                            $address_array[] = $city_landmark;
                                                        }

                                                        $state_country = '';
                                                        if(!empty($address->state)){
                                                            $state_country = $address->state;
                                                        }
                                                        if(!empty($address->country)){
                                                            $state_country .= ' (' . $address->country . ')';
                                                        }
                                                        if(!empty($state_country)){
                                                            $address_array[] = $state_country;
                                                        }
                                                        if(!empty($address->zip_code)){
                                                            $address_array[] = __('business.zip_code') . ': ' .$address->zip_code;
                                                        }
                                                    @endphp
                                                    {!! strip_tags(implode('<br>', $address_array), '<br>') !!}
                                                </address>
                                            </div>
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span>
                                                @php
                                                    $package = !empty($business->subscriptions[0]) ? optional($business->subscriptions[0])->package : '';
                                                @endphp

                                                @if(!empty($package))
                                                    {{$package->name}}
                                                @endif
                                            </div>
                                            <div class="d-flex align-items-center py-2">
                                                <span class="bullet bg-primary me-3"></span>
                                                @if(!empty($business->subscriptions[0]))
                                                    <h5 class="widget-user-desc">
{{--                                                        <i class="fas fa-clock"></i>--}}
                                                        @lang('superadmin::lang.remaining', ['days' => \Carbon::today()->diffInDays($business->subscriptions[0]->end_date)])
                                                    </h5>
                                                @endif
                                            </div>

{{--                                            <div class='d-flex align-items-center py-2'>--}}
{{--                                                <span class='bullet bg-primary me-3'></span>--}}
{{--                                                <em>and 3 more...</em>--}}
{{--                                            </div>--}}

                                            <div class='d-flex align-items-center py-2'>
                                                <div class="box-footer text-center">
{{--                                                    {{$package->description}}--}}
                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Permissions-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--begin::Card footer-->
                                    <div class="card-footer flex-wrap pt-0">
{{--                                        <a href="#" class="btn btn-sm btn-light btn-active-primary my-1 me-2 disabled">View Role</a>--}}
                                        <a href="{{action('\Modules\Superadmin\Http\Controllers\BusinessController@show', [$business->id])}}"
                                           class="btn btn-sm btn-hover-rise btn-info btn-active-info my-1 me-2">@lang('superadmin::lang.manage' )</a>
                                        <button type="button" class="btn btn-hover-rotate-start btn-sm btn-primary btn-active-primary my-1 me-2" data-href="{{action('\Modules\Superadmin\Http\Controllers\SuperadminSubscriptionsController@create', ['business_id' => $business->id])}}" data-container=".view_modal">
                                            @lang('superadmin::lang.add_subscription' )
                                        </button>

                                        @if($business->is_active == 1)
                                            <a href="{{action('\Modules\Superadmin\Http\Controllers\BusinessController@toggleActive', [$business->id, 0])}}"
                                               class="btn btn-sm btn-hover-rise btn-warning btn-active-warning my-1 me-2 link_confirmation">@lang('messages.deactivate')
                                            </a>
                                        @else
                                            <a href="{{action('\Modules\Superadmin\Http\Controllers\BusinessController@toggleActive', [$business->id, 1])}}"
                                               class="btn btn-sm btn-light btn-active-success my-1 me-2 link_confirmation">@lang('messages.activate' )
                                            </a>
                                        @endif

                                        @if($business_id != $business->id)
                                            <a href="{{action('\Modules\Superadmin\Http\Controllers\BusinessController@destroy', [$business->id])}}"
                                               class="btn btn-sm btn-danger btn-hover-rotate-end btn-active-danger my-1 me-2 delete_business_confirmation">@lang('messages.delete' )
                                            </a>
                                        @endif
                                    </div>
                                    <!--end::Card footer-->
                                </div>
                                <!--end::Card-->
                            </div>
                            @endforeach
                        <!--end::Col-->
                        <!--end::Col-->
                        <!--begin::Add new card-->
                        <div class="ol-md-4">
                            <!--begin::Card-->
                            <div class="card h-md-100">
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-center">
                                    <!--begin::Button-->
                                    <a href="{{action('\Modules\Superadmin\Http\Controllers\BusinessController@create')}}" class="btn btn-clear d-flex flex-column flex-center">
                                        <!--begin::Illustration-->
                                        <img src="{{ asset('metronic/assets') }}/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-150px mb-7" />
                                        <!--end::Illustration-->
                                        <!--begin::Label-->
                                        <div class="fw-bold fs-3 text-gray-600 text-hover-primary"> @lang( 'messages.add' )</div>
                                        <!--end::Label-->
                                    </a>
                                    <!--begin::Button-->
                                </div>
                                <!--begin::Card body-->
                            </div>
                            <!--begin::Card-->
                        </div>
                        <!--begin::Add new card-->
                    </div>
                    <ul class="pagination">
                        <li class="page-item ">
                            {{ $businesses->links() }}
                        </li>
                    </ul>
                    <!--end::Row-->
                    <!--begin::Modals-->
                </div>
                <!--end::Content container-->
            </div>
            @endcan
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
@endsection

@section('javascript')

<script type="text/javascript">
    $(document).on('click', 'a.delete_business_confirmation', function(e){
        e.preventDefault();
        swal({
            title: LANG.sure,
            text: "Once deleted, you will not be able to recover this business!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((confirmed) => {
            if (confirmed) {
                window.location.href = $(this).attr('href');
            }
        });
    });

    $(document).ready(function(){

        // DataTable
        $('#empTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "/superadmin/superadmin-subscription",
            columns: [
                { data: 'id' },
                { data: 'username' },
                { data: 'name' },
                { data: 'email' },
            ]
        });

    });
</script>
<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('/superadmin/search')}}',
            data:{'search':$value},
            success:function(data){
                $('tbody').html(data);
            }
        });
    })
</script>

@endsection
