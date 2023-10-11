@extends('layouts.admin')
@section('title')
    Student Webinar Analysis
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
        <h6 class="m-0 font-weight-bold text-primary">Create Student Webinar Analysis</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.student.analysis.store')}}"
              method="POST" enctype="multipart/form-data">
            @csrf

            <div class="borderDiv">
                <label class="header font-weight-bold bg-light">Student Webinar Analysis<span class="required">*</span></label>
                <div class="row bg-transparent">
                    <div class="col-lg-4 p-2">
                        <label for="webinar_name">Webinar Name</label>
                        <input type="text" class="form-control @error('webinar_name') is-invalid @enderror"
                               name="webinar_name" placeholder="Webinar Name" value="{{old('webinar_name')}}">
                        @error('webinar_name')
                        <div class="invalid-feedback mt-2" role="alert">
                            <strong class="alert-danger" class="alert-danger">{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 p-2">
                        <label for="admission_no">Excel File</label>
                        <input type="file"
                               class="form-control border-2 small"
                               name="user_webinar_excel"
                               accept=".csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                               placeholder="Excel file"
                               aria-describedby="basic-addon2">
                    </div>
                </div>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">SAVE</button>

        </form>
    </div>

@endsection
