
<div class="iq-top-navbar">
  <div class="iq-navbar-custom">
     <div class="iq-sidebar-logo">
        <div class="top-logo">
           <a href="#" class="logo">
              <img src="{{ asset('mbm/images/mbm-logo-w.png') }}" class="img-fluid" alt="">
              <span>MBM Group</span>
           </a>
        </div>
     </div>
     <nav class="navbar navbar-expand-lg navbar-light p-0">
        @include('mbm.pms.backend.layouts.top_search')
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <i class="las la-ellipsis-h"></i>
        </button>
        <div class="iq-menu-bt align-self-center">
           <div class="wrapper-menu">
              <div class="main-circle"><i class="las la-ellipsis-h"></i></div>
              <div class="hover-circle"><i class="las la-ellipsis-v"></i></div>
           </div>
        </div>
        <div class="nav-item iq-full-screen">
           <a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto navbar-list">

            @if(auth::user()->notification)
            
            <li class="nav-item dropdown">
              <a href="#" class="search-toggle iq-waves-effect">
                 <i class="las la-bell" style="font-size: 35px;color:red;animation: shadow-pulse 1s infinite;"></i>
                 <small class="badge  badge-light float-right pt-1 notification-count">{{unreadNotification()->count()}}</small>
              </a>
              <div class="iq-sub-dropdown">
                 <div class="iq-card shadow-none m-0">
                       <div class="bg-primary p-3">
                          <h5 class="mb-0 text-white">All Notification<small class="badge badge-light float-right pt-1"></small></h5>
                       </div>
                       <div class="iq-card-body p-0" style="overflow-y:auto; overflow-x: hidden; max-height:400px">
                         @foreach(unreadNotification() as $data)

                         <a href="#" class="iq-sub-card" id="read{{$data->id}}">
                            <div class="media align-items-center">
                               <div class="media-body ml-3">
                                  <h6 class="mb-0" style="color:#0db5c8" data-notification-id="{{ $data->id }}">{!! $data->messages !!}</h6>
                                  {{-- <small onclick="markAsRead('{{$data->id}}')"  class="float-left font-size-12 mark-as-read">Mark as read</small> --}}
                                  <small class="float-right font-size-12">{{date('jS F g:i a', strtotime($data->created_at))}}</small>
                               </div>
                            </div>
                         </a>

                         @endforeach
                      </div>
                      <div class="bg-primary p-1">
                        <center>
                           <a href="{{route('pms.requisition.view.all.notification')}}"><h5 class="mb-0 text-white">View All</h5></a>
                        </center>
                       </div>
                 </div>
              </div>
           </li>
           @endif

         </ul>
      </div>
      <ul class="navbar-list">
         
        <li>
           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
              <img class="img-fluid rounded mr-3" src="{{ asset('mbm/assets/images/user/09.jpg') }} ">
              <div class="caption">
                 <h6 class="mb-0 line-height">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</h6>
                 {{-- <span class="font-size-12">{{isset(auth()->user()->employee->unit->hr_unit_short_name)?auth()->user()->employee->unit->hr_unit_short_name:''}} &nbsp;|&nbsp;{{isset(auth()->user()->employee->department->hr_department_name)?auth()->user()->employee->department->hr_department_name:''}}</span> --}}
              </div>
           </a>

           <div class="iq-sub-dropdown iq-user-dropdown">
              <div class="iq-card shadow-none m-0">
                 <div class="iq-card-body p-0 ">
                    <div class="bg-primary p-3">
                       <h5 class="mb-0 text-white line-height">Hello {{ auth()->user()->name }}</h5>
                       <span class="text-white font-size-12">Available</span>
                    </div>
                    <a href="#" class="disabled-link iq-sub-card iq-bg-primary-hover">
                       <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                             <i class="f-18 las la-user-tie"></i>
                          </div>
                          <div class="media-body ml-3">
                             <h6 class="mb-0 ">My Profile</h6>
                             <p class="mb-0 font-size-12">View personal profile details.</p>
                          </div>
                       </div>
                    </a>
                    
                    <a href="{{url('user/change-password')}}" class="iq-sub-card iq-bg-primary-hover">
                       <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                             <i class="f-18 las la-key"></i>
                          </div>
                          <div class="media-body ml-3">
                             <h6 class="mb-0 ">Account settings</h6>
                             <p class="mb-0 font-size-12">Manage your password.</p>
                          </div>
                       </div>
                    </a>
                    <div class="d-inline-block w-100 text-center p-3">
                       
                       <a class="bg-primary iq-sign-btn" role="button" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                       {{ __('Sign out') }} <i class="ri-login-box-line ml-2"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                   </form>
                </div>
             </div>
          </div>
       </div>
    </li>
 </ul>
</nav>
</div>
</div>