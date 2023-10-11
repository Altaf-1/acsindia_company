@extends('layouts.admin')
@section('title')
    Daily News
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
    {{--    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action=""--}}
    {{--          method="GET">--}}
    {{--        @csrf--}}
    {{--        <div class="input-group">--}}
    {{--            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search for..."--}}
    {{--                   aria-label="Search" aria-describedby="basic-addon2">--}}
    {{--            <div class="input-group-append">--}}
    {{--                <button class="btn btn-primary" type="submit">--}}
    {{--                    <i class="fas fa-search fa-sm"></i>--}}
    {{--                </button>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </form>--}}

    <a class="btn button text-white" href="{{route('admin.dailynews.create')}}"
       style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New</a>
    <br><br>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-1">
                    <h6 class="m-0 font-weight-bold text-primary">Daily News</h6>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>File</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->date}}</td>
                            <td>
                                @if($data->pdf!=null)
                                <a href="{{asset('storage/'.$data->pdf)}}" target="_blank">File</a>
                                @else
                                No file
                                @endif
                            </td>
                            <td><a class="btn btn-primary small" href="{{route('admin.dailynews.edit', $data->id)}}">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('dailynews.destroy', $data->id)}}" method="POST">
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
        </div>
    </div>
@endsection

{{--@section('scripts')--}}

{{--    <script type="text/javascript">--}}
{{--        setInterval(function() {--}}
{{--            $("#data").load(location.href+" #data>*","");--}}
{{--        }, 10000);--}}
{{--    </script>--}}
{{--@endsection--}}
