@extends('layouts.main')
@section('title')
    Student Admission Invoice
@endsection
@section('links')

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/userprofile.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/invoice.css')}}">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection


@section('styles')
    <style>
        .img-class{
            width: 150px;
            height: 200px;
        }
        .fa {
            color: #fb770c;
        !important;
        }

        .borderDiv {
            position: relative;
            border: 2px solid #cb910c;
            padding: 30px;
            margin:20px;
        }
        .header {
            position: absolute;
            top: -14px;
            left: 1%;
            padding: 0% 2px;
            margin: 0%;
            background: white !important;
        }
        h5 {
            margin-bottom: 0;
            padding: 1px;
            padding-left:4px;
        }

        td{
            padding: 0;
        }
        .b-dark{
            border: 2px solid black;
                     height: 100vh;
        }
        
         hr{
            background-color: black;
            height: 2px;
        }
    </style>
@endsection

@section('content')
    <div class="container w-75 p-5 b-dark">
        <div class="row">
            <div class="col-4">
                    <img class="header-img" src="{{asset('comimages/apsc-logo.jpeg')}}" alt="">
            </div>
                <div class="col-6">
                    <h2 class="header-main">ACADEMY OF CIVIL SERVICES</h2>
                </div>
        </div>
        <hr>

        <div class="row"  style="font-size: 25px">
            <div class="col-4">
                <img class="img-class" src="{{asset('storage/'.$student->std_photo)}}" alt=""><br>
                <label class="font-weight-bolder mt-3">Admission No : </label> {{$student->admission_no}}<br>
                <label class="font-weight-bolder">Roll No : </label> {{$student->roll_no}}<br>
                <label class="font-weight-bolder">Class : </label> {{$student->class}}<br>
            </div>
            <div class="col-8">
                <div class="borderDiv">
                    <label class="header font-weight-bold bg-light">Student Information<span
                            class="required">*</span></label>
                <label class="font-weight-bolder">Student Name:</label> {{$student->std_name}}<br>
                <label class="font-weight-bolder">Student Email:</label> {{$student->std_email}}<br>
                <label class="font-weight-bolder">Student Phone:</label> {{$student->std_phone}}<br>
                <label class="font-weight-bolder">Student Phone:</label> {{$student->std_phone}}<br>
                <label class="font-weight-bolder">Student DOB:</label> {{$student->std_dob}}<br>
                <label class="font-weight-bolder">Gender : </label> {{$student->std_gender}}<br>
                <label class="font-weight-bolder">State : </label> {{$student->std_state}}<br>
                <label class="font-weight-bolder">District : </label> {{$student->std_district}}<br>
                <label class="font-weight-bolder">Category: </label> {{$student->std_category}}<br>
                <label class="font-weight-bolder">Admission Date: </label> {{$student->admission_date}}<br>
                </div>
            </div>
        </div>

        <div class="row"  style="font-size: 25px">
            <div class="col-4">

            </div>
            <div class="col-8">
                <div class="borderDiv">
                    <label class="header font-weight-bold bg-light">Parents Details<span
                            class="required">*</span></label>
                <label class="font-weight-bolder">Parents Name: </label> {{$student->guardian_name}}<br>
                <label class="font-weight-bolder">Relation: </label> {{$student->relation}}<br>
                <label class="font-weight-bolder">Phone No: </label> {{$student->guardian_phone}}<br>
                <label class="font-weight-bolder">Email: </label> {{$student->guardian_email}}<br>
                </div>
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
