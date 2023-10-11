@extends('layouts.admin')
@section('title')
    Video Ratings
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
    @if($type === 1)
        <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
              action="{{route('admin.video-rating-search.index')}}" method="post">
    @else
                <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                      action="{{route('admin.video-rating-new-search.index')}}" method="post">
    @endif

        @csrf
        <div class="input-group">
            <select name="video_id" class="form-control mr-4">
                <option value="0" selected>Select Course</option>
                @foreach($courses as $course)
                    @if($type === 1)
                        <option value="{{$course->course}}">{{$course->course}}</option>
                    @else
                        <option value="{{$course->course}}">{{$course->course}}</option>
                    @endif
                @endforeach
            </select>
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
                Ratings</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Course</th>
                        <th>Video Name</th>
                        <th>1 star Rating</th>
                        <th>2 star Rating</th>
                        <th>3 star Rating</th>
                        <th>4 star Rating</th>
                        <th>5 star Rating</th>
                          <th>Total Student Rating</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($ratings as $rating)
                        <tr>
                            @if($type === 1)
                            <td>{{\App\ClassVideo::findOrFail($rating['video_id'])->course}}</td>
                            <td>{{\App\ClassVideo::findOrFail($rating['video_id'])->title}}</td>
                            @else
                                <td>{{\App\NewVideo::findOrFail($rating['video_id'])->course}}</td>
                                <td>{{\App\NewVideo::findOrFail($rating['video_id'])->title}}</td>
                            @endif
                            <td>{{$rating['1 star']}}</td>
                            <td>{{$rating['2 star']}}</td>
                            <td>{{$rating['3 star']}}</td>
                            <td>{{$rating['4 star']}}</td>
                            <td>{{$rating['5 star']}}</td>
                               <td>{{$rating['1 star'] + $rating['2 star'] + $rating['3 star']+ $rating['4 star'] + $rating['5 star']}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Ratings</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
