@extends('layouts.main')
@section('title')
    Invoice {{$point->staff_id}} - {{$point->getStaffDetails($point->staff_id)->name}}
@endsection
@section('styles')
    <style>
        th{
            padding-bottom: 20px;
        }
        td{
            text-align: center;
        }
        hr{
            background-color : black;
            height : 2px;
        }
    </style>
@endsection
@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
    <link href="{{asset('css/adminPanel.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,900;1,900&display=swap" rel="stylesheet">
@endsection
@section('content')

    <div class="container-fluid rounded-0 emp-profile" style="border: 8px solid black; height: 100vh">
        <div class="row">
            <div class="col-sm-3 d-flex">
                <img class="header-img" width="200px" src="{{asset('comimages/apsc-logo.jpeg')}}" alt="">
            </div>
            <div class="col-sm-9">
                <h1 class="header-main font-weight-bold" style="font-family: 'Poppins', sans-serif;font-size: 80px; color: black">ACADEMY OF <br>CIVIL SERVICES</h1>
            </div>
        </div>
        <hr>

        <div class="row pt-5">
            <div class="col-lg-12 text-center">
                <h3 style="color:black;font-weight: bold">Office Work Performance Report -  {{\Carbon\Carbon::parse($point->month)->format('F Y')}}</h3 >
            </div>
        </div>

        <div class="row pt-5 pb-5">
            <div class="col-lg-12 text-center">
                <h3 style="color:black;font-weight: bold">Name of the Employee: <span class="text-uppercase">{{$point->getStaffDetails($point->staff_id)->name}}</span></h3 >
            </div>
        </div>

<center>
            <table style="font-size: 25px ; color: black" border="" class="text-center" width="1000px">
                <tr>
                    <th class="text-white text-uppercase" style="background-color: #f54242">Distribution</th>
                    <th class="text-white text-uppercase" style="background-color: #f54242">Points Earned</th>
                    <th class="text-white text-uppercase" style="background-color: #f54242">Reason</th>
                </tr>
                <tr>
                    <th>Punctuality</th>
                    <td>{{$point->punctuality}}</td>
                    <td >{{$point->punctuality_reason}}</td>
                </tr>
                <tr>
                    <th>Leave</th>
                    <td>{{$point->leave}}</td>
                    <td>{{$point->leave_reason}}</td>
                </tr>
                <tr>
                    <th>work Uploading</th>
                    <td>{{$point->work}}</td>
                    <td>{{$point->work_reason}}</td>
                </tr>
                <tr>
                    <th>Directors points</th>
                    <td>{{$point->director}}</td>
                    <td>{{$point->director_reason}}</td>
                </tr>
                <tr>
                    <th>Total points</th>
                    <td colspan="2">{{$point->total}}</td>
                </tr>
                <tr>
                    <th  style="background-color: yellow">Overall Performance</th>
                    <td colspan="2">{{$point->overall}}</td>
                </tr>
            </table>
</center>

        <div class="row pt-5">
            <div class="col-lg-12">
                <h4 style="color:black;font-weight: bold">Total points 100</h4 >
            </div>
            <div class="col-lg-12">
                <h4 style="color:black;font-weight: bold">Punctuality: 30 (One point Deducted for each one hour delay)</h4 >
            </div>
            <div class="col-lg-12">
                <h4 style="color:black;font-weight: bold">No Leave: 20 points (5 points deducted for each extra Leave)</h4 >
            </div>
            <div class="col-lg-12">
                <h4 style="color:black;font-weight: bold">Uploading work Every day: 30 Points (1 Point Deducted for not uploading one day Work)</h4 >
            </div>
            <div class="col-lg-12">
                <h4 style="color:black;font-weight: bold">Directors Analysis : 20 Points</h4 >
            </div>
        </div>
    </div>



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
