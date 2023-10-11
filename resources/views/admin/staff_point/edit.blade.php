@extends('layouts.admin')
@section('title')
    Staff Point Edit
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
        <h6 class="m-0 font-weight-bold text-primary">Staff Point Edit</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.staff-point.update', $point->id)}}" method="POST" enctype="multipart/form-data">
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
                               value="{{$point->staff_id}}">
                    </div>
                </div>

            </div>
            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Staff Point Details<span
                        class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-6 p-2">
                        <label for="punctuality">punctuality</label>
                        <input id="punctuality" onchange="getTotal()" type="number" class="form-control"
                               name="punctuality" placeholder="Enter punctuality points"
                               value="{{$point->punctuality}}">
                    </div>


                    <div class="col-lg-6 p-2">
                        <label for="punctuality_reason">Punctuality Reason</label>
                        <textarea name="punctuality_reason" class="form-control" rows="3">{{$point->punctuality_reason}}</textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="leave">Leave</label>
                        <input onchange="getTotal()" id="leave" type="number" class="form-control"
                               name="leave" placeholder="Enter Leave points"
                               value="{{$point->leave}}">
                    </div>
                    <div class="col-lg-6 p-2">
                        <label for="leave_reason">Leave Reason</label>
                        <textarea name="leave_reason" class="form-control" rows="3">{{$point->leave_reason}}</textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="work">work Uploading</label>
                        <input onchange="getTotal()" id="work" type="number" class="form-control"
                               name="work" placeholder="Enter work uploading points"
                               value="{{$point->work}}">
                    </div>
                    <div class="col-lg-6 p-2">
                        <label for="work_reason">Work Reason</label>
                        <textarea name="work_reason" class="form-control" rows="3">{{$point->work_reason}}</textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="director">Director Points</label>
                        <input onchange="getTotal()" id="director" type="number" class="form-control"
                               name="director" placeholder="Enter director points"
                               value="{{$point->director}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="director_reason">Director Reason</label>
                        <textarea name="director_reason" class="form-control" rows="3">{{$point->director_reason}}</textarea>
                    </div>


                    <div class="col-lg-6 p-2">
                        <label for="month">Month</label>
                        <input type="date" class="form-control"
                               name="month" placeholder="For the month"
                               value="{{$point->month}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="total">Total Points</label>
                        <input id="total" type="number" class="form-control"
                               name="total" placeholder="Total"
                               value="{{$point->total}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="overall">Overall</label>
                        <input type="text" class="form-control"
                               name="overall" placeholder="overall"
                               value="{{$point->overall}}">
                    </div>
                </div>

            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">SAVE</button>

        </form>
    </div>
    <script>
        function getTotal(){
            const punctuality= document.getElementById('punctuality').value;
            const leave= document.getElementById('leave').value;
            const work= document.getElementById('work').value;
            const director= document.getElementById('director').value;
    
            document.getElementById('total').value =
                parseFloat(punctuality) +parseFloat(leave)+parseFloat(work)+parseFloat(director);
        }
    </script>
@endsection
