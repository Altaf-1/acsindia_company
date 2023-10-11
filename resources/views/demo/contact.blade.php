@extends('layouts.main')
@section('title')
Academy of Civil Services | Best IAS Coaching in India
@endsection
@section('links')
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Main Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- Slick  -->
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<!-- Font Awesome  -->
<link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="{{asset('js/sweetalert2.min.js')}}"></script>
<!-- jQuery Fancybox  -->
{{--    
<link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
--}}

<!--- font style for brand -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

<!-- Magnific Popup core CSS file -->
{{--    
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
--}}
<!-- home 12  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
   integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Bootstrap v4.4.1 css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
   integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="{{asset('css/hcss/font-awesome.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
   crossorigin="anonymous"></script>
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/owl.carousel.css') }}">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/slick.css') }}">
<!-- off canvas css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/off-canvas.css') }}">
<!-- linea-font css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/linea-fonts.css') }}">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/magnific-popup.css') }}">
<!-- Main Menu css -->
<link rel="stylesheet" href="{{ asset('css/hcss/rsmenu-main.css') }}">
<!-- spacing css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/rs-spacing.css') }}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/style.css') }}">
<!-- This stylesheet dynamically changed from style.less -->
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/hcss/responsive.css') }}">
<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap')}}"
   rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/ucss/open-iconic-bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/icomoon.css')}}">
<link rel="stylesheet" href="{{asset('css/ucss/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/chosen.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/jquery.scrollbar.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/lightbox.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/magnific-popup.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/slick.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/megamenu.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/dreaming-attribute.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/kcss/style.css') }}" />
@endsection
@section('styles')
<style>
   .dropbtn {
   color: black;
   padding: 2px;
   font-size: 16px;
   line-height: 27px;
   padding-left: 1.5rem !important;
   padding-right: 1.5rem !important;
   margin-top: .5rem !important;
   background-color: #134982;
   color: white;
   border-radius: 15px;
   margin: 2px;
   }
   .fa-phone{
   color: white;
   font-size: 32px;
   padding-left: 20px;
   padding-top: 35px;
   }
   .fa-envelope{
   color: white;
   font-size: 32px;
   padding-left: 20px;
   padding-top: 35px;
   }
   .dropdown {
   position: relative;
   display: inline-block;
   }
   .dropdown-content {
   display: none;
   position: absolute;
   background-color: #bf710a;
   min-width: 160px;
   z-index: 1;
   }
   .dropdown-content a {
   color: black;
   padding: 12px 16px;
   text-decoration: none;
   display: block;
   }
   .dropdown-content a:hover {background-color: #bbb;}
   .dropdown:hover .dropdown-content {display: block;}
   .dropdown:hover .dropbtn {background-color: #bf710a;}
   @media only screen and (max-width: 1920px) {
   .custom-slider {
   height: 70%;
   }
   }
   @media only screen and (max-width: 1044px) {
   .custom-slider {
   height: 70%;
   }
   }
   @media screen and (max-width: 426px) {
   .custom-slider {
   height: 300px;
   }
   }
   .whatsapp_float{
   position: fixed;
   bottom:100px;
   right:20px;
   z-index: 1000;
   }
   .stu-review{
   display: flex;
   }
   .stu-cont{
   display: flex;
   flex-direction: column;
   padding: 20px;
   }
   .table td {
   text-align: center;
   } 
   .rounded-circle {
   border-radius: 50% !important;
   }
   img {
   max-width: 100%;
   height: auto;
   vertical-align: top;
   }
   .sub-info{
   font-weight: 600;
   font-family: 'Poppins', sans-serif;
   color: #004975;
   }
   .display-30 {
   font-size: 0.9rem;
   }
   .fa-check-circle {
   color: red;
   margin-top: 10px;
   }
   .fa-text{
   color: black;
   font-size: 20px;
   padding: 20px;
   margin-top: 10px;
   }
   .rs-faq-part.style1 .img-part {
   background: url({{asset('comimages/apsc/center.png')}});
   background-size: cover;
   background-position: center;
   width: 100%;
   height: 100%;
   min-height: 615px;
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
@endif
<!-- header area start -->
<main>
   <!--<div class="whatsapp_float">-->
   <!--   <a href="https://wa.me/919085268769" target="_blank"><img src="{{asset('comimages/whatsapp.png')}}" width="80px" class="whatsapp_float_btn"/></a>-->
   <!--</div>-->

   @section('new_navbar')
    @include('partials.new_navbar')
    @endsection
    <div class="header-mobile">
            <!-- <div class="header-mobile-left">
            
        </div> -->
            <div class="header-mobile-mid">
                <div class="header-logo">
                    <a href="index.html"><img alt="Kobolg" src="{{asset('img/mob.jpg')}}" class="logo pl-3"></a>
                </div>
            </div>
            <div class="header-mobile-right pr-4">
                <div class="block-menu-bar">
                    <a class="menu-bar menu-toggle" href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>

   <section class="mt-5">
      <div style="background-color: #cc3d1e">
         <div class="row justify-content-center text-center text-white">
            <div class="col-lg-8">
               <div class="section-title with-p mb-0 p-4">
                  <h2 class="mb-0" style="font-family: 'Righteous';">VISIT OUR INSTITUTE</h2>
               </div>
            </div>
         </div>
         <div class="row pl-4 pr-4">
            <div class="col-lg-6 col-sm-12">
               <div>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.4851596283424!2d94.91970161425219!3d27.48528324182426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37409869cb35768d%3A0x491ce8fdcae8360a!2sAcademy%20Of%20Civil%20Services!5e0!3m2!1sen!2sin!4v1641360136814!5m2!1sen!2sin" width="900" height="400" style="border:2px solid black;" allowfullscreen="" loading="lazy"></iframe></p>
               </div>
            </div>
            <div class="col-lg-6 col-sm-12">
               <div>
                  <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14323.616872684346!2d91.77054733037403!3d26.167248685267065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a598a126db899%3A0x33606f5c614c8f89!2sAcademy%20of%20Civil%20Services%2CGuwahati!5e0!3m2!1sen!2sin!4v1660107183985!5m2!1sen!2sin" width="900" height="400" style="border:2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
         <div class="m-0">
            <div class="row" >
               <div class="col-lg-3 col-sm-12">
                  <div class="d-flex flex-row">
                     <p><i class="fa fa-phone"></i></p>
                     <!--<img class="secondary-color" style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;" src="{{asset('comimages/phone.gif')}}">-->
                     <h3 style="padding-top: 25px; padding-left: 20px; color: #fff;">6000505707</h3>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="d-flex flex-row">
                     <i class="fa-sharp fa-solid fa-envelope"></i>
                     <!--<img class="secondary-color" style="width:70px; boder: 1px solid black; border-radius: 30%; padding-top: 10px;" src="{{asset('comimages/gmail.gif')}}">-->
                     <h4 style="padding-top: 25px; padding-left: 20px; color: #fff;">acsindia.ias@gmail.com</h4>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="d-flex flex-row">
                     <div class="d-flex flex-column">
                        <h4 class="text-center underline" style="padding-top: 15px; padding-left: 30px; color: #fff;">
                           <u>
                              <spam style="padding-right: 10px;"><i class="fa-solid fa-thumbtack"></i></spam>
                              DIBRUGARH CENTER
                           </u>
                        </h4>
                        <h4 style="padding-left: 40px; color: #fff;">NALIAPOOL,DIBRUGARH</h4>
                        <h4 style="padding-left: 40px; color: #fff;">Near Ganesh Mandir</h4>
                        <h4 style=" padding-left: 40px; color: #fff;">District: Dibrugarh</h4>
                        <h4 style=" padding-left: 40px; color: #fff;">PIN Code: 786001</h4>
                        <h4 style=" padding-left: 40px; color: #fff;">State: Assam</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="d-flex flex-row">
                     <div class="d-flex flex-column">
                        <h4 class=" underline" style="padding-top: 15px; padding-left: 20px; color: #fff;">
                           <u>
                              <spam style="padding-right: 10px;"><i class="fa-solid fa-thumbtack"></i></spam>
                              GUWAHATI CENTER
                           </u>
                        </h4>
                        <h4 style="padding-left: 40px; color: #fff;">3rd floor, Chitrabon Enclave, R G BARUAH ROAD,</h4>
                        <h4 style=" padding-left: 40px; color: #fff;">Near Gauhati Commerce College</h4>
                        <h4 style=" padding-left: 40px; color: #fff;">PIN Code: 781003</h4>
                        <h4 style=" padding-left: 40px; color: #fff;">State: Assam</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="ftco-section ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center"
                        style="background-image: url({{asset('comimages/2023/ab1.webp')}});">
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white pl-lg-5 pt-md-0 pt-1">
                     <div class="py-md-5">
                        <div class="heading-section heading-section-white mb-5">
                            <h2 class="mb-4" style="font-family: 'Righteous';">Submit Your Query</h2>
                        </div>
                        <form method="get" action="{{route('query')}}" class="appointment-form">
                            @csrf
                            <div class="d-md-flex">
                                <div class="form-group">
                                    <input type="text" class="form-control" type="text" name="name"
									id="contactName" placeholder="First Name" title="Your Full Name"/>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="text" class="form-control" type="email"
									name="email"
									id="contactEmail" placeholder="Last Name" title="Your Email"/>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="number" class="form-control" placeholder="Phone" name="phone"
									id="contactSubject"/>
                                </div>
                            </div>

                            <div class="d-md-flex">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Message" id="contactMessage"
									></textarea>
                                </div>
                                <div class="form-group ml-md-4">
                                    <input type="submit" value="Submit" class="btn py-7 px-7" style="background-color: #e52e06;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <main>
      @section('mob_navbar')
    @include('partials.mob_navbar')
    @endsection
      <a href="#" class="backtotop active">
      <i class="fa fa-angle-up"></i>
      </a>
   </main>
</main>
<!-- Modal -->
@endsection
@section('footer')
@include('partials.footer')
@endsection
@section('scripts')
    <script src="{{ asset('js/hjs/modernizr-2.8.3.min.js') }}"></script>
    <!-- Google -->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <!-- jquery latest version -->
    <script src="{{ asset('js/hjs/jquery.min.js') }}"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="{{ asset('js/hjs/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <!-- Menu js -->
    <script src="{{ asset('js/hjs/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('js/hjs/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('js/hjs/owl.carousel.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('js/hjs/slick.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ asset('js/hjs/isotope.pkgd.min.js') }}"></script>
    <!-- imagesloaded.pkgd.min js -->
    <script src="{{ asset('js/hjs/imagesloaded.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/hjs/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('js/hjs/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('js/hjs/jquery.counterup.min.js') }}"></script>
    <!-- counter top js -->
    
    <!-- video js -->
    <script src="{{ asset('js/hjs/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('js/hjs/jquery.magnific-popup.min.js') }}"></script>
    <!-- tilt js -->
    <script src="{{ asset('js/hjs/tilt.jquery.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/hjs/plugins.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('js/hjs/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/hjs/main.js') }}"></script> 
    <script src="{{ asset('js/kjs/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/kjs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/kjs/chosen.min.js') }}"></script>
    <script src="{{ asset('js/kjs/countdown.min.js') }}"></script>
    <script src="{{ asset('js/kjs/lightbox.min.js') }}"></script>
    <script src="{{ asset('js/kjs/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/kjs/slick.js') }}"></script>
    <script src="{{ asset('js/kjs/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/kjs/threesixty.min.js') }}"></script>
    <script src="{{ asset('js/kjs/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/kjs/mobilemenu.js') }}"></script>
    <script src="{{ asset('js/kjs/functions.js') }}"></script>
    
    <script src="{{asset('js/ujs/jquery.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/ujs/popper.min.js')}}"></script>
<script src="{{asset('js/ujs/bootstrap.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/ujs/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/ujs/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/ujs/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/ujs/aos.js')}}"></script>
<script src="{{asset('js/ujs/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('js/ujs/scrollax.min.js')}}"></script>
<script src="{{asset('js/ujs/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection