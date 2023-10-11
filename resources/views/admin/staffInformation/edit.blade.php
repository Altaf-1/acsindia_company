@extends('layouts.admin')
@section('title')
    Staff Information Edit
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
    </style>
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Staff</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.staffInformation.update', $data->id)}}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Staff Information<span
                        class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-4 p-2">
                        <label for="staff_id">Staff ID</label>
                        <input type="text" class="form-control @error('staff_id') is-invalid @enderror"
                               name="staff_id" placeholder="Staff ID"
                               value="{{$data->staff_id}}">
                        @error('staff_id')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror </div>
                    <div class="col-lg-4 p-2">
                        <label for="role">Role</label>
                        <input type="text" class="form-control @error('role') is-invalid @enderror"
                               name="role" placeholder="Role"
                               value="{{$data->role}}">
                        @error('role')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" placeholder="Enter Name"
                               value="{{$data->name}}">
                        @error('name')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror </div>
                    <div class="col-lg-4 p-2">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                               name="email" placeholder="Email"
                               value="{{$data->email}}">
                        @error('email')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                               name="phone" placeholder="Enter Phone Number"
                               value="{{$data->phone}}">
                        @error('phone')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="roll_no">Gender</label>
                        <Select name="std_gender" class="form-control" required>
                            <option value="{{$data->gender}}" selected>{{$data->gender}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </Select>
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="dob">DOB</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                               name="dob"   value="{{$data->dob}}">
                        @error('dob')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="doj">Date of Joining</label>
                        <input type="date" class="form-control @error('doj') is-invalid @enderror"
                               name="doj" value="{{$data->doj}}">
                        @error('doj')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="address">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                               name="address" value="{{$data->address}}">
                        @error('address')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="col-lg-4 p-2">
                        <label for="qualifications">Qualifications</label>
                        <input type="text" class="form-control @error('qualifications') is-invalid @enderror"
                               name="qualifications"  value="{{$data->qualifications}}">
                        @error('qualifications')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="work_experience">Work experience</label>
                        <input type="text" class="form-control @error('work_experience') is-invalid @enderror"
                               name="work_experience" value="{{$data->work_experience}}">
                        @error('work_experience')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                           <div class="col-lg-4 p-2">
                        <label for="image">New Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                               name="image" value="{{old('image')}}">
                        @error('image')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                             <div class="col-lg-4 p-2">
                        <label for="basic">Basic Salary</label>
                        <input type="text" class="form-control @error('basic') is-invalid @enderror"
                               name="basic" value="{{$data->basic}}">
                        @error('basic')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Parents Details<span
                        class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-4 p-2">
                        <label for="guardian_name">Parents Name</label>
                        <input type="text" class="form-control @error('guardian_name') is-invalid @enderror"
                               name="guardian_name" placeholder="Admission No" value="{{$data->guardian_name}}">
                        @error('guardian_name')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror </div>
                    <div class="col-lg-4 p-2">
                        <label for="relation">Relation</label>
                        <input type="text" class="form-control @error('relation') is-invalid @enderror"
                               name="relation" placeholder="relation " value="{{$data->relation}}">
                        @error('relation')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="guardian_phone">Phone No</label>
                        <input type="text" class="form-control @error('guardian_phone') is-invalid @enderror"
                               name="guardian_phone" placeholder="Enter Student Name"
                               value="{{$data->guardian_phone}}">
                        @error('guardian_phone')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror </div>
                    <div class="col-lg-4 p-2">
                        <label for="guardian_email">Email</label>
                        <input type="text" class="form-control @error('guardian_email') is-invalid @enderror"
                               name="guardian_email" placeholder="Email" value="{{$data->guardian_email}}">
                        @error('guardian_email')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Update</button>

        </form>
    </div>
@endsection
