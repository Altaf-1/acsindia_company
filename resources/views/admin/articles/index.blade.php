@extends('layouts.admin')
@section('title')
    Articles
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

    @elseif ($message = Session::get('create'))
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
          action="{{route('admin.article.index')}}" method="GET">
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
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Articles</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Pdf</th>
                        <th>Created_at</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->mail}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{\Carbon\Carbon::parse($data->created_at)->format('d-M-Y')}}</td>
                            <td><a class="btn btn-primary small"
                                   href="{{asset('storage/'.$data->pdf)}}" target="_blank">Show</a></td>

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

@section('scripts')

    <script type="text/javascript">
        setInterval(function () {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
