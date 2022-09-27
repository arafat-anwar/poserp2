<div class="iq-sidebar">
    <input type="hidden" value="{{ url('/') }}" id="base_url">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ url('/') }}">
            <img src="{{ asset('mbm/images/mbm-logo-w.png') }}" class="img-fluid" alt="MBM">
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-ellipsis-h"></i></div>
                    <div class="hover-circle"><i class="las la-ellipsis-v"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">

            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>