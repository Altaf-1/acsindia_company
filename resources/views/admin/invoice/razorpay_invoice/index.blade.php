@extends('layouts.admin')
@section('title')
  Razorpay Invoices
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.invoice.razorpay.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="inv" placeholder="Search invoice-id..."
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
            Razorpay Invoices</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Invoice ID</th>
                        <th>Payment ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Course Name</th>
                        <th>Amount</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($invoices as $invoice)
                        <tr>
                            <td>{{$invoice->invoice_id}}</td>
                            <td>{{$invoice->payment_id}}</td>
                            <td>{{\App\User::where('id',$invoice->user_id)->get()->first()->name}}</td>
                                     <td>{{\App\User::where('id',$invoice->user_id)->get()->first()->email}}</td>
                            <td>{{$invoice->course}}</td>
                            <td>{{$invoice->amount}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('admin.invoice.show',$invoice->payment_id)}}">Show</a>
                            </td>
                              <td>
                                <form action="{{route('admin.invoice.destroy',$invoice->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Invoices</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$invoices->links()}}
            </div>
        </div>
    </div>
@endsection
