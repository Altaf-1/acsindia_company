@extends('layouts.admin')
@section('title')
    Personal Mentorship
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
    @endif
    <div class="container-fluid">
        <form action="{{ route('admin.personalmentor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input required type="text" name="course_name" class="form-control" placeholder="Enter Course Name">
            </div>
            <button type="submit" class="btn btn-primary">Generate Course</button>
        </form>
    </div>
    <hr>
    <!-- DataTales Example -->
    <a href="{{ route('admin.personalmentor.timetable') }}" class="btn btn-primary text-white ml-2 mb-2">See Time Table</a>
    <div class="card shadow mb-4 " id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Courses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Set Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->course_name }}</td>
                                <td><a href="{{ route('admin.personalmentor.set_time', $data->id) }}"
                                        class="btn btn-info text-white">Set Course Time</a></td>
                                <td><a href="{{ route('admin.personalmentor.edit', $data->id) }}"
                                        class="btn btn-warning text-white">Edit</a></td>
                                <td>
                                    <form action="{{ route('personalmentor.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger text-white" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">NO DATA</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
