@extends('layouts.admin')
@section('title')
    Products Sell
@endsection
@section('style')
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">SOLD</div>
                            <div id="courseCount" class="h5 mb-0 font-weight-bold text-gray-800">{{ $datas->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x " style="color:#478f78;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">IN-STOCK</div>
                            <div id="courseCount" class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Product::where('sold', 0)->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x " style="color:#478f78;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search -->
    {{-- <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action=""
        method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <a class="btn button text-white" href="{{ route('admin.products.orders.create') }}"
        style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12">
                    <h6 class="m-0 font-weight-bold text-primary">Products Code</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Bar code</th>
                            <th>Bar code</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->product->code }}</td>
                                <td> {!! DNS1D::getBarcodeHTML($data->product->code, 'C128', 1, 33) !!}</td>
                                <td><a class="btn btn-primary small"
                                        href="{{ route('admin.products.orders.edit', $data->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('products.orders.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Data found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $datas->appends(request()->input())->links() }}
        </div>
    </div>
@endsection
