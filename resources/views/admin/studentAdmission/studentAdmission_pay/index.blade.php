@extends('layouts.admin')
@section('title')
    Payments
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
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{$student->std_name}}'s Payments</h6>
            <h6 class="m-0 font-weight-bold text-primary">Amount Pending : {{$student->course_pending}}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Payment</th>
                           <th>Date</th>
                        <th>Payment Mode</th>
                                              <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    @forelse($pays as $pay)
                        <tr>
                            <td>{{$pay->id}}</td>
                            <td>{{$pay->add_pay}}</td>
                                  <td>{{$pay->date}}</td>
                            <td>{{$pay->mode}}</td>
                                             <td><a class="btn button btn-success" href="{{route('admin.studentAdmissionPay.edit',$pay->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('studentAdmissionPay.destroy', $pay->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn button btn-danger text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                               NO DATA FOUND
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <a class="btn btn-primary" href="{{route('admin.studentAdmission.index')}}">View all
                                    Admissions</a>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
