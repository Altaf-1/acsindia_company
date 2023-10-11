@extends('layouts.admin')
@section('title')
    Staff Income Edit
@endsection
@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
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
    </style>
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Staff Income Create</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.staff-income.salary-update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Staff Information<span
                        class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-4 p-2">
                        <label for="staff_id">Staff ID</label>
                        <input type="text" class="form-control @error('staff_id') is-invalid @enderror"
                               name="staff_id" placeholder="Staff ID" readonly
                               value="{{$data->staff_id}}">
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" placeholder="Enter Name" readonly
                               value="{{$data->name}}">
                    </div>

                    <div class="col-lg-4 p-2">
                        <label for="basic">Basic Salary</label>
                        <input id="basic" onchange="getNet()" type="text" class="form-control @error('basic') is-invalid @enderror" readonly
                               name="basic" value="{{$data->basic}}">
                    </div>
                </div>

            </div>
            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Staff Salary Details<span
                        class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-6 p-2">
                        <label for="earning">Earning</label>
                        <input id="earning" onchange="getNet()" type="number" class="form-control"
                               name="earning" placeholder="Earning Amount"
                               value="{{$data->earning}}">
                    </div>
                    <div class="col-lg-6 p-2">
                        <label for="earning_reason">Earning Reason</label>
                        <textarea class="form-control" rows="3" name="earning_reason" placeholder="Enter Earning Reason">{{$data->earning_reason}}</textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="deduction">Deduction</label>
                        <input id="deduction" onchange="getNet()" type="number" class="form-control"
                               name="deduction" placeholder="Deduction Amount"
                               value="{{$data->deduction}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="deduction_reason">Deduction Reason</label>
                        <textarea class="form-control" rows="3" name="deduction_reason" placeholder="Enter Deduction Reason">{{$data->deduction_reason}}
                        </textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="month">Month</label>
                        <input type="date" class="form-control"
                               name="month" placeholder="For the month"
                               value="{{$data->month}}">
                    </div>
                    <div class="col-lg-6 p-2">
                        <label for="net_salary">Net Salary</label>
                        <input id="net_salary" type="number" class="form-control"
                               name="net_salary" placeholder="Net Salary"
                               value="{{$data->net_salary}}">
                    </div>
                </div>

            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">SAVE</button>

        </form>
    </div>
    <script>
        function getNet(){
            const basic= document.getElementById('basic').value;
            const earn= document.getElementById('earning').value;
            const deduction= document.getElementById('deduction').value;
            document.getElementById('net_salary').value = parseFloat(basic) +parseFloat(earn)-parseFloat(deduction);
        }
    </script>
@endsection
