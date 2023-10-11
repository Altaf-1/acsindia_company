@extends('layouts.admin')
@section('title')
    New Tests Sub Topic
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
    <hr>
    <form action="{{route('admin.new_video_sub_topic.store')}}" method="post">
        @csrf
        <div class="input-group">
            <input required type="text" class="form-control border-2 small" name="sub_topic" placeholder="Sub Topic">

            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    Add Sub Topic
                </button>
            </div>
        </div>
    </form>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">New Video Sub Topics</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sub Topic</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($headings as $heading)
                        <tr>
                            <td>{{$heading->sub_topic}}</td>
                            <td><a class="btn btn-primary small" href="{{route('admin.new_test_sub_topic.edit', $heading->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('new_test_sub_topic.destroy', $heading->id)}}" method="POST">
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
                {{$headings->links()}}
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
