@extends('layouts.admin')
@section('title')
    User Webinars
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.user-webinar.search')}}"
          method="GET">
        @csrf
        <div class="input-group">
            <select class="form-control border-0 small" required name="webinar" id="Select Webinar">
                <option value="">Select Webinar </option>
                @foreach($webinars as $webinar)
                    <option value="{{$webinar}}">{{$webinar}}</option>
                @endforeach
            </select>
            <input type="text"
                   class="form-control border-2 small"
                   name="state"
                   placeholder="State ..."
                   aria-label="Search"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <a class="btn button text-white" href="{{route('admin.user-webinar.counsellor.create')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New Counsellor
    </a>

    <!-- upload excel file button -->
    <div class="row float-right">
        <div class="col-md-12">
            <form action="{{route('admin.user-webinar.import')}}"
                  method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="file"
                           class="form-control border-2 small"
                           name="user_webinar_excel"
                           accept=".csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                           placeholder="Excel file"
                           aria-describedby="basic-addon2">
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

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Webinar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Webinar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>State</th>
                        <th>Added On</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($datas as $data)
                        <tr>
                            <td @if($data->is_user_has_course) class="btn-success" @endif>{{$data->webinar}}</td>
                            <td @if($data->is_user_has_course) class="btn-success" @endif>{{$data->user_name}}</td>
                            <td @if($data->is_user_has_course) class="btn-success" @endif>{{$data->user_email}}</td>
                            <td @if($data->is_user_has_course) class="btn-success" @endif>{{$data->user_phone}}</td>
                            <td @if($data->is_user_has_course) class="btn-success" @endif>{{$data->user_state}}</td>
                            <td @if($data->is_user_has_course) class="btn-success" @endif>{{$data->created_at}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No User Webinar found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $datas->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
@endsection

