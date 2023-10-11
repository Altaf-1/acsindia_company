 @extends('layouts.main')
@section('title')
    Academy of Civil Services | Best IAS Coaching in India
@endsection
@section('links')
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Main Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Slick  -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    <style>
        hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 2px solid #fff;
}


@media (min-width: 576px) { 
    
}


@media (min-width: 768px) { 
    
    .head-up{
        margin-top: 80px;
    }
}


@media (min-width: 992px) { 
    .head-up{
        margin-top: 80px;
    }
}


@media (min-width: 1200px) { 
    
    .head-up{
        margin-top: 80px;
    }
}



    </style>


@endsection
@section('content')
    
    <div class="container pt-3 pb-3 head-up bg-info">
        <div class="head-section ">
            <div class="row text-center">
                <div class=" col-lg-4 col-sm-4 col-xs-4 bg-danger border border-dark p-2">
                    <h4 class="text-white ">(5/20)</h4>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-4 p-2">
                   
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-4 bg-danger border border-dark p-2 ">
                    <h4 class="text-white">Time: 20</h4>
                </div>
            </div>
        </div>
        <hr>
        <divcontent-section mt-4 text-center>
            <h4 class="text-center text-white">Q) Navagraha Temple or the temple of 9 celestial bodies is situated in which hill ?</h4>
        <div class="answer-section text-center mt-2">
            <div class="row">
                <div class=" p-3 col-lg-6 col-sm-6 col-xxs-6 col-xs-6 col-md-6">
                    <a name="" id="" class="btn btn-warning text-dark" href="#" role="button">Nilachal</a>
                </div>
                <div class=" p-3 col-lg-6 col-sm-6 col-xxs-6 col-xs-6 col-md-6">
                    <a name="" id="" class="btn btn-warning text-dark" href="#" role="button">Chitrachal Hill</a>
                </div>
                <div class=" p-3 col-lg-6 col-sm-6 col-xxs-6 col-xs-6 col-md-6">
                    <a name="" id="" class="btn btn-warning text-dark" href="#" role="button">Mahadeo Hills</a>
                </div>
                <div class="p-3 col-lg-6 col-sm-6 col-xxs-6 col-xs-6 col-md-6">
                    <a name="" id="" class="btn btn-warning text-dark" href="#" role="button">Monikut Hills</a>
                </div>
            </div>
        </div>
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

</script>
@endsection



