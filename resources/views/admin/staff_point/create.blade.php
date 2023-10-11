@extends('layouts.admin')
@section('title')
    Staff Point Create
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

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Staff Point Create</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.staff-point.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
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
                </div>

            </div>
            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Staff Point Details<span
                        class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-6 p-2">
                        <label for="punctuality">Punctuality</label>
                        <input id="punctuality" type="number" class="form-control"
                               name="punctuality" placeholder="Enter punctuality points"
                               onchange="getTotal()" value="{{old('punctuality')}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="punctuality_reason">Punctuality Reason</label>
                        <textarea name="punctuality_reason" class="form-control" rows="3">{{old('punctuality_reason')}}</textarea>
                    </div>


                    <div class="col-lg-6 p-2">
                        <label for="leave">Leave</label>
                        <input onchange="getTotal()" id="leave" type="number" class="form-control"
                               name="leave" placeholder="Enter Leave points"
                               value="{{old('leave')}}">
                    </div>
                    <div class="col-lg-6 p-2">
                        <label for="leave_reason">Leave Reason</label>
                        <textarea name="leave_reason" class="form-control" rows="3">{{old('leave_reason')}}</textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="work">Work Uploading</label>
                        <input onchange="getTotal()" id="work" type="number" class="form-control"
                               name="work" placeholder="Enter work uploading points"
                               value="{{old('work')}}">
                    </div>
                    <div class="col-lg-6 p-2">
                        <label for="work_reason">Work Reason</label>
                        <textarea name="work_reason" class="form-control" rows="3">{{old('work_reason')}}</textarea>
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="director">Director Points</label>
                        <input onchange="getTotal()" id="director" type="number" class="form-control"
                               name="director" placeholder="Enter director points"
                               value="{{old('director')}}">
                    </div>


                    <div class="col-lg-6 p-2">
                        <label for="director_reason">Director Reason</label>
                        <textarea name="director_reason" class="form-control" rows="3">{{old('director_reason')}}</textarea>
                    </div>


                    <div class="col-lg-6 p-2">
                        <label for="month">Month</label>
                        <input type="date" class="form-control"
                               name="month" placeholder="For the month"
                               value="{{old('month')}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="total">Total Points</label>
                        <input id="total" type="number" class="form-control"
                               name="total" placeholder="Total"
                               value="{{old('total')}}">
                    </div>

                    <div class="col-lg-6 p-2">
                        <label for="overall">Overall Performance</label>
                        <input type="text" class="form-control"
                               name="overall" placeholder="overall"
                               value="{{old('overall')}}">
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
