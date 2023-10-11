@extends('layouts.admin')
@section('title')
    Class video
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="GET">
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

        <a class="btn button text-white" href="{{route('admin.video.create')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
            Create New Class video
        </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-1">
                    <h6 class="m-0 font-weight-bold text-primary">Class Video</h6>
                </div>
                <div class="col-4">
                    <form action="{{route('admin.video.unique')}}" method="GET">
                        @csrf
                        <select style="border-radius: 20px; padding: 5px" name="course">
                            @if($select ?? '')
                                <option selected value="{{$select ?? ''}}">{{$select ?? ''}}</option>
                            @endif
                            @foreach($courses as $course)
                                <option value="{{$course->title}}">{{$course->title}}</option>
                            @endforeach
                            @foreach($apscs as $apsc)
                                <option value="{{$apsc->title}}">{{$apsc->title}}</option>
                            @endforeach
                               @foreach($records as $record)
                            <option value="{{$record->title}}">{{$record->title}}</option>
                        @endforeach
                        @foreach($studies as $study)
                        <option value="{{$study->title}}">{{$study->title}}</option>
                    @endforeach
                        </select>
                        <button class="btn btn-primary" style="padding: 3px" type="submit">GO</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Course</th>
                        <th>Title</th>
                        <th>Video Link</th>
                        <th>Date</th>
                        <th>Knowledge Link</th>
                        <th>Download Material Link</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($videos as $video)
                        <tr>
                            <td>{{$video->course}}</td>
                            <td>{{$video->title}}</td>
                            <td>{{$video->video}}</td>
                            <td>{{$video->date}}</td>
                            <td>{{$video->knowledge}}</td>
                            <td>{{$video->download}}</td>
                            <td><a class="btn btn-primary small" href="{{route('admin.video.edit', $video->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('video.destroy', $video->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Courses found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        {{ $videos->appends(Request::except('page'))->links() }}

        </div>
    </div>
@endsection


