@extends('layouts.main')
@section('title')
Course - Academy of Civil Services
@endsection
@section('links')
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('comimages/gbar.webp')}}" type="image/x-icon">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<!-- Main Custom CSS -->
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<!-- Slick  -->
<link rel="stylesheet" href="{{asset('css/slick.css')}}">
<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
@endsection
@section('styles')
<style>
.bg-courses {
    background-image: url("{{asset('comimages/corbg.webp')}}");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.course-img {
    width: 100%;
    max-height: 500px;

}

/*.course-width {*/
/*    width: 80%;*/
/*    margin: 0 auto 0 auto;*/
/*}*/

.discount {
    background-color: white;
    padding: 15px;
    border-radius: 10px;
    color: #ff9933;
    font-weight: bold;
    font-size: 40px;
}

.course-end {
    background-color: #ff9933;
    border-radius: 10px;
}

.mobile {
    display: inline-flex;
    justify-content: flex-end;
    padding-top: 40px;
}

@media (max-width: 576px) {
    .mobile {
        justify-content: center;
         !important;
        padding-top: 0;
        padding-bottom: 30px;

    }
}

.buy-btn {
    background-color: white;
    color: #ff9933;
     !important;
}

.txt-color {
    color: #ff9933;
     !important;
}

.card:hover {
    box-shadow: 0px 2px 4px 10px #064b70;
}
</style>
@endsection
@section('content')

@if($message = Session::get('success'))
<script>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-start',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'success',
    title: '{{$message}}'
})
</script>
@elseif($message = Session::get('error'))
<script>
Swal.fire({
    position: 'center',
    icon: 'error',
    title: '{{$message}}',
    showConfirmButton: true,
})
</script>
@elseif($message = Session::get('info'))
<script>
Swal.fire({
    position: 'center',
    icon: 'info',
    title: '{{$message}}',
    showConfirmButton: true,
})
</script>
@endif
<!-- header area start -->
<header id="header" class="transparent-header">
    <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
</header>
<!-- end header area -->
<main>
    <!-- breadcrumb banner content area start -->
    <div class="lernen_banner bg-courses">
        <div class="container">
            <div class="row">
                <div class="lernen_banner_title">
                    <h1>UPSC Courses</h1>
                    <div class="lernen_breadcrumb">
                        <div class="breadcrumbs">
                            <span class="first-item">
                                <a href="/">Homepage</a></span>
                            <span class="separator">&gt;</span>
                            <span class="last-item">UPSC Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb banner content area start -->


    <!-- courses area start -->
    <div id="courses" class="wrap-bg wrap-bg-dark bg-bottom-zero p-0">
        <div class="container p-0 justify-content-center ">
            <!-- .row -->
            <div class="row p-0 pt-5">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 course-single p-0 mb20">
                    <!-- 1 -->
                    <div class="themeioan_course" style="max-width: 600px;">
                        <article>
                            <!-- single course -->
                            <div class="blog-photo">
                                <img class="course-img" src="{{asset('storage/'.$course->image)}}" alt="">
                            </div>
                            <div class="blog-content">
                                <h3 class=" text-center"><strong> {{$course->title}}</strong></h3>
                                <ul class="themeioan_ul_icon">
                                    <li><i class="fas fa-check-circle"></i> {{$course->days}} online coaching.</li>
                                    <li><i class="fas fa-check-circle"></i> Daily {{$course->timing}} live online
                                        class.
                                    </li>
                                    <li><i class="fas fa-check-circle"></i> Daily Q&A session.</li>
                                    <li><i class="fas fa-check-circle"></i> PDF Study Materials & Study Plans.</li>
                                    <li><i class="fas fa-check-circle"></i> Free Hardcopies Of Study Materials.</li>
                                    <li><i class="fas fa-check-circle"></i> Prelims Model Test Series.</li>
                                    <li><i class="fas fa-check-circle"></i> Current affairs updates.</li>
                                </ul>
                                <hr>
                                <div class="row course-end">

                                </div>
                                <div class="row course-end pb-2 mt-1">
                                    <!--<div class="col-sm-6 p-4 d-flex justify-content-center">-->

                                    <!--    @if ($course->use_coupon && $coupon == null)-->
                                    <!--verify coupon for the user-->
                                    <!--        <form action="{{route('user.coupon.verify')}}" method="GET">-->
                                    <!--            @csrf-->
                                    <!--            <input type="hidden" value="{{$course->id}}" name="course">-->
                                    <!--            <div class="form-group font-weight-bold">-->
                                    <!--                <label for="coupon_code " class="text-white">Enter Coupon:</label>-->
                                    <!--                <input type="text" style=" margin-bottom:20px;border-radius: 20px;"-->
                                    <!--                       class="form-control" name="code" placeholder="Enter code">-->
                                    <!--                <button class="btn buy-btn" type="submit">Check</button>-->
                                    <!--                <h6 class="pt-4 text-white">GSTIN: 18ABLFA1515G1ZO</h6>-->
                                    <!--            </div>-->
                                    <!--        </form>-->
                                    <!--verify coupon form end-->
                                    <!--    @elseif($coupon->applied == 0)-->
                                    <!--        <form action="{{route('user.coupon.verify')}}" method="GET">-->
                                    <!--            @csrf-->
                                    <!--            <input type="hidden" value="{{$course->id}}" name="course">-->
                                    <!--            <div class="form-group font-weight-bold">-->
                                    <!--                <label for="coupon_code " class="text-white">Enter Coupon:</label>-->
                                    <!--                <input type="text" style=" margin-bottom:20px;border-radius: 20px;"-->
                                    <!--                       class="form-control" name="code" placeholder="Enter code">-->
                                    <!--                <button class="btn buy-btn" type="submit">Check</button>-->
                                    <!--                <h6 class="pt-4 text-white">GSTIN: 18ABLFA1515G1ZO</h6>-->
                                    <!--            </div>-->
                                    <!--        </form>-->
                                    <!--verify coupon form end-->
                                    <!--    @elseif($coupon->applied == 1)-->
                                    <!--        <h6 class="btn buy-btn button mt-4"><strong>{{$coupon->coupon_code}}</strong> Coupon is Applied</h6>-->
                                    <!--    @endif-->

                                    <!--</div>-->
                                    <div class="col-sm-6 p-2 d-flex justify-content-center">
                                        <div class="container mt-2">
                                            <h5 class="text-white">Extra Materials</h5>
                                            <form action="{{route('user.extra_material.add_remove_material')}}"
                                                method="POST">
                                                @csrf
                                                <input type="hidden" value="{{$course->course_id}}"
                                                    name="course_type_id">
                                                <input type="hidden" value="{{$course->id}}" name="course_id">
                                                <div class="form-group font-weight-bold">
                                                    <label for="course_1" class="text-white material-label">UPSC
                                                        Material ( ₹ 2000 ):</label>
                                                    <input type="checkbox" class="check-form"
                                                        @if(\App\UserExtraMaterial::check_material_exists($course->course_id,
                                                    $course->id, 1))
                                                    checked
                                                    @endif
                                                    name="course_1">

                                                    <label for="no_material" class="text-white material-label">No
                                                        Material ( ₹ 0 ):</label>
                                                    <input type="checkbox" class="check-form"
                                                        @if(\App\UserExtraMaterial::check_material_exists($course->course_id,
                                                    $course->id, 3))
                                                    checked
                                                    @endif
                                                    name="no_material">

                                                    <button class="btn buy-btn" type="submit">Add / Remove</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-sm-6  text-white mobile p-4 ">
                                        <div>
                                            <del>
                                                <h5 class="text-danger">₹ 23,600</h5>
                                            </del>
                                            @if($coupon == null)
                                            <h4 class="text-white">Price
                                                : ₹
                                                {{$course->price + \App\UserExtraMaterial::get_total_amount($course->course_id, $course->id)}}
                                            </h4>
                                            @elseif($coupon->applied == 1)
                                            <h4 class="text-white">Price
                                                : ₹
                                                {{$course->sale + \App\UserExtraMaterial::get_total_amount($course->course_id, $course->id)}}
                                            </h4>
                                            @else
                                            <h4 class="text-white">Price
                                                : ₹
                                                {{$course->price + \App\UserExtraMaterial::get_total_amount($course->course_id, $course->id)}}
                                            </h4>
                                            @endif
                                            {{--href="{{route('payment.course', $course->slug)}}"--}}
                                            <a onclick="modal()" type="button" class="btn buy-btn button mt-4">
                                                <span class="txt-color"><i class="fa fa-shopping-cart"></i>BUY
                                                    NOW</span>
                                            </a>
                                            <script>
                                            function modal() {
                                                Swal.fire({
                                                    title: 'Pay Using',
                                                    html: '<div class="row justify-content-center">' +
                                                        ' <div class="card col-5 m-2">' +
                                                        '<a href="{{route('payment.course',$course->slug)}}">\n' +
                                                    '  <img src="{{asset('comimages/payment/bank.webp')}}" width="100%">\n' +
                                                    ' </a>' +
                                                    '</div>\n' +
                                                    '<div class="card col-5 m-2">' +
                                                    '<a href="{{route('course.payment',$course->slug)}}">\n' +
                                                    '  <img src="{{asset('comimages/payment/razorpay.webp')}}" width="100%">\n' +
                                                    '</a>' +
                                                    '</div>' +
                                                    '<div class="card col-5 m-2 p-5">' +
                                                    '<a href="{{route('hdfc.payment.initiate',$course->slug)}}">\n' +
                                                    '  <img src="{{asset('comimages/payment/hdfc.png')}}" width="100%">\n' +
                                                    '</a>' +
                                                    '</div>' +
                                                    '</div>',
                                                    width: 800,
                                                })
                                            }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="container mt-2">
                                        <h6 class="text-white">Please apply your coupon before buying the
                                            course.</h6>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- end single course -->
                </div>
            </div>
        </div>
    </div>
    <!-- .row end -->
</main>
@endsection
@section('footer')
@include('partials.footer')
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
