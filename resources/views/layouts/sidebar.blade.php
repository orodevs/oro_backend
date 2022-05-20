<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ url('home') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url('public/assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ url('public/assets/images/logo-dark.svg') }}" alt="" height="26">
                    </span>
        </a>

        <a href="{{ url('home') }}" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ url('public/assets/images/logo-light.svg') }}" alt="" height="26">
                    </span>
            <span class="logo-sm">
                        <img src="{{ url('public/assets/images/logo-sm-light.png') }}" alt="" height="22">
                    </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @include('layouts.menu')
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
