@extends('layouts.admin')
@section('title')
    Class Test
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

    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.result.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search for..." value="{{$search}}"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <a class="btn button text-white" href="{{route('admin.result.create')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
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
                        <th>User Name</th>
                        <th>Course</th>
                          <th>Test Name</th>
                        <th>Date</th>
                        <th>Rank</th>
                        <th>Percentage</th>
                        <th>Marks</th>
                        <th>Total Marks</th>
                      <th>Graph</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($results as $result)
                        <tr>
                            <td>{{\App\User::findOrFail($result->user_id)->name}}</td>
                            <td>{{$result->course}}</td>
                             <td>{{$result->test_name}}</td>
                            <td>{{$result->date}}</td>
                            <td>{{$result->rank}}</td>
                            <td>{{$result->percentage}}</td>
                            <td>{{$result->marks}}</td>
                            <td>{{$result->total_marks}}</td>
                            <!--<td><a target="_blank" href="{{$result->pdf}}">Pdf</a></td>-->
                             <td><a class="btn btn-primary small" href="{{route('admin.result.show', $result->id)}}">Show</a></td>
                            <td><a class="btn btn-primary small" href="{{route('admin.result.edit', $result->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('result.destroy', $result->id)}}" method="POST">
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
                {{$results->appends(Request::get('searchUser'))->links()}}

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
