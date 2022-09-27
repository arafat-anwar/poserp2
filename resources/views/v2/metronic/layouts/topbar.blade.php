<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
	<!--begin::Menu wrapper-->
	<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
		
	</div>
	<!--end::Menu wrapper-->
	<!--begin::Navbar-->
	<div class="app-navbar flex-shrink-0">
		<!--begin::Theme mode-->
		<div class="app-navbar-item ms-1 ms-lg-3">
			<!--begin::Menu toggle-->
			<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
				<i class="far fa-sun text-dark" style="font-size: 24px;"></i>
			</a>
			<!--begin::Menu toggle-->
			<!--begin::Menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
				<!--begin::Menu item-->
				<div class="menu-item px-3 my-0">
					<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
						<span class="menu-icon" data-kt-element="icon">
							<i class="fas fa-sun"></i>
						</span>
						<span class="menu-title">Light</span>
					</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-3 my-0">
					<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
						<span class="menu-icon" data-kt-element="icon">
							<i class="fas fa-moon"></i>
						</span>
						<span class="menu-title">Dark</span>
					</a>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::Menu-->
		</div>
		<!--end::Theme mode-->
		<!--begin::User menu-->
		<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
			<!--begin::Menu wrapper-->
			<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
				<img src="{{ asset('metronic/assets') }}/media/avatars/300-1.jpg" alt="user" />
			</div>
			<!--begin::User account menu-->
			<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
				<!--begin::Menu item-->
				<div class="menu-item px-3">
					<div class="menu-content d-flex align-items-center px-3">
						<!--begin::Avatar-->
						<div class="symbol symbol-50px me-5">
							<img alt="Logo" src="{{ asset('metronic/assets') }}/media/avatars/300-1.jpg" />
						</div>
						<!--end::Avatar-->
						<!--begin::Username-->
						<div class="d-flex flex-column">
							<div class="fw-bold d-flex align-items-center fs-5">Max Smith
							<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
							<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
						</div>
						<!--end::Username-->
					</div>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu separator-->
				<div class="separator my-2"></div>
				<!--end::Menu separator-->
				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start">
					<a href="#" class="menu-link px-5">
						<span class="menu-title">My Subscription</span>
						<span class="menu-arrow"></span>
					</a>
					<!--begin::Menu sub-->
					<div class="menu-sub menu-sub-dropdown w-175px py-4">
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<a href="../../demo1/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
							<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
						</div>
						<!--end::Menu item-->
						<!--begin::Menu separator-->
						<div class="separator my-2"></div>
						<!--end::Menu separator-->
						<!--begin::Menu item-->
						<div class="menu-item px-3">
							<div class="menu-content px-3">
								<label class="form-check form-switch form-check-custom form-check-solid">
									<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
									<span class="form-check-label text-muted fs-7">Notifications</span>
								</label>
							</div>
						</div>
						<!--end::Menu item-->
					</div>
					<!--end::Menu sub-->
				</div>
				<!--end::Menu item-->
				<!--begin::Menu item-->
				<div class="menu-item px-5">
					<a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
				</div>
				<!--end::Menu item-->
			</div>
			<!--end::User account menu-->
			<!--end::Menu wrapper-->
		</div>
		<!--end::User menu-->
		<!--begin::Header menu toggle-->
		<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
			<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
				<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
				<span class="svg-icon svg-icon-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
						<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
		</div>
		<!--end::Header menu toggle-->
	</div>
	<!--end::Navbar-->
</div>