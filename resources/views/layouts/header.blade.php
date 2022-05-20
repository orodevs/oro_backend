<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#!" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ url('public/assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{ url('public/assets/images/logo-dark.svg') }}" alt="" height="26">
                            </span>
                </a>

                <a href="#!" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ url('public/assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{ url('public/assets/images/logo-light.svg') }}" alt="" height="26">
                            </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="dropdown d-none d-lg-block ms-2">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="false"
                        aria-expanded="false">
                    <span>Components</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-xl p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="dropdown-item" href="#!">Alerts</a>
                            <a class="dropdown-item" href="#!">Buttons</a>
                            <a class="dropdown-item" href="#!">Cards</a>
                            <a class="dropdown-item" href="#!">Dropdowns</a>
                            <a class="dropdown-item" href="#!">Lightbox</a>
                            <a class="dropdown-item" href="#!">Modals</a>
                            <a class="dropdown-item" href="#!">Range Slider</a>
                        </div>
                        <div class="col-md-6">
                            <a class="dropdown-item" href="#!">Progress Bars</a>
                            <a class="dropdown-item" href="#!">Sweet-Alert</a>
                            <a class="dropdown-item" href="#!">Tabs & Accordions</a>
                            <a class="dropdown-item" href="#!">Typography</a>
                            <a class="dropdown-item" href="#!">General</a>
                            <a class="dropdown-item" href="#!">Rating</a>
                            <a class="dropdown-item" href="#!">Notifications</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown dropdown-mega d-none d-lg-block">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="false"
                        aria-expanded="false">
                    <span>Categories</span>
                    <i class="mdi mdi-chevron-down"></i>
                </button>
                <div class="dropdown-menu p-2 dropdown-megamenu">
                    <div class="row">
                        <div class="col">
                            <h5 class="font-size-14 mx-4 mt-2">Computers & Accessories</h5>
                            <a class="dropdown-item" href="#!">Laptops &amp; Tablets</a>
                            <a class="dropdown-item" href="#!">Desktop Computers</a>
                            <a class="dropdown-item" href="#!">Networking Products (NAS)</a>
                            <a class="dropdown-item" href="#!">Monitors</a>
                            <a class="dropdown-item" href="#!">Bags, Cases &amp; Sleeves</a>
                            <a class="dropdown-item" href="#!">Batteries</a>
                            <a class="dropdown-item" href="#!">Charges &amp; Adapters</a>
                        </div>
                        <div class="col">
                            <h5 class="font-size-14 ms-4 mt-2">Smartphones & Tablets</h5>
                            <a class="dropdown-item" href="#!">Apple iPhone</a>
                            <a class="dropdown-item" href="#!">Android Smartphones</a>
                            <a class="dropdown-item" href="#!">Phablets</a>
                            <a class="dropdown-item" href="#!">Apple iPad</a>
                            <a class="dropdown-item" href="#!">Android Tablets</a>
                            <a class="dropdown-item" href="#!">Tablets with Keyboard</a>
                        </div>
                        <div class="col">
                            <h5 class="font-size-14 ms-4 mt-2">Television & Video</h5>
                            <a class="dropdown-item" href="#!">TV Sets</a>
                            <a class="dropdown-item" href="#!">Home Theater Systems</a>
                            <a class="dropdown-item" href="#!">DVD Players & Recorders</a>
                            <a class="dropdown-item" href="#!">DVD-VCR Combos</a>
                            <a class="dropdown-item" href="#!">Projectors</a>
                            <a class="dropdown-item" href="#!">Projection Screens</a>
                            <a class="dropdown-item" href="#!">Satelite Television</a>
                        </div>
                        <div class="col">
                            <h5 class="font-size-14 ms-4 mt-2">Cameras, Photo & Video</h5>
                            <a class="dropdown-item" href="#!">Point & Shoot Digital Cameras</a>
                            <a class="dropdown-item" href="#!">DSLR Cameras</a>
                            <a class="dropdown-item" href="#!">Mirrorless Cameras</a>
                            <a class="dropdown-item" href="#!">Body Mounted Cameras</a>
                            <a class="dropdown-item" href="#!">Camera Lenses</a>
                            <a class="dropdown-item" href="#!">Video Studio</a>
                        </div>
                        <div class="col">
                            <div class="py-lg-2 pr-lg-2">
                                <img src="{{ url('public/assets/images/illustrator/1.png') }}" alt=""
                                     class="img-fluid mx-auto" style="max-height: 250px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control rounded bg-light border-0"
                                       placeholder="Search...">
                                <i class="mdi mdi-magnify search-icon"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="grid"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <div class="p-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Web Apps </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 270px;">
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ url('public/assets/images/brands/slack.png') }}" alt="slack">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">Slack</h6>
                                    <p class="font-size-12 text-muted mb-0">This is your moment. Let’s reinvent
                                        work.</p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ url('public/assets/images/brands/behance.png') }}" alt="behance">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">Behance <span class="badge bg-warning badge-pill ml-1">Free</span>
                                    </h6>
                                    <p class="font-size-12 text-muted mb-0">Showcase your work.</p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ url('public/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">Dribbble</h6>
                                    <p class="font-size-12 text-muted mb-0">Dribbble is the world’s leading community
                                        for creatives to share, grow, and get hired.</p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->
                        <a class="notification-item text-reset" href="#!">
                            <div class="d-flex border-bottom align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ url('public/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                </div>
                                <div class="flex-grow-1 ms-4">
                                    <h6 class="mb-0">Dropbox</h6>
                                    <p class="font-size-12 text-muted mb-0">Keep life organized and work moving—all in
                                        one place</p>
                                </div>
                            </div>
                        </a><!-- end dropdown item -->

                    </div><!-- end simplebar -->
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="bell"></i>
                    <span class="noti-dot bg-danger"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#" ! class="small"> Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light">New</h6>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ url('public/assets/images/users/avatar-3.jpg') }}"
                                         class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Justin Verduzco</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to
                                            <span class="badge badge-soft-success">Review</span></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="uil-shopping-basket"></i>
                                                </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">New order has been placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Open the order confirmation or shipment
                                            confirmation.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h6 class="dropdown-header bg-light">Earlier</h6>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                                <span
                                                    class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                                    <i class="uil-truck"></i>
                                                </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Here is somthing that you might light like to
                                            know.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="{{ url('public/assets/images/users/avatar-4.jpg') }}"
                                         class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="#!">
                            <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="btn header-item noti-icon right-bar-toggle">
                    <i class="icon-sm" data-feather="settings"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" data-simplebar>

                    <label class="dropdown-item notify-item sidebar-setting" for="sidebar-color-dark">Dark</label>

                    <input class="form-check-input d-none" type="radio" name="layout-mode"
                           id="sidebar-color-dark" value="dark"
                           onchange="document.body.setAttribute('data-sidebar', 'dark')"
                    >
                    <input class="form-check-input d-none" type="radio" name="layout-mode"
                           id="sidebar-color-light" value="light"
                           onchange="document.body.setAttribute('data-sidebar', 'light')"
                    >
                    <label class="dropdown-item notify-item sidebar-setting" for="sidebar-color-light">
                        Light</label>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                        id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                         src="{{ url('public/assets/images/users/avatar-1.jpg') }}"
                         alt="Header Avatar">
                    <span class="ms-2 d-none d-sm-block user-item-desc">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-sub-title">Administrator</span>
                            </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 bg-primary border-bottom">
                        <h6 class="mb-0 text-white">{{ Auth::user()->name }}</h6>
                        <p class="mb-0 font-size-11 text-white-50 fw-semibold">{{ Auth::user()->email }}</p>
                    </div>
                    <a class="dropdown-item" href="#!"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">@lang('auth.profile')</span></a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle"
                        >@lang('auth.sign_out')</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
