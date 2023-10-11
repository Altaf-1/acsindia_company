@extends('layouts.main')
@section('title')
    Payment
@endsection
@section('links')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="shortcut icon" href="{{asset('comimages/gbar.jpg')}}" type="image/x-icon">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>

@endsection
@section('styles')
    <style>
        .payment-card:hover {
            box-shadow: 0px 0px 2px 2px #10415a;
        !important;
        }
    </style>
@endsection
@section('content')
    <!--navbar-->
    <section id="header" class="" style="background-image: url({{asset('comimages/bk3.webp')}});">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>

    <div class="container py-3">
        <div class="wrap-bg ">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <!-- single teacher -->
                    <div class="card-header bg-dark text-white container">Account Details for the Fee payment</div>
                    <div class="card-body " style="text-align: start">
                        <div style="text-align: start">
                            Account Number: 918020040614513 <br>
                            Account Holder: Academy of Civil Services <br>
                            Bank and Branch: Axis Bank/ Graham Bazar Dibrugarh <br>
                            IFSC Code: UTIB0003590
                        </div>
                        <br>
                        <strong>Make your payment directly into our bank account. Please use your Order ID as
                            the
                            payment reference. Your order
                            will not be shipped until the funds have cleared in our account. Don’t Forget to
                            inform us after payment done.</strong>

                    </div>
                </div>
                <!-- end single teacher -->
            </div>

        </div>
    </div>
    </div>

    <div class="card container">
        <div class="card-header text-white bg-dark">
            Bank Payment Form
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @if(!$permission)
            <li class="nav-item" role="presentation">
                <a class="nav-link active"  id="full-tab" data-toggle="tab" href="#full" role="tab" aria-controls="full" aria-selected="true">Bank Transfer</a>
            </li>
            @endif
                @if($permission)
            <li class="nav-item" role="presentation">
                <a class="nav-link active"  id="installment-tab" data-toggle="tab" href="#installment" role="tab" aria-controls="installment" aria-selected="false">Installments</a>
            </li>
                    @endif
        </ul>

        <div class="tab-content" id="myTabContent">
            @if(!$permission)
            <div class="tab-pane fade show active" id="full" role="tabpanel" aria-labelledby="full-tab">
                <div class="card-body">
                    <div class="container">
                        @include('partials.errors')
                        <form action="{{route('recorded.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name"
                                       aria-describedby="emailHelp" placeholder="Enter name">
                            </div>


                            <div class="form-group">
                                <label for="recorded_id">Course</label>
                                <select name="recorded_id" class="form-control mr-4">
                                    <option value="{{$course->id}}" selected>{{$course->title}}</option>
                                </select>
                            </div>

                            <input type="hidden" value="{{$course->course_id}}" name="course_id">


                            <div class="form-group">
                                <label for="name">Payment Gateway</label>
                                <select name="payment_type" class="form-control mr-4" required>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="receipt">Example file input</label>
                                <input type="file" class="form-control-file" name="receipt">
                            </div>

                            <button type="submit" class="btn btn-primary text-white">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            @endauth
            @if($permission)
            <div class="tab-pane fade show active" id="installment" role="tabpanel" aria-labelledby="installment-tab">
                 <div class="card-body">
            <div class="container">
                @include('partials.errors')
                <form action="{{route('payment.installment.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name"
                               aria-describedby="emailHelp" placeholder="Enter name">
                    </div>


                    <div class="form-group">
                        <label for="course_id">Course</label>
                        <select name="course_id" class="form-control mr-4">
                            <option value="{{$course->id}}" selected>{{$course->title}}</option>
                        </select>
                    </div>

                    <input type="hidden" value="{{$course->course_id}}" name="course_type_id">


                    <div class="form-group">
                        <label for="name">Payment Gateway</label>
                        <select name="payment_type" class="form-control mr-4" required>
                            <option value="Bank Transfer">Installments</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="receipt">Example file input</label>
                        <input type="file" class="form-control-file" name="receipt">
                    </div>

                    <button type="submit" class="btn btn-primary text-white">Submit</button>
                </form>
            </div>
        </div>
            </div>
            @endif
        </div>
    </div>

@endsection
@section('scripts')
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>
    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>
@endsection
