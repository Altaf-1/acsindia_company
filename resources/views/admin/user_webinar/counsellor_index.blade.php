@extends('layouts.admin')
@section('title')
    Counsellors
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
    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <a class="btn button text-white" href="{{route('admin.user-webinar.counsellor.create')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New Counsellor
    </a>
    <a class="btn button text-white" href="{{route('admin.user-webinar.index_webinar')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        View All Records
    </a>

    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.user-webinar.student-search')}}"
          method="GET">
        @csrf
        <div class="input-group">
            <input type="text"
                   class="form-control border-2 small"
                   name="email_phone"
                   placeholder="Enter User email or Phone."
                   aria-label="Search"
                   aria-describedby="basic-addon2">
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
            <h6 class="m-0 font-weight-bold text-primary">Counsellors</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Counsellor Id</th>
                        <th>Name</th>
                        <th>Add Excel</th>
                        <th>View Students Data</th>
                        <th>Added On</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->counsellor_id}}</td>
                            <td>{{$data->name}}</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{route('admin.user-webinar.import')}}"
                                              method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group">
                                                <input type="file"
                                                       class="form-control border-2 small"
                                                       required
                                                       name="user_webinar_excel"
                                                       accept=".csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                                                       placeholder="Excel file"
                                                       aria-describedby="basic-addon2">
                                                <input type="hidden" name="counsellor_id" value="{{$data->counsellor_id}}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-success" type="submit">
                                                        <i class="fas fa-file-excel"></i>
                                                        Import
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{route('admin.user-webinar.counsellor-students.show',$data->counsellor_id)}}"
                                   class="btn btn-primary btn-circle btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td>{{$data->created_at}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No Counsellor found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $datas->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
@endsection

