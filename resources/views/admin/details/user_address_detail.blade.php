@extends('layouts.main')
@section('title')
    ACS Invoice
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/invoice.css')}}">


@endsection


@section('styles')
    <style>
        .fa {
            color: #fb770c;
        !important;
        }
        h5 {
            margin-bottom: 0;
            padding: 1px;
        }
        td{
            padding: 0;
        }
        tbody {
            padding: 2rem;
        }
    </style>
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <!--navbar-->
    <section id="header" style="background-image: url({{asset('comimages/bk3.webp')}});">
        <!-- #navigation start -->
        <!-- #navigation end -->
    </section>



    <div class="w-75" style="border: 3px solid orange;
               padding: 2rem; margin: auto">
        <table class="invoice"
        >
            <tbody>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>To,</b></h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Name</b> : {{$user->name}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>C/o</b> : {{$user->care_of}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Proper Address</b> : {{$user->postal}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Landmark</b> : {{$user->landmark}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Pincode</b> : {{$user->pincode}}</h4>
                    </div>
                </td>
            </tr>


            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>City</b> : {{$user->city}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>State</b> : {{$user->state}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Valid Number</b> : {{$user->phone}}</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Alternate Number</b> : {{$user->alternate_phone}}</h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="w-50 p-3" colspan="2">
                    <div>
                        <h4 class="header-main"></h4>
                    </div>
                </td>
            </tr>
            </tbody>
            <!--supplier and user details-->

        </table>
    </div>
    <div class="w-75" style="border: 3px solid black;
               padding: 2rem; margin: 2rem auto auto;">
        <table class="invoice">
            <!--supplier and user details-->
            <tbody>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><u><b>FROM</b></u>,</h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>NAME</b> : Academy of Civil Services</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>CONTACT NUMBER</b> : 9085268769</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>ADDRESS</b> : Naliyapool, ayub ali path, near Ganesh Mandir<br>Dibrugarh, Assam</h4>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="w-50 align-baseline">
                    <div>
                        <h4><b>Pin</b> : 786001</h4>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="w-50 p-3" colspan="2">
                    <div>
                        <h4 class="header-main"></h4>
                    </div>
                </td>
            </tr>
            </tbody>

        </table>
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
    <style type="text/css" media="print">
        * {
            -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
            color-adjust: exact !important; /*Firefox*/
        }
    </style>
    <script>
        window.onload = function invoice()
        {
            window.print();
        }
    </script>
@endsection
