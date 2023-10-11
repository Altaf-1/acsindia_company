@extends('layouts.admin')
@section('title')
    Payment Create
@endsection
@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Fee</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.studentAdmissionPay.store')}}" method="POST" >
            @csrf

            <input type="hidden" value="{{$student->id}}" name="student_admission_id">

            <div class="form-group font-weight-bold">
                <label for="course_price">Course Price:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="course_price" value="{{$student->course_price}}"
                       >
            </div>

{{--            <div class="form-group font-weight-bold">--}}
{{--                <label for="course_fee_pay">Fee Pay:</label>--}}
{{--                <input type="number" style="border-radius: 20px;" class="form-control" name="course_fee_pay" value="{{$student->course_fee_pay}}"--}}
{{--                       >--}}
{{--            </div>--}}
            <div class="form-group font-weight-bold">
                <label for="course_fee_pay">Pending Pay:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="course_pending" value="{{$student->course_pending}}"
                >
            </div>

            <div class="form-group font-weight-bold">
                <label for="add_pay">Add Amount:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="add_pay" placeholder="Enter price">
            </div>
            
                  <div class="form-group font-weight-bold">
                <label for="date">Date</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date" placeholder="Enter date">
            </div>

            <div class="form-group font-weight-bold">
                <label for="mode">Payment Mode:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="mode" placeholder="Enter payment mode">
            </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection
