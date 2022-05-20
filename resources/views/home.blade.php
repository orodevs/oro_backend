@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="font-size-xs text-uppercase">Total Revenue</h6>
                            <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                $46.34k
                            </h4>
                            <div class="text-muted">Earning this month</div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-light btn-sm" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><span class="text-muted">Monthly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="apex-charts mt-3" id="sparkline-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="font-size-xs text-uppercase">Total Refunds</h6>
                            <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                $895.02
                            </h4>
                            <div class="text-muted">Refunds this month</div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-light btn-sm" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><span class="text-muted">Monthly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="apex-charts mt-3" id="sparkline-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="font-size-xs text-uppercase">Active Users</h6>
                            <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                6,985
                            </h4>
                            <div class="text-muted">Users this Week</div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-light btn-sm" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><span class="text-muted">Weekly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="apex-charts mt-3" id="sparkline-chart-3"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="font-size-xs text-uppercase">All Time Orders</h6>
                            <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                12,584
                            </h4>
                            <div class="text-muted">Total Number of Orders</div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <a class="dropdown-toggle btn btn-light btn-sm" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><span class="text-muted">Yearly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="apex-charts mt-3" id="sparkline-chart-4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning border-0 d-flex align-items-center" role="alert">
                        <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
                        <div class="flex-grow-1 text-truncate">
                            Your free trial expired in <b>21</b> days.
                        </div>
                        <div class="flex-shrink-0">
                            <a href="#" class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <p class="font-size-18">Upgrade your plan from a <span class="fw-semibold">Free
                                                    trial</span>, to ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i>
                            </p>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">Upgrade Account!</a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <img src="{{ url('public/assets/images/illustrator/2.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div> <!-- end card-body-->
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Report By:</span> <span
                                    class="text-muted">Monthly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                                <a class="dropdown-item" href="#">Today</a>
                            </div>
                        </div>
                    </div>

                    <h4 class="card-title mb-4">Earning Reports</h4>

                    <div class="row align-items-center">
                        <div class="col-sm-7">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <p class="text-muted mb-2">This Month</p>
                                    <h5>$12,582<small
                                            class="badge badge-soft-success font-13 ms-2">+15%</small></h5>
                                </div>

                                <div class="col-6">
                                    <p class="text-muted mb-2">Last Month</p>
                                    <h5>$98,741</h5>
                                </div>
                            </div>
                            <p class="text-muted"><span class="text-success me-1"> 25.2%<i
                                        class="mdi mdi-arrow-up"></i></span>From previous period</p>

                            <div class="mt-4">
                                <a href="#" class="btn btn-soft-secondary btn-sm">Generate Reports <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-sm-5">
                            <div class="mt-4 mt-0">
                                <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->

        <div class="col-xl-8">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                                <a class="dropdown-item" href="#">Today</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Sales Analytics</h4>

                    <div class="mt-1">
                        <ul class="list-inline main-chart mb-0 text-center">
                            <li class="list-inline-item chart-border-left me-0 border-0">
                                <h3 class="text-primary">$<span data-plugin="counterup">3.85k</span><span
                                        class="text-muted d-inline-block fw-normal font-size-15 ms-2">Income</span>
                                </h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">258</span><span
                                        class="text-muted d-inline-block fw-normal font-size-15 ms-2">Sales</span>
                                </h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">52</span>k<span
                                        class="text-muted d-inline-block fw-normal font-size-15 ms-2">Users</span>
                                </h3>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-3">
                        <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-4">Orders</h4>

                        <div>
                            <div class="dropdown d-inline">
                                <a class="dropdown-toggle text-muted me-3 mb-3 align-middle" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class='bx bx-search font-size-16'></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                    <form class="p-2">
                                        <div class="search-box">
                                            <div class="position-relative">
                                                <input type="text"
                                                       class="form-control rounded bg-light border-0"
                                                       placeholder="Search...">
                                                <i class="bx bx-search font-size-16 search-icon"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dropdown d-inline">
                                <a class="dropdown-toggle text-reset mb-3" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold">Report By:</span> <span
                                        class="text-muted">Monthly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap mb-0 align-middle table-check">
                            <thead class="bg-light">
                            <tr>
                                <th class="rounded-start" style="width: 15px;">
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="checkAll">
                                        <label class="form-check-label" for="checkAll"> </label>
                                    </div>
                                </th>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Customer</th>
                                <th>Purchased</th>
                                <th colspan="2" class="rounded-end">Revenue</th>
                            </tr>
                            <!-- end tr -->
                            </thead>
                            <!-- end thead -->
                            <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckexampleone">
                                        <label class="form-check-label" for="flexCheckexampleone">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1018
                                </td>
                                <td>
                                    1 Jun, 11:21
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-2.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Alex
                                                    Fox</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Wireframing Kit for Figma
                                </td>

                                <td>
                                    $129.99
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckexamplethree">
                                        <label class="form-check-label" for="flexCheckexamplethree">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1017
                                </td>
                                <td>
                                    29 May, 18:36
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-3.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Joya
                                                    Calvert</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Mastering the Grid <span class="text-muted">+2 more</span>
                                </td>

                                <td>
                                    $228.88
                                </td>

                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckexamplefour">
                                        <label class="form-check-label" for="flexCheckexamplefour">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1016
                                </td>
                                <td>
                                    25 May , 08:09
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i
                                                class="mdi mdi-arrow-left-thin-circle-outline text-warning"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Refunded</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-4.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Gracyn
                                                    Make</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Wireframing Kit for Figma
                                </td>

                                <td>
                                    $9.99
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckexamplefive">
                                        <label class="form-check-label" for="flexCheckexamplefive">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1015
                                </td>
                                <td>
                                    19 May , 14:09
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-5.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Monroe
                                                    Mock</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Spiashify 2.0
                                </td>

                                <td>
                                    $44.00
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckexamplesix">
                                        <label class="form-check-label" for="flexCheckexamplesix">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1014
                                </td>
                                <td>
                                    10 May , 10:00
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-6.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Lauren
                                                    Bond</a>
                                            </h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Mastering the Grid
                                </td>

                                <td>
                                    $75.87
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckexamplenine">
                                        <label class="form-check-label" for="flexCheckexamplenine">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1011
                                </td>
                                <td>
                                    29 Apr , 12:46
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-close-circle-outline text-danger"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Changeback</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-9.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Ricardo
                                                    Schaefer</a></h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Spiashify 2.0
                                </td>

                                <td>
                                    $63.99
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input font-size-16" type="checkbox"
                                               value="" id="flexCheckDefaultexample">
                                        <label class="form-check-label" for="flexCheckDefaultexample">
                                        </label>
                                    </div>
                                </td>
                                <td class="fw-medium">
                                    #DK1010
                                </td>
                                <td>
                                    27 Apr , 10:53
                                </td>

                                <td>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <i class="mdi mdi-check-circle-outline text-success"></i>
                                        </div>
                                        <div>
                                            <p class="mb-0">Paid</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ url('public/assets/images/users/avatar-10.jpg') }}"
                                                 class="avatar-sm img-thumbnail h-auto rounded-circle"
                                                 alt="Error">
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 text-truncate mb-0"><a href="#"
                                                                                           class="text-reset">Arvi
                                                    Hasan</a></h5>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    Wireframing Kit for Figma
                                </td>

                                <td>
                                    $51.00
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop"
                                           data-bs-toggle="dropdown" aria-expanded="false">
                                            <i
                                                class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end /tr -->

                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-4">Sales by County</h4>
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Report By:</span> <span
                                    class="text-muted">Monthly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                                <a class="dropdown-item" href="#">Today</a>
                            </div>
                        </div>
                    </div>

                    <div id="world-map-markers" style="height: 242px;"></div>

                    <div class="pt-3 px-2 pb-2">
                        <p class="mb-1 fw-medium">USA <span class="float-end">75%</span></p>
                        <div class="progress animated-progess custom-progress mt-2">
                            <div class="progress-bar" role="progressbar"
                                 style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                            </div>
                        </div>

                        <p class="mt-4 mb-1 fw-medium">Russia <span class="float-end">55%</span></p>
                        <div class="progress animated-progess custom-progress mt-2">
                            <div class="progress-bar" role="progressbar"
                                 style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                            </div>
                        </div>

                        <p class="mt-4 mb-1 fw-medium">Australia <span class="float-end">85%</span></p>
                        <div class="progress animated-progess custom-progress mt-2">
                            <div class="progress-bar" role="progressbar"
                                 style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xxl-9 col-lg-8">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Daily Active Users</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end cardheader -->
                <div class="card-body border-bottom py-3">
                    <div class="row gx-lg-5">
                        <div class="col-md-auto">
                            <div>
                                <p class="text-muted mb-2">Total Visitors</p>
                                <h4 class="mb-0">18.2 k <span class="text-muted font-size-12 fw-normal ms-2">1.4 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></span></h4>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md align-self-end">
                            <div class="text-md-end mt-4 mt-md-0">
                                <ul class="list-inline main-chart mb-0">
                                    <li class="list-inline-item chart-border-left me-0 border-0">
                                        <h4 class="text-primary my-1">3.85 k<span
                                                class="text-muted d-inline-block fw-normal font-size-13 ms-2">Sessions</span>
                                        </h4>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h4 class="my-1">24.03 %<span
                                                class="text-muted d-inline-block fw-normal font-size-13 ms-2">Bounce Rate</span>
                                        </h4>
                                    </li>
                                    <li class="list-inline-item chart-border-left me-0">
                                        <h4 class="my-1">52 k<span
                                                class="text-muted d-inline-block fw-normal font-size-13 ms-2">Users</span>
                                        </h4>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- end card body -->
                <div>
                    <div id="chart-area" class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xxl-3 col-lg-4">
            <div class="card">
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title rounded-circle font-size-12">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1">Users</p>
                                    <h5 class="font-size-16 mb-0">2.2 k</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <div class="badge badge-soft-success ms-2">1.2 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title rounded-circle font-size-12">
                                            <i class="fas fa-hourglass-start"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1">Sessions</p>
                                    <h5 class="font-size-16 mb-0">3.85 k</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <div class="badge badge-soft-danger ms-2">1.2 % <i
                                            class="uil uil-arrow-down-left text-danger ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title rounded-circle font-size-12">
                                            <i class="fas fa-stopwatch"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1">Session Duration</p>
                                    <h5 class="font-size-16 mb-0">1 min</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <div class="badge badge-soft-danger ms-2">1.1 % <i
                                            class="uil uil-arrow-down-left text-danger ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title rounded-circle font-size-12">
                                            <i class="fas fa-chart-area"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-1">Bounce Rate</p>
                                    <h5 class="font-size-16 mb-0">24.03 %</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-end">
                                    <div class="badge badge-soft-success ms-2">1.2 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                    </ul><!-- end ul -->
                </div>
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="card-title text-truncate mb-4">User Activity</h5>
                        </div>

                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="font-size-16 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div id="chart-column" class="apex-charts" dir="ltr"></div>
                    </div>

                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div>
                                            <p class="text-muted mb-2 text-truncate">New Visitors</p>
                                            <h5 class="font-size-16 mb-0 text-truncate">1.2 k <span
                                                    class="text-muted font-size-12 fw-normal ms-2">0.2 % <i
                                                        class="uil uil-arrow-up-right text-success ms-1"></i></span>
                                            </h5>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-5">
                                        <div id="chart-sparkarea-1"></div>
                                    </div><!-- end col -->
                                </div>
                            </li>

                            <li class="list-group-item py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div>
                                            <p class="text-muted mb-2 text-truncate">Users</p>
                                            <h5 class="font-size-16 mb-0 text-truncate">2.2 k</h5>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-5">
                                        <div id="chart-sparkarea-2"></div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </li>
                            <li class="list-group-item py-3">
                                <div class="row">
                                    <div class="col-7">
                                        <div>
                                            <p class="text-muted mb-2 text-truncate">Sessions</p>
                                            <h5 class="font-size-16 mb-0 text-truncate">3.85 k <span
                                                    class="text-muted font-size-12 fw-normal ms-2">1.2 % <i
                                                        class="uil uil-arrow-up-right text-success ms-1"></i></span>
                                            </h5>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-5">
                                        <div id="chart-sparkarea-3"></div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </li>
                        </ul><!-- end ul -->
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="card-title">Visitors by Browser</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="font-size-16 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end cardheader -->
                <div data-simplebar style="max-height: 230px;">
                    <ul class="list-unstyled unstyled mb-0">
                        <li class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle font-size-18">
                                            <i class="fab fa-chrome"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Chrome <span class="float-end fw-medium">82 %</span></p>
                                    <div class="progress animated-progess custom-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 82%"
                                             aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end li -->
                        <li class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle font-size-18">
                                            <i class="fab fa-firefox-browser"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Firefox <span class="float-end fw-medium">70 %</span></p>
                                    <div class="progress animated-progess custom-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%"
                                             aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end li -->
                        <li class="px-4 py-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle font-size-18">
                                            <i class="fab fa-safari"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Safari <span class="float-end fw-medium">76 %</span></p>
                                    <div class="progress animated-progess custom-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 76%"
                                             aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end li -->
                        <li class="px-4 py-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle font-size-18">
                                            <i class="fab fa-edge"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="text-muted mb-2">Edge <span class="float-end fw-medium">67 %</span></p>
                                    <div class="progress animated-progess custom-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 67%"
                                             aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- end li -->
                    </ul><!-- end ul -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-4">Visitors Source</h5>
                        </div>

                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="font-size-16 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="chart-donut" class="apex-charts" dir="ltr"></div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-3 col-md-6">
            <div class="card card-h-100">
                <div class="card-header border-bottom-0">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                            <h5 class="card-title">Traffic Source</h5>
                        </div>

                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="font-size-16 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-simplebar style="max-height: 230px;">
                    <ul class="list-unstyled mb-0">
                        <li class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle">
                                            #1
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-muted mb-1 text-truncate">www.abc.com</p>
                                    <h5 class="font-size-16 mb-0 text-truncate">3.82 k</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-start">
                                    <div class="badge badge-soft-success ms-2">1.2 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                        <!-- end li -->
                        <li class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle">
                                            #2
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-muted mb-1 text-truncate">www.xyz.com</p>
                                    <h5 class="font-size-16 mb-0 text-truncate">3.04 k</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-start">
                                    <div class="badge badge-soft-success ms-2">1.1 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                        <!-- end li -->
                        <li class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle">
                                            #3
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-muted mb-1 text-truncate">www.abc123.com</p>
                                    <h5 class="font-size-16 mb-0 text-truncate">2.64 k</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-start">
                                    <div class="badge badge-soft-success ms-2">0.8 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                </div>
                            </div>
                        </li>
                        <!-- end li -->
                        <li class="px-4 py-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-circle">
                                            #4
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-muted mb-1 text-truncate">www.xyz.com</p>
                                    <h5 class="font-size-16 mb-0 text-truncate">2.06 k</h5>
                                </div>
                                <div class="flex-shrink-0 align-self-start">
                                    <div class="badge badge-soft-success ms-2">0.5 % <i
                                            class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                </div>
                            </div>
                        </li><!-- end li -->
                    </ul><!-- end ul -->
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-8">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="card-title text-truncate mb-3">Visitors by Location</h5>
                        </div>

                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="fw-semibold">Report By:</span> <span class="text-muted">Monthly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="d-flex h-100 map-widget">
                                <div id="world-map-markers" style="height: 270px;"></div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-5">
                            <div data-simplebar style="max-height: 230px;">
                                <ul class="list-unstyled mb-0">
                                    <li class="px-4 py-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 align-self-center me-3">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle">
                                                        <img src="{{ url('public/assets/images/flags/us.jpg') }}" alt=""
                                                             height="10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">United States</p>
                                                <h5 class="font-size-16 mb-0">81%</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <div class="badge badge-soft-success">0.02 % <i
                                                        class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="px-4 py-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 align-self-center me-3">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle">
                                                        <img src="{{ url('public/assets/images/flags/spain.jpg') }}"
                                                             alt="" height="10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Spain</p>
                                                <h5 class="font-size-16 mb-0">77%</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <div class="badge badge-soft-success">0.01 % <i
                                                        class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="px-4 py-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 align-self-center me-3">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle">
                                                        <img src="{{ url('public/assets/images/flags/germany.jpg') }}"
                                                             alt="" height="10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Germany</p>
                                                <h5 class="font-size-16 mb-0">80%</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <div class="badge badge-soft-success">0.03 % <i
                                                        class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                    <li class="px-4 py-3">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 align-self-center me-3">
                                                <div class="avatar-sm">
                                                    <div class="avatar-title bg-light rounded-circle">
                                                        <img src="{{ url('public/assets/images/flags/italy.jpg') }}"
                                                             alt="" height="10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Italy</p>
                                                <h5 class="font-size-16 mb-0">73%</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <div class="badge badge-soft-success">0.01 % <i
                                                        class="uil uil-arrow-up-right text-success ms-1"></i></div>
                                            </div>
                                        </div>
                                    </li><!-- end li -->
                                </ul>
                                <!-- end ul -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="flex-grow-1 overflow-hidden">
                            <h5 class="card-title text-truncate mb-3">Channels</h5>
                        </div>

                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#"
                                   data-bs-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <span class="fw-semibold">Report By:</span> <span class="text-muted">Monthly<i
                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Sources</th>
                                <th scope="col">Sessions</th>
                                <th scope="col">Users</th>
                                <th scope="col" style="width: 25%;">Bounce Rate</th>
                            </tr>
                            </thead>
                            <!-- end thead -->
                            <tbody>
                            <tr>
                                <th scope="row">Social</th>
                                <td>648</td>
                                <td>432</td>
                                <td>
                                    <div class="text-success text-nowrap">27.38%</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Direct</th>
                                <td>524</td>
                                <td>385</td>
                                <td>
                                    <div class="text-success text-nowrap">35.16%</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>432</td>
                                <td>390</td>
                                <td>
                                    <div class="text-success text-nowrap">30.20%</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Referral</th>
                                <td>521</td>
                                <td>423</td>
                                <td>
                                    <div class="text-success text-nowrap">29.05%</div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Others</th>
                                <td>602</td>
                                <td>553</td>
                                <td>
                                    <div class="text-success text-nowrap">33.14%</div>
                                </td>
                            </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end  -->
@endsection
@push('script')
    <script>
        var options = {
            series: [{name: "Total Visit", data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 54]}],
            chart: {
                id: "area-datetime",
                type: "area",
                height: 440,
                dropShadow: {enabled: !0, color: "#000", top: 18, left: 7, blur: 4, opacity: .075},
                zoom: {autoScaleYaxis: !0},
                toolbar: {show: !1}
            },
            dataLabels: {enabled: !1},
            markers: {size: 3, strokeWidth: 3, hover: {size: 6}},
            stroke: {show: !0, curve: "smooth", width: 3, dashArray: 0},
            xaxis: {categories: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"]},
            yaxis: {labels: {show: !1}},
            tooltip: {x: {format: "dd MMM yyyy"}},
            grid: {show: !0, xaxis: {lines: {show: !0}}, yaxis: {lines: {show: !1}}},
            colors: ["#038edc"],
            fill: {opacity: .05, colors: ["#038edc"], type: "solid"}
        }, chart = new ApexCharts(document.querySelector("#chart-area"), options);
        chart.render();
        var columnoptions = {
            series: [{
                name: "Previous Month",
                data: [25.3, 12.5, 20.2, 18.5, 40.4, 25.4]
            }, {name: "This Month", data: [36.2, 22.4, 38.2, 30.5, 26.4, 30.4]}],
            chart: {type: "bar", height: 200, stacked: !0, toolbar: {show: !1}},
            plotOptions: {bar: {horizontal: !1, columnWidth: "23%", borderRadius: 4}},
            dataLabels: {enabled: !1},
            legend: {position: "top", horizontalAlign: "right", markers: {width: 8, height: 8, radius: 30}},
            stroke: {show: !0, width: 2, colors: ["transparent"]},
            colors: ["#c0e3f6", "#038edc"],
            xaxis: {categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"], axisTicks: {show: !1}},
            yaxis: {
                labels: {
                    formatter: function (e) {
                        return e + "k"
                    }
                }, tickAmount: 2, min: 0, max: 70
            },
            grid: {strokeDashArray: 10},
            fill: {opacity: 1}
        };
        (chart = new ApexCharts(document.querySelector("#chart-column"), columnoptions)).render();
        options = {
            chart: {height: 245, type: "donut"},
            plotOptions: {pie: {donut: {size: "70%"}}},
            dataLabels: {enabled: !1},
            series: [44, 25, 19],
            labels: ["Social", "Direct", "Others"],
            colors: ["#038edc", "#f5f6f8", "#5fd0f3"],
            legend: {
                show: !0,
                position: "bottom",
                horizontalAlign: "center",
                verticalAlign: "middle",
                floating: !1,
                fontSize: "14px",
                offsetX: 0
            }
        };
        (chart = new ApexCharts(document.querySelector("#chart-donut"), options)).render();
        options = {
            series: [{name: "New Visitors", data: [21, 65, 32, 80, 42, 25]}],
            chart: {height: 52, type: "area", sparkline: {enabled: !0}, toolbar: {show: !1}},
            dataLabels: {enabled: !1},
            stroke: {curve: "smooth", width: 2},
            colors: ["#038edc"],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    inverseColors: !1,
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [20, 100, 100, 100]
                }
            },
            tooltip: {
                fixed: {enabled: !1}, x: {show: !1}, y: {
                    title: {
                        formatter: function (e) {
                            return ""
                        }
                    }
                }, marker: {show: !1}
            }
        };
        (chart = new ApexCharts(document.querySelector("#chart-sparkarea-1"), options)).render();
        options = {
            series: [{name: "Source A", data: [40, 30, 51, 33, 63, 50]}],
            chart: {height: 52, type: "area", sparkline: {enabled: !0}, toolbar: {show: !1}},
            dataLabels: {enabled: !1},
            stroke: {curve: "smooth", width: 2},
            colors: ["#038edc"],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    inverseColors: !1,
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [20, 100, 100, 100]
                }
            },
            tooltip: {
                fixed: {enabled: !1}, x: {show: !1}, y: {
                    title: {
                        formatter: function (e) {
                            return ""
                        }
                    }
                }, marker: {show: !1}
            }
        };
        (chart = new ApexCharts(document.querySelector("#chart-sparkarea-2"), options)).render();
        options = {
            series: [{name: "Source A", data: [21, 55, 32, 80, 42, 25]}],
            chart: {height: 52, type: "area", sparkline: {enabled: !0}, toolbar: {show: !1}},
            dataLabels: {enabled: !1},
            stroke: {curve: "smooth", width: 2},
            colors: ["#038edc"],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    inverseColors: !1,
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [20, 100, 100, 100]
                }
            },
            tooltip: {
                fixed: {enabled: !1}, x: {show: !1}, y: {
                    title: {
                        formatter: function (e) {
                            return ""
                        }
                    }
                }, marker: {show: !1}
            }
        };
        (chart = new ApexCharts(document.querySelector("#chart-sparkarea-3"), options)).render();
        var map = new jsVectorMap({
            map: "world_merc",
            selector: "#world-map-markers",
            zoomOnScroll: !1,
            zoomButtons: !1,
            markers: [{name: "Greenland", coords: [72, -42]}, {
                name: "Canada",
                coords: [56.1304, -106.3468]
            }, {name: "Brazil", coords: [-14.235, -51.9253]}, {
                name: "Egypt",
                coords: [26.8206, 30.8025]
            }, {name: "Russia", coords: [61, 105]}, {
                name: "China",
                coords: [35.8617, 104.1954]
            }, {name: "United States", coords: [37.0902, -95.7129]}, {
                name: "Norway",
                coords: [60.472024, 8.468946]
            }, {name: "Ukraine", coords: [48.379433, 31.16558]}],
            lines: [{from: "Canada", to: "Egypt"}, {from: "Russia", to: "Egypt"}, {
                from: "Greenland",
                to: "Egypt"
            }, {from: "Brazil", to: "Egypt"}, {from: "United States", to: "Egypt"}, {
                from: "China",
                to: "Egypt"
            }, {from: "Norway", to: "Egypt"}, {from: "Ukraine", to: "Egypt"}],
            lineStyle: {animation: !0, strokeDasharray: "6 3 6"}
        });
    </script>

@endpush
