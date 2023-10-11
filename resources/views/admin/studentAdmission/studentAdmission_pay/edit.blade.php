@extends('layouts.admin')
@section('title')
    Payments Edit
@endsection
@section('links')
    <link href="{{asset('css/form.css')}}" rel="stylesheet">
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Add Fee</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{route('admin.studentAdmissionPay.update', $pay->id)}}" method="POST" >
            @csrf
            @method('PATCH')

            <input type="hidden" value="{{$pay->student_admission_id}}" name="student_admission_id">

  

            <div class="form-group font-weight-bold">
                <label for="add_pay">Add Amount:</label>
                <input type="number" style="border-radius: 20px;" class="form-control" name="add_pay" value="{{$pay->add_pay}}">
            </div>
            
                 <div class="form-group font-weight-bold">
                <label for="date">Date</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date" value="{{$pay->date}}" placeholder="Enter date">
            </div>

            <div class="form-group font-weight-bold">
                <label for="mode">Payment Mode:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="mode"  value="{{$pay->mode}}" placeholder="Enter payment mode">
            </div>

            <br>
       
                
            <button class="btn button text-white" style="background: #fb770c;" type="submit">Edit</button>
            
                    <a class="btn btn-primary ml-2" href="{{route('admin.studentAdmissionPay.show', $pay->student_admission_id)}}">Back</a>
            
         

        </form>
    </div>
@endsection
