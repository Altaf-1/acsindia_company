@extends('layouts.admin')
@section('title')
    Staff Information
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
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.staffInformation.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="search" placeholder="Search for name"
                   aria-label="Search" aria-describedby="basic-addon2" value="{{Request::get('search')}}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <a class="btn button text-white" href="{{route('admin.staffInformation.create')}}"
       style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Staff Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Staff ID</th>
                                         <th>Image</th>
                        <th>Staff Name</th>
                        <th>Staff Phone No./Email/State</th>
                        <th>Guardian's Name/Relation/Phone/Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->staff_id}}</td>
                             <td><img width="200" src="{{asset('storage/'.$data->image)}}" alt=""></td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->phone}}<br>{{$data->email}}<br>{{$data->address}}</td>
                            <td>{{$data->guardian_name}}<br>{{$data->relation}}
                                <br>{{$data->guardian_phone}}<br>{{$data->guardian_email}}</td>
                            <td><a class="btn button btn-success"
                                   href="{{route('admin.staffInformation.edit',$data->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('staffInformation.destroy', $data->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn button btn-danger text-white">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{$datas->appends(Request::get('search'))->links()}}
            </div>
        </div>
    </div>
@endsection
