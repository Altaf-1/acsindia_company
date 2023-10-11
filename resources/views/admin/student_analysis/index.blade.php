@extends('layouts.admin')
@section('title')
    Student Webinar Analysis
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
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    {{--    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" --}}
    {{--          action="{{route('admin.staff-point.index')}}" method="GET"> --}}
    {{--        @csrf --}}
    {{--        <div class="input-group"> --}}
    {{--            <input type="text" class="form-control border-2 small" name="search" placeholder="Search for name" --}}
    {{--                   aria-label="Search" aria-describedby="basic-addon2" value="{{Request::get('search')}}"> --}}
    {{--            <div class="input-group-append"> --}}
    {{--                <button class="btn btn-primary" type="submit"> --}}
    {{--                    <i class="fas fa-search fa-sm"></i> --}}
    {{--                </button> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </form> --}}
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <a class="btn button text-white" href="{{ route('admin.student.analysis.create') }}"
                style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
                Create New</a>
        </div>
        <div class="col-sm-12 col-lg-6 d-flex justify-content-end">
            <form action="{{ route('admin.student.analysis.deleteAll') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i> Delete All
                </button>
            </form>
        </div>
    </div>
    <br><br>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary"> Student Webinar Analysis</h6>

            <a style="float:right" href="{{ route('export.studentAnalysis') }}"
                class="btn btn-outline-primary  float-right">Export</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Student Phone</th>
                            <th>Student Email</th>
                            <th>Webinars Attended</th>
                            <th>Webinars Present Count</th>
                            <th>Counsellor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="data">

                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->student_name }}</td>
                                <td>{{ $data->student_phone }}</td>
                                <td>{{ $data->student_email }}</td>
                                <td>{{ $data->webinar_name }}</td>
                                <th>{{ $data->webinar_attendance }}</th>
                                <td>{{ $data->getCounsellor($data->student_email, $data->student_phone) }}</td>
                                <td>
                                    <form action="{{ route('admin.student.analysis.delete', $data->student_email) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
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
                {{ $datas->appends(Request::get('search'))->links() }}
            </div>
        </div>
    </div>
@endsection
