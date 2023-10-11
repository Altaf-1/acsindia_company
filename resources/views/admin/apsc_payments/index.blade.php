@extends('layouts.admin')
@section('title')
    @if($type == 0)
        Apsc Pending Payments
    @else
        Apsc Processed Payments
    @endif
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.course_payment.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search Username..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                @if($type == 0)
                    Pending Payments
                @else
                    Processed Payments
                @endif</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>Course Name</th>
                        <th>User Name</th>
                        <th>Payment Type</th>
                        <th>Receipt photo</th>
                        <th>Status</th>
                        <th>Payment Done At</th>
                        @if($type == 0)
                            <th>Action</th>
                        @endif
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($payments as $payment)
                        <tr>
                            <td>{{$payment->id}}</td>
                            <td>{{$payment->apsc_course->title}}
                                @php
                                    $userExtraMaterial = App\UserExtraMaterial::get_user_extra_material(
                                        $payment->user_id, 2, $payment->apsc_course_id);
                                @endphp

                                @if($userExtraMaterial)
                                    @foreach($userExtraMaterial as $extraMaterial)
                                        @if($extraMaterial->extra_material_id == 1)
                                            <span class="badge badge-primary">Upsc Materials</span><br>
                                        @elseif($extraMaterial->extra_material_id == 2)
                                            <span class="badge badge-primary">Apsc Materials</span><br>
                                        @elseif($extraMaterial->extra_material_id == 3)
                                            <span class="badge badge-primary">No Materials</span><br>
                                        @endif
                                    @endforeach
                                @endif

                            </td>
                            <td>
                                Name : <b>{{$payment->user->name}}</b><br>
                                Email : <b>{{$payment->user->email}}</b><br>
                                Phone : <b>{{$payment->user->phone}}</b><br>
                            </td>
                            <td>{{$payment->payment_type}}</td>
                            <td><button type="button" class="btn btn-primary" onclick="receiptModal{{$payment->id}}()">View Receipt</button>
                                <script>
                                    function receiptModal{{$payment->id}}() {
                                        Swal.fire({
                                            title: 'Receipt',
                                            imageUrl: '{{asset('storage/'.$payment->receipt)}}',
                                            imageWidth: 400,
                                            imageHeight: 600,
                                            showConfirmButton:false
                                        })
                                    }
                                </script>
                            </td>
                            <td>
                                @if($payment->status == 0)
                                    Pending
                                @else
                                    Alloted
                                @endif
                            </td>
                            <td>{{$payment->created_at}}</td>

                                @if($payment->status == 0)
                                <td>    <form action="{{route('admin.apsc.course_payment.allow',$payment->id)}}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-primary small" type="submit">Allow
                                        </button><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                    </form>
                                </td>
                                @endif

                              <td>
                                <form action="{{route('admin.apsc.course_payment.delete',$payment->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Payments Pending found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
