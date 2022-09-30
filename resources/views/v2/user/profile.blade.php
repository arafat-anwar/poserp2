@extends('v2.metronic.index')
@section('title', __('lang_v1.my_profile'))

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
{{--                        <!--begin::Title-->--}}
{{--                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Account Settings</h1>--}}
{{--                        <!--end::Title-->--}}
{{--                        <!--begin::Breadcrumb-->--}}
{{--                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">--}}
{{--                            <!--begin::Item-->--}}
{{--                            <li class="breadcrumb-item text-muted">--}}
{{--                                <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>--}}
{{--                            </li>--}}
{{--                            <!--end::Item-->--}}
{{--                            <!--begin::Item-->--}}
{{--                            <li class="breadcrumb-item">--}}
{{--                                <span class="bullet bg-gray-400 w-5px h-2px"></span>--}}
{{--                            </li>--}}
{{--                            <!--end::Item-->--}}
{{--                            <!--begin::Item-->--}}
{{--                            <li class="breadcrumb-item text-muted">Account</li>--}}
{{--                            <!--end::Item-->--}}
{{--                        </ul>--}}
                        <!--end::Breadcrumb-->
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
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_631ace75069e1">
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
                                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_631ace75069e1" data-allow-clear="true">
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
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Navbar-->
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
{{--                                        <img src="assets/media/avatars/300-1.jpg" alt="image" />--}}
                                        {!! $user->media->thumbnail([150, 150], 'img-circle') !!}
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $user->first_name??$user->first_name.' '. $user->last_name??$user->last_name }}</a>
                                                <a href="#">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
                                                            <path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
                                                            <rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Developer</a>
                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->SF, Bay Area</a>
                                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                    <span class="svg-icon svg-icon-4 me-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
                                                            <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->{{ $user->email??$user->email }}</a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Actions-->
                                        <div class="d-flex my-4">
                                            <a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                                <span class="svg-icon svg-icon-3 d-none">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
                                                        <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--begin::Indicator label-->
                                                <span class="indicator-label">Follow</span>
                                                <!--end::Indicator label-->
                                                <!--begin::Indicator progress-->
                                                <span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                <!--end::Indicator progress-->
                                            </a>
                                            <a href="#" class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_offer_a_deal">Hire Me</a>
                                            <!--begin::Menu-->
                                            <div class="me-0">
                                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <i class="bi bi-three-dots fs-3"></i>
                                                </button>
                                                <!--begin::Menu 3-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                    <!--begin::Heading-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">Subscription</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu separator-->
                                                            <div class="separator my-2"></div>
                                                            <!--end::Menu separator-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3">
                                                                    <!--begin::Switch-->
                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                        <!--begin::Input-->
                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                        <!--end::Input-->
                                                                        <!--end::Label-->
                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                        <!--end::Label-->
                                                                    </label>
                                                                    <!--end::Switch-->
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 my-1">
                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 3-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Earnings</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-danger me-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                                <path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-3 svg-icon-success me-2">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Progress-->
                                        <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                                <span class="fw-bold fs-6">100%</span>
                                            </div>
                                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
{{--                                <li class="nav-item mt-2">--}}
{{--                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Overview</a>--}}
{{--                                </li>--}}
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">Settings</a>
                                </li>
                                <!--end::Nav item-->
{{--                                <!--begin::Nav item-->--}}
{{--                                <li class="nav-item mt-2">--}}
{{--                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Security</a>--}}
{{--                                </li>--}}
{{--                                <!--end::Nav item-->--}}
{{--                                <!--begin::Nav item-->--}}
{{--                                <li class="nav-item mt-2">--}}
{{--                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Billing</a>--}}
{{--                                </li>--}}
{{--                                <!--end::Nav item-->--}}
{{--                                <!--begin::Nav item-->--}}
{{--                                <li class="nav-item mt-2">--}}
{{--                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="#">Statements</a>--}}
{{--                                </li>--}}
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                    <!--end::Navbar-->

                    <!--begin::Sign-in Method-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Sign-in Method</h3>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_signin_method" class="collapse show">
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Email Address-->
                                <div class="d-flex flex-wrap align-items-center">
                                    <!--begin::Label-->
                                    <div id="kt_signin_email">
                                        <div class="fs-6 fw-bold mb-1">Email Address</div>
                                        <div class="fw-semibold text-gray-600">{{ $user->email??$user->email }}</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Edit-->
                                    <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                        <!--begin::Form-->
                                        <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                            <div class="row mb-6">
                                                <div class="col-lg-6 mb-4 mb-lg-0">
                                                    <div class="fv-row mb-0">
                                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
                                                        <input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="{{ $user->email??$user->email }}" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-0">
                                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
                                                <button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                            </div>
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Edit-->
                                    <!--begin::Action-->
                                    <div id="kt_signin_email_button" class="ms-auto">
                                        <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Email Address-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-6"></div>
                                <!--end::Separator-->
                                <!--begin::Password-->
                                <div class="d-flex flex-wrap align-items-center mb-10">
                                    <!--begin::Label-->
                                    <div id="kt_signin_password">
                                        <div class="fs-6 fw-bold mb-1">Password</div>
                                        <div class="fw-semibold text-gray-600">************</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Edit-->
                                    <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                        <!--begin::Form-->
                                        {!! Form::open(['url' => action('UserController@updatePassword'), 'method' => 'post', 'class' =>'form', 'id' => 'edit_password_form',
            'class' => 'form-horizontal' ]) !!}
{{--                                        <form id="kt_signin_change_password" class="form" novalidate="novalidate">--}}
                                            <div class="row mb-1">
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0">
                                                        {!! Form::label('current_password', __('user.current_password') . ':', ['class' => 'form-label fs-6 fw-bold mb-3']) !!}
                                                        {!! Form::password('current_password', ['class' => 'form-control form-control-lg form-control-solid','placeholder' => __('user.current_password'), 'required']); !!}
{{--                                                        <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>--}}
{{--                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />--}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0">
                                                        {!! Form::label('new_password', __('user.new_password') . ':', ['class' => 'form-label fs-6 fw-bold mb-3']) !!}
                                                        {!! Form::password('new_password', ['class' => 'form-control form-control-lg form-control-solid','placeholder' => __('user.new_password'), 'required']); !!}
{{--                                                        <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>--}}
{{--                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />--}}
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-0">
                                                        {!! Form::label('confirm_password', __('user.confirm_password') . ':', ['class' => 'form-label fs-6 fw-bold mb-3']) !!}
                                                        {!! Form::password('confirm_password', ['class' => 'form-control form-control-lg form-control-solid','placeholder' => __('user.confirm_password'), 'required']); !!}
{{--                                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>--}}
{{--                                                        <input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
                                            <div class="d-flex">
                                                <button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">@lang('messages.update')</button>
                                                <button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
                                            </div>
                                        {!! Form::close() !!}
                                        <!--end::Form-->

                                    </div>
                                    <!--end::Edit-->
                                    <!--begin::Action-->
                                    <div id="signin_password_button" class="ms-auto">
                                        <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Password-->
                                <!--begin::Notice-->
                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
															<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor" />
														</svg>
													</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                        <!--begin::Content-->
                                        <div class="mb-3 mb-md-0 fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
                                            <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Action-->
                                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" id="kt_modal_two_factor_authentication" data-bs-target="#kt_modal_two_factor_authentication_0">Enable</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Sign-in Method-->

                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">@lang('user.edit_profile')</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
{{--                            <form id="kt_account_profile_details_form" class="form">--}}
                                {!! Form::open(['url' => action('UserController@updateProfile'), 'method' => 'post', 'id' => 'edit_user_profile_form', 'class' => 'form', 'files' => true ]) !!}
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">@lang('lang_v1.profile_photo')</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                @if(!empty($user->media))
                                                    {!! $user->media->thumbnail([150, 150], 'image-input-wrapper w-125px h-125px') !!}
                                                @else
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url('/metronic/assets/media/avatars/300-1.jpg')"></div>
                                                @endif
                                                    <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{ __('lang_v1.upload_image') }}">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
{{--                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />--}}
                                                    {!! Form::file('profile_photo', ['id' => 'profile_photo', 'accept' => 'image/*']); !!}
{{--                                                    <input type="hidden" name="avatar_remove" />--}}
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
{{--                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>--}}
                                            <div class="form-text">@lang('purchase.max_file_size', ['size' => (config('constants.document_size_limit') / 1000000)])</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <div class="col-lg-4 fv-row">
                                                    {!! Form::text('surname', $user->surname, ['class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0','placeholder' => __('business.prefix_placeholder')]); !!}
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-4 fv-row">
{{--                                                    <input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />--}}
                                                    {!! Form::text('first_name', $user->first_name, ['class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0','placeholder' => __('business.first_name'), 'required']); !!}
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-4 fv-row">
                                                    {!! Form::text('last_name', $user->last_name, ['class' => 'form-control form-control-lg form-control-solid mb-3 mb-lg-0','placeholder' => __('business.last_name')]); !!}
{{--                                                    <input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />--}}
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Mhamcloud" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        {!! Form::label('email', __('business.email') . ':', 'class="col-lg-4 col-form-label required fw-semibold fs-6"') !!}
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
{{--                                            <input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Mhamcloud" />--}}
                                            {!! Form::email('email',  $user->email, ['class' => 'form-control form-control-lg form-control-solid','placeholder' => __('business.email') ]); !!}
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        {!! Form::label('language', __('business.language') . ':', 'class="col-lg-4 col-form-label required fw-semibold fs-6"') !!}
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            {!! Form::select('language',$languages, $user->language, ['class' => 'form-select form-select-solid form-select-lg']); !!}

                                            <!--begin::Hint-->
                                            <div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
{{--                                    <div class="row mb-0">--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <div class="col-lg-8 d-flex align-items-center">--}}
{{--                                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">--}}
{{--                                                <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />--}}
{{--                                                <label class="form-check-label" for="allowmarketing"></label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--begin::Label-->--}}
{{--                                    </div>--}}
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            <div class="card-body border-top p-9">
                                @include('v2.user.edit_profile_form_part', ['bank_details' => !empty($user->bank_details) ? json_decode($user->bank_details, true) : null])
                            </div>
                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">@lang('messages.update')</button>
                                </div>
                                <!--end::Actions-->
                            {!! Form::close() !!}
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->

                    <!--begin::Connected Accounts-->
{{--                    <div class="card mb-5 mb-xl-10">--}}
{{--                        <!--begin::Card header-->--}}
{{--                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">--}}
{{--                            <div class="card-title m-0">--}}
{{--                                <h3 class="fw-bold m-0">Connected Accounts</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--end::Card header-->--}}
{{--                        <!--begin::Content-->--}}
{{--                        <div id="kt_account_settings_connected_accounts" class="collapse show">--}}
{{--                            <!--begin::Card body-->--}}
{{--                            <div class="card-body border-top p-9">--}}
{{--                                <!--begin::Notice-->--}}
{{--                                <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">--}}
{{--                                    <!--begin::Icon-->--}}
{{--                                    <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->--}}
{{--                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">--}}
{{--														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--															<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />--}}
{{--															<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />--}}
{{--														</svg>--}}
{{--													</span>--}}
{{--                                    <!--end::Svg Icon-->--}}
{{--                                    <!--end::Icon-->--}}
{{--                                    <!--begin::Wrapper-->--}}
{{--                                    <div class="d-flex flex-stack flex-grow-1">--}}
{{--                                        <!--begin::Content-->--}}
{{--                                        <div class="fw-semibold">--}}
{{--                                            <div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.--}}
{{--                                                <a href="#" class="fw-bold">Learn More</a></div>--}}
{{--                                        </div>--}}
{{--                                        <!--end::Content-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Wrapper-->--}}
{{--                                </div>--}}
{{--                                <!--end::Notice-->--}}
{{--                                <!--begin::Items-->--}}
{{--                                <div class="py-2">--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <div class="d-flex flex-stack">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />--}}
{{--                                            <div class="d-flex flex-column">--}}
{{--                                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>--}}
{{--                                                <div class="fs-6 fw-semibold text-gray-400">Plan properly your workflow</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-end">--}}
{{--                                            <div class="form-check form-check-solid form-check-custom form-switch">--}}
{{--                                                <input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />--}}
{{--                                                <label class="form-check-label" for="googleswitch"></label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Item-->--}}
{{--                                    <div class="separator separator-dashed my-5"></div>--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <div class="d-flex flex-stack">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />--}}
{{--                                            <div class="d-flex flex-column">--}}
{{--                                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>--}}
{{--                                                <div class="fs-6 fw-semibold text-gray-400">Keep eye on on your Repositories</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-end">--}}
{{--                                            <div class="form-check form-check-solid form-check-custom form-switch">--}}
{{--                                                <input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />--}}
{{--                                                <label class="form-check-label" for="githubswitch"></label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Item-->--}}
{{--                                    <div class="separator separator-dashed my-5"></div>--}}
{{--                                    <!--begin::Item-->--}}
{{--                                    <div class="d-flex flex-stack">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />--}}
{{--                                            <div class="d-flex flex-column">--}}
{{--                                                <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>--}}
{{--                                                <div class="fs-6 fw-semibold text-gray-400">Integrate Projects Discussions</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="d-flex justify-content-end">--}}
{{--                                            <div class="form-check form-check-solid form-check-custom form-switch">--}}
{{--                                                <input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />--}}
{{--                                                <label class="form-check-label" for="slackswitch"></label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Item-->--}}
{{--                                </div>--}}
{{--                                <!--end::Items-->--}}
{{--                            </div>--}}
{{--                            <!--end::Card body-->--}}
{{--                            <!--begin::Card footer-->--}}
{{--                            <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                                <button class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
{{--                                <button class="btn btn-primary">Save Changes</button>--}}
{{--                            </div>--}}
{{--                            <!--end::Card footer-->--}}
{{--                        </div>--}}
{{--                        <!--end::Content-->--}}
{{--                    </div>--}}
                    <!--end::Connected Accounts-->
                    <!--begin::Notifications-->
{{--                    <div class="card mb-5 mb-xl-10">--}}
{{--                        <!--begin::Card header-->--}}
{{--                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">--}}
{{--                            <div class="card-title m-0">--}}
{{--                                <h3 class="fw-bold m-0">Email Preferences</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--begin::Card header-->--}}
{{--                        <!--begin::Content-->--}}
{{--                        <div id="kt_account_settings_email_preferences" class="collapse show">--}}
{{--                            <!--begin::Form-->--}}
{{--                            <form class="form">--}}
{{--                                <!--begin::Card body-->--}}
{{--                                <div class="card-body border-top px-9 py-9">--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Successful Payments</span>--}}
{{--															<span class="text-muted fs-6">Receive a notification for every successful payment.</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <div class="separator separator-dashed my-6"></div>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Payouts</span>--}}
{{--															<span class="text-muted fs-6">Receive a notification for every initiated payout.</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <div class="separator separator-dashed my-6"></div>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Fee Collection</span>--}}
{{--															<span class="text-muted fs-6">Receive a notification each time you collect a fee from sales</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <div class="separator separator-dashed my-6"></div>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Customer Payment Dispute</span>--}}
{{--															<span class="text-muted fs-6">Receive a notification if a payment is disputed by a customer and for dispute purposes.</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <div class="separator separator-dashed my-6"></div>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Refund Alerts</span>--}}
{{--															<span class="text-muted fs-6">Receive a notification if a payment is stated as risk by the Finance Department.</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <div class="separator separator-dashed my-6"></div>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Invoice Payments</span>--}}
{{--															<span class="text-muted fs-6">Receive a notification if a customer sends an incorrect amount to pay their invoice.</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <div class="separator separator-dashed my-6"></div>--}}
{{--                                    <!--end::Option-->--}}
{{--                                    <!--begin::Option-->--}}
{{--                                    <label class="form-check form-check-custom form-check-solid align-items-start">--}}
{{--                                        <!--begin::Input-->--}}
{{--                                        <input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />--}}
{{--                                        <!--end::Input-->--}}
{{--                                        <!--begin::Label-->--}}
{{--                                        <span class="form-check-label d-flex flex-column align-items-start">--}}
{{--															<span class="fw-bold fs-5 mb-0">Webhook API Endpoints</span>--}}
{{--															<span class="text-muted fs-6">Receive notifications for consistently failing webhook API endpoints.</span>--}}
{{--														</span>--}}
{{--                                        <!--end::Label-->--}}
{{--                                    </label>--}}
{{--                                    <!--end::Option-->--}}
{{--                                </div>--}}
{{--                                <!--end::Card body-->--}}
{{--                                <!--begin::Card footer-->--}}
{{--                                <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                                    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
{{--                                    <button class="btn btn-primary px-6">Save Changes</button>--}}
{{--                                </div>--}}
{{--                                <!--end::Card footer-->--}}
{{--                            </form>--}}
{{--                            <!--end::Form-->--}}
{{--                        </div>--}}
{{--                        <!--end::Content-->--}}
{{--                    </div>--}}
                    <!--end::Notifications-->
                    <!--begin::Notifications-->
{{--                    <div class="card mb-5 mb-xl-10">--}}
{{--                        <!--begin::Card header-->--}}
{{--                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">--}}
{{--                            <div class="card-title m-0">--}}
{{--                                <h3 class="fw-bold m-0">Notifications</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!--begin::Card header-->--}}
{{--                        <!--begin::Content-->--}}
{{--                        <div id="kt_account_settings_notifications" class="collapse show">--}}
{{--                            <!--begin::Form-->--}}
{{--                            <form class="form">--}}
{{--                                <!--begin::Card body-->--}}
{{--                                <div class="card-body border-top px-9 pt-3 pb-4">--}}
{{--                                    <!--begin::Table-->--}}
{{--                                    <div class="table-responsive">--}}
{{--                                        <table class="table table-row-dashed border-gray-300 align-middle gy-6">--}}
{{--                                            <tbody class="fs-6 fw-semibold">--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <tr>--}}
{{--                                                <td class="min-w-250px fs-4 fw-bold">Notifications</td>--}}
{{--                                                <td class="w-125px">--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />--}}
{{--                                                        <label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                                <td class="w-125px">--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />--}}
{{--                                                        <label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <tr>--}}
{{--                                                <td>Billing Updates</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />--}}
{{--                                                        <label class="form-check-label ps-2" for="billing1"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />--}}
{{--                                                        <label class="form-check-label ps-2" for="billing2"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <tr>--}}
{{--                                                <td>New Team Members</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />--}}
{{--                                                        <label class="form-check-label ps-2" for="team1"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />--}}
{{--                                                        <label class="form-check-label ps-2" for="team2"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <tr>--}}
{{--                                                <td>Completed Projects</td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />--}}
{{--                                                        <label class="form-check-label ps-2" for="project1"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />--}}
{{--                                                        <label class="form-check-label ps-2" for="project2"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            <tr>--}}
{{--                                                <td class="border-bottom-0">Newsletters</td>--}}
{{--                                                <td class="border-bottom-0">--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />--}}
{{--                                                        <label class="form-check-label ps-2" for="newsletter1"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                                <td class="border-bottom-0">--}}
{{--                                                    <div class="form-check form-check-custom form-check-solid">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />--}}
{{--                                                        <label class="form-check-label ps-2" for="newsletter2"></label>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                            <!--begin::Table row-->--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Table-->--}}
{{--                                </div>--}}
{{--                                <!--end::Card body-->--}}
{{--                                <!--begin::Card footer-->--}}
{{--                                <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                                    <button class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
{{--                                    <button class="btn btn-primary px-6">Save Changes</button>--}}
{{--                                </div>--}}
{{--                                <!--end::Card footer-->--}}
{{--                            </form>--}}
{{--                            <!--end::Form-->--}}
{{--                        </div>--}}
{{--                        <!--end::Content-->--}}
{{--                    </div>--}}
                    <!--end::Notifications-->
                    <!--begin::Deactivate Account-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Deactivate Account</h3>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Content-->
                        <div id="kt_account_settings_deactivate" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_deactivate_form" class="form">
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
															</svg>
														</span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
                                                <div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                                    <br />
                                                    <a class="fw-bold" href="#">Learn more</a></div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                    <!--begin::Form input row-->
                                    <div class="form-check form-check-solid fv-row">
                                        <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
                                        <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
                                    </div>
                                    <!--end::Form input row-->
                                </div>
                                <!--end::Card body-->
                                <!--begin::Card footer-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
                                </div>
                                <!--end::Card footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Deactivate Account-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $("#kt_signin_email_button").click(function(){
            $("#kt_signin_email").addClass("d-none");
            $("#kt_signin_email_button").addClass("d-none");
            $("#kt_signin_email_edit").removeClass("ms-auto d-none");
        });
        $("#kt_signin_cancel").click(function(){
            $("#kt_signin_email").removeClass("d-none");
            $("#kt_signin_email_button").removeClass("d-none");
            $("#kt_signin_email_edit").addClass("ms-auto d-none");
        });
        $("#signin_password_button").click(function(){
            $("#signin_password_button").addClass("d-none");
            $("#kt_signin_password").addClass("d-none");
            $("#kt_signin_password_edit").removeClass("d-none");
        });
        $("#kt_password_cancel").click(function(){
            $("#signin_password_button").removeClass("d-none");
            $("#kt_signin_password").removeClass("d-none");
            $("#kt_signin_password_edit").addClass("d-none");
        });
        $("#kt_account_deactivate_account_submit").click(function(){
            alert("This feature is not available in this version.");
        });
        $("#kt_modal_two_factor_authentication").click(function(){
            alert("This feature is not available in this version.");
        });
    </script>
@endsection