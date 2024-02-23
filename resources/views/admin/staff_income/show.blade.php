@extends('layouts.main')
@section('title')
Invoice {{$income->staff_id}} - {{$income->getStaffDetails($income->staff_id)->name}}
@endsection
@section('styles')
<style>
.form-control {
    border-radius: 0;
}

.borderDiv {
    position: relative;
    border: 2px solid #cb910c;
    padding: 30px;
    margin: 20px;
}

.header {
    position: absolute;
    top: -14px;
    left: 1%;
    padding: 0% 2px;
    margin: 0%;
    background: white !important;
}

th {
    padding-bottom: 20px;
}

td {
    padding-right: 150px;
    padding-bottom: 20px;
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

<div class="container-fluid rounded-0 emp-profile" style="border: 8px solid black;height:100vh">
    <div class="row text-center justify-content-center">
        <div class="col-sm-3 d-flex">
            .
        </div>
        <div class="col-sm-6 d-flex justify-content-center pl-3">
            <img class="header-img" width="350px" src="{{asset('img/log1.jpg')}}" alt="">
        </div>
        <div class="col-sm-3">
            .
        </div>
    </div>

    <div class="row pt-5 pb-5">
        <div class="col-lg-12 text-center">
            <h3 style="color:black;font-weight: bold">Date : {{\Carbon\Carbon::parse($income->month)->format('d-F-Y')}}
            </h3>
        </div>
    </div>




    <div class="borderDiv pt-5 pb-5 mb-5" style="font-size: 25px ; color: black">
        <label class="header font-weight-bold bg-light text-uppercase">Staff Information<span
                class="required">*</span></label>
        <table>
            <tr>
                <th>Staff ID :</th>
                <td>{{$income->staff_id}}</td>
                <th rowspan="4"><img class="ml-5" width="300"
                        src="{{asset('storage/'.$income->getStaffDetails($income->staff_id)->image)}}" alt=""></th>
            </tr>
            <tr>
                <th>Name :</th>
                <td>{{$income->getStaffDetails($income->staff_id)->name}}</td>
            </tr>

            <tr>
                <th>Email :</th>
                <td>{{$income->getStaffDetails($income->staff_id)->email}}</td>
            </tr>
            <tr>
                <th>Phone :</th>
                <td>{{$income->getStaffDetails($income->staff_id)->phone}}</td>
            </tr>
        </table>
    </div>
    <div class="borderDiv pt-5 pb-5" style="font-size: 25px; margin-bottom: 550px; color: black">
        <label class="header font-weight-bold bg-light text-uppercase">Staff Income Details<span
                class="required">*</span></label>
        <table>
            <tr>
                <th>Basic Salary :&nbsp</th>
                <td>{{$income->basic}}</td>
            </tr>
            <tr>
                <th>Earning Amount : </th>
                <td>{{$income->earning}}</td>
            </tr>
            <tr>
                <th>Earning Reason : </th>
                <td>{{$income->earning_reason}}</td>
            </tr>
            <tr>
                <th>Deduction : </th>
                <td>{{$income->deduction}}</td>
            </tr>
            <tr>
                <th>Deduction Reason :&nbsp </th>
                <td>{{$income->deduction_reason}}</td>
            </tr>
            <tr>
                <th>Net Salary : </th>
                <td>{{$income->net_salary}}</td>
            </tr>
        </table>
        <div>
        <!-- <div class="d-flex justify-content-around">
            <img class="p-4" style="width:auto;height:250px" src="{{asset('img/seal_re.png')}}">
            <img class="p-4" style="width:450px;height:250px" src="{{asset('img/sign_re.png')}}">        
        </div> -->
        </div>
    </div>

    
    
</div>



<style type="text/css" media="print">
* {
    -webkit-print-color-adjust: exact !important;
    /*Chrome, Safari */
    color-adjust: exact !important;
    /*Firefox*/
}
</style>
<script>
window.onload = function invoice() {
    window.print();
}
</script>
@endsection