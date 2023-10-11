@extends('layouts.main')
@section('title')
    User Profile
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" xmlns="http://www.w3.org/1999/html">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">

@endsection


@section('styles')
    <style>
        .fa {
            color: #fb770c;
        !important;
        }
    </style>
@endsection

@section('content')

    <!--navbar-->
    <section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>
    <div class="container p-2 pt-5 pb-5">
        <div class="card shadow">
            <div class="card-header">Order ID : {{$order->order_id}}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="col-sm-12" style="width:400px;">
                            <img src="{{asset('storage/'.$order->study_material->image)}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="col-sm-12"><strong>Purchased Date :</strong> {{$order->created_at}}</div>
                        <div class="col-sm-12"><strong>Receipt No. :</strong>{{$order->receipt_id}}</div>
                        <div class="col-sm-12"><strong>Course Name :</strong> {{$order->study_material->title}}</div>
                        <div class="col-sm-12"><strong>Amount :</strong> {{$order->amount}}</div>
                        <div class="col-sm-12"><strong>Payment ID :</strong> {{$order->payment_id}}</div>
                        <div class="col-sm-12"><strong>Status :</strong>
                            @if($order->status == 0)
                                Pending
                            @elseif($order->status == 1)
                                Successful
                            @else
                                Order Fail
                            @endif
                        </div>
                        @if($order->status == 0)
                            <div class="d-flex">
                                <div class="justify-content-start mr-3">
                                    <a class="btn btn-primary text-white"
                                       href="{{route('user.study.pending.payment',$order->id)}}">
                                        Pay Now
                                    </a>
                                </div>
                                <div class="justify-content-end">

                                    <form action="{{route('user.study.material.order.delete',$order->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-white">
                                            Cancel Order
                                        </button>
                                    </form>

                                </div>
                            </div>


                        @endif
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
    <script src='{{asset("js/jquery-3.4.1.min.js")}}'></script>
    <script src='{{asset("js/slick.min.js")}}'></script>
    <script src='{{asset("js/main.js")}}'></script>

    <script src='{{asset("js/bootstrap.min.js")}}'></script>
    <script src='{{asset("js/jquery.fancybox.pack.js")}}'></script>
    <script src='{{asset("js/jquery.magnific-popup.min.js")}}'></script>
    <script src='{{asset("js/waypoints.min.js")}}'></script>
    <script src='{{asset("js/jquery.counterup.min.js")}}'></script>

    <script>
        function editProfile(id) {
            var message = document.getElementById('disapproveRequestMessage')

            message.action = "/user/" + id + "/update"

            $('#disapproveModal').modal('show')
        }
    </script>

@endsection
