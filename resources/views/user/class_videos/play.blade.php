@extends('layouts.main')
@section('title')
    User Profile
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rating.css')}}">
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

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!--navbar-->
    <section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
        <!-- #navigation start -->
    @include('partials.navbar')
    <!-- #navigation end -->
    </section>
    <div class="container p-2">
        <div class="row justify-content-center text-center p-4">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2>{{$video->title}}</h2>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 d-flex justify-content-center">
                <iframe src="{{$video->video}}"
                        width="1000" height="500"
                        frameborder="0"
                        autoplay="1"
                        allow="autoplay; fullscreen" allowfullscreen>
                </iframe>
            </div>
            
               <div class="col-12 d-flex p-5 justify-content-center">
                @if(\App\VideoRating::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->where('video_id', $video->id)->get()->first() !== null)
                    <div class="feedback">
                        <h4>Thank you for your Valuable Rating of
                            <strong>{{\App\VideoRating::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->where('video_id', $video->id)->get()->first()->rating}}</strong> Star</h4>
                    </div>
                @else
                <form action="{{route('video.rating.store')}}" method="post">
                    @csrf
                    <div class="feedback">
                        <h4>Provide your valuable rating for the Video</h4>
                        <div class="rating">
                            <input type="hidden" name="video_id" value="{{$video->id}}">
                            <input type="radio" value="5" name="rating" id="rating-5">
                            <label for="rating-5"></label>
                            <input type="radio" value="4" name="rating" id="rating-4">
                            <label for="rating-4"></label>
                            <input type="radio" value="3" name="rating" id="rating-3">
                            <label for="rating-3"></label>
                            <input type="radio" value="2" name="rating" id="rating-2">
                            <label for="rating-2"></label>
                            <input type="radio" value="1" name="rating" id="rating-1">
                            <label for="rating-1"></label>
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary text-center text-white">Submit</button>
                        </center>
                    </div>
                </form>
                @endif
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

@endsection
