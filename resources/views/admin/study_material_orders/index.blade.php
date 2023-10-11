@extends('layouts.admin')
@section('title')
    Study Material Orders
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
    <!-- Search -->
    @if($tag == 0)
        <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.study.orders.create')}}" method="GET">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control border-2 small" name="id" placeholder="receipt id, order id"
                       aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    @else
        <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.study.orders.success')}}" method="GET">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control border-2 small" name="id" placeholder="payment id, receipt id, order id"
                       aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    @endif


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Study Materials Orders</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>User</th>
                        <th>Receipt ID</th>
                        <th>Razorpay Order ID</th>
                        <th>Payment ID</th>
                        <th>Amount</th>
                        <th>Course</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Allow</th>
                        @if($tag == 0)
                            <th>Delete</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>
                                Name : <b>{{$order->user->name}}</b><br>
                                Email : <b>{{$order->user->email}}</b><br>
                                Phone : <b>{{$order->user->phone}}</b><br>
                            </td>
                            <td>{{$order->receipt_id}}</td>
                            <td>{{$order->order_id}}</td>
                            <td>{{$order->payment_id}}</td>
                            <td>{{$order->amount}}</td>
                            <td>{{$order->study_material->title}}</td>
                            <td>
                                @if($order->status == 0)
                                    Created
                                @else
                                    Successful
                                @endif
                            </td>
                            <td>{{$order->created_at}}</td>
                            <td>
                                @if($order->status == 0)
                                    <a class="btn btn-primary small" href="{{route('admin.study.orders.allow',$order->id)}}">Allow Course</a>
                                @else
                                    Provided
                                @endif
                            </td>
                            @if($tag == 0)
                                <td>
                                    <form action="{{route('admin.study.orders.destroy', $order->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            @endif

                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">No Orders found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
