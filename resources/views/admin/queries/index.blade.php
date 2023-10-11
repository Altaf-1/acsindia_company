@extends('layouts.admin')
@section('title')
    Events
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.queries.index')}}" method="GET">
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
            <h6 class="m-0 font-weight-bold text-primary">Queries</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Query Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                         <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($queries as $query)
                        <tr>
                            <td>{{$query->id}}</td>
                            <td>{{$query->name}}</td>
                            <td>{{$query->phone}}</td>
                            <td>{{$query->email}}</td>
                            <td>{{$query->message}}</td>
                            <td>{{$query->created_at}}</td>
                            <td>{{$query->status}}</td>
                            <td><a class="btn btn-primary small mr-2" href="{{route('admin.query.resolve',$query->id)}}">DONE
                                </a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No Queries found</td>
                        </tr>
                    @endforelse
                    </tbody>

                </table>
                {{ $queries->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        setInterval(function () {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
