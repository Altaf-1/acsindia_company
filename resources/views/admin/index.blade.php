@extends('layouts.admin')
@section('title')
Admin Dashboard
@endsection
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!--{{--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}-->
</div>

<!-- Content Row -->
<div class="row">

    <!-- Events Card -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Upcoming Events</div>
                        <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{$events->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar-alt fa-2x" style="color:#fb78ff;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Card -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Courses</div>
                        <div id="courseCount" class="h5 mb-0 font-weight-bold text-gray-800">{{$courses}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-book fa-2x " style="color:#478f78;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Users Card  -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users</div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div id="userCount" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    {{$users->count()}}</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-circle fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- User_Course  -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Users Who buyed Courses
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div id="userByCourseCount" class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    {{$user_course}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-graduate fa-2x text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Query Card Example -->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Queries</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$queries->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Razorpay payments-->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Razorpay Payments</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$razorpay}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-rocket fa-2x  text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Bank payments-->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bank Transfer Payments
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$bank_count}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-credit-card fa-2x text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Coupons count-->
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Coupons Count</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$coupons->count()}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-gift fa-2x" style="
                                color:#8f478f;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Overview</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Users Vs Students</h6>

            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Total Users
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Users Who bought Courses
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<!-- Page level plugins -->
<script src="{{asset('js/admin/Chart.min.js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{asset('js/admin/chart-area-demo.js')}}"></script>
<script src="{{asset('js/admin/chart-pie-demo.js')}}"></script>
@endsection