@extends('layouts.admin')
@section('title')
    Courses
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
    @elseif ($message = Session::get('create'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="{{ route('admin.apsccourses.index') }}" method="GET">
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
    </form>
    @if (Auth::user()->role === 'super')
        <a class="btn button text-white" href="{{ route('admin.apsccourses.create') }}"
            style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
            Create New Course
        </a>
    @endif
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">APSC Courses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Course Id</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Timing</th>
                            <th>Days</th>
                            <th>Sequence</th>
                            <th>Status</th>
                            <th>Show</th>
                            @if (Auth::user()->role === 'super')
                                <th>Edit</th>
                            @else
                            @endif
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($courses as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->timing }}</td>
                                <td>{{ $course->days }}</td>
                                <td>{{ $course->sequence }}</td>
                                <td>
                                    @if ($course->active == 0)
                                        Not active
                                    @else
                                        Active
                                    @endif
                                </td>
                                <td><a class="btn btn-primary small"
                                        href="{{ route('admin.apsccourses.show', $course->slug) }}">Show</a></td>
                                @if (Auth::user()->role === 'super')
                                    <td><a class="btn btn-primary small"
                                            href="{{ route('admin.apsccourses.edit', $course->slug) }}">Edit
                                        </a><i class="fa fa-pencil-square" aria-hidden="true"></i></td>
                                @else
                                @endif

                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Courses found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $courses->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
