@extends('layouts.admin')
@section('title')
    Admission Enquiries
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
<form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.admissionenquiries.index',$branch)}}" method="GET">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control border-2 small" name="search" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<a class="btn button text-white" href="{{route('admin.admissionenquiries.create',$branch)}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
    Create New
</a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">Admission Enquiries</h6>

            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Number of visitors</th>
                        <th>Source</th>
                         <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                             <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td>{{$data->visitors}}</td>
                            <td>{{$data->source}}</td>
                            <td>{{$data->created_at}}</td>
                            <td><a class="btn btn-primary small"
                                   href="{{route('admin.admissionenquiries.edit', $data->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('admissionenquiries.destroy', $data->id)}}" method="POST">
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
                {{$datas->appends(Request::get('searchUser'))->links()}}
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
