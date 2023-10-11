@extends('layouts.admin')
@section('title')
    Student Payment
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
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student Payment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Contact Number</th>
                        <th>Batch</th>
                        <th>Course Price</th>
                        <th>Paid Amount</th>
                        <th>Pending Amount</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    @forelse($students as $student)
                        <tr>
                            <td>{{$student->std_name}}</td>
                            <td>{{$student->std_phone}}</td>
                            <td>{{$student->courses($student->course)}}</td>
                            <td>{{$student->course_price}}</td>
                            <td>{{$student->course_fee_pay}}</td>
                            <td>{{$student->course_pending}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{--                {{$students->appends(Request::get('search'))->links()}}--}}
            </div>
        </div>
    </div>
@endsection
