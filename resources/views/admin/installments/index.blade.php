@extends('layouts.admin')
@section('title')
    Installment Payments
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
    
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Installments</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Course</th>
                        <th>Total installment Paid</th>
                        <th>Total Course Amount</th>
                        <th>Installment Details</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($payments as $payment)
                        <tr>
                            <td>{{$payment->user_id}}</td>
                            <td>{{$payment->userName($payment->user_id)}}</td>
                            <td>{{$payment->getCourseName($payment->course_id, $payment->unique_course_id, 'title')->result}}</td>
                            <td>₹ {{$payment->total_amount}}</td>
                            <td>₹ {{$payment->getCourseName($payment->course_id, $payment->unique_course_id, 'sale')->result}}</td>
                            <td><a class="btn btn-primary" href="{{route('admin.payment-installments.show', [$payment->user_id, $payment->unique_course_id, $payment->course_id])}}">Show Details</a></td>
                            <td>{{$payment->status}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No New Installments</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

