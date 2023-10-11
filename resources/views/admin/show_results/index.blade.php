@extends('layouts.admin')
@section('title')
    Show Results
@endsection
@section('style')
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

    {{--    <!-- Search -->--}}
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.showresult.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="search" placeholder="Search for..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <a class="btn button text-white" href="{{route('admin.showresult.create')}}"
       style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New Result
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-1">
                    <h6 class="m-0 font-weight-bold text-primary">Results</h6>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Student Photo</th>
                        <th>Student Name</th>
                        <th>State</th>
                        <th>Rank</th>
                        <th>Percentage</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($results as $result)
                        <tr>
                            <td><img src="{{asset('storage/'.$result->image)}}" style="object-fit: cover; height: 100px;width: auto;" alt=""></td>
                            <td>{{$result->name}}</td>
                            <td>{{$result->state}}</td>
                            <td>{{$result->rank}}</td>
                            <td>{{$result->percentage}}</td>
                            <td><a class="btn btn-primary small" href="{{route('admin.showresult.edit', $result->id)}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('showresult.destroy', $result->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Result found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$results->appends(Request::get('search'))->links()}}
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
