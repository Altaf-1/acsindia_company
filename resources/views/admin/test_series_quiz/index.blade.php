@extends('layouts.admin')
@section('title')
    quizs
@endsection
@section('style')
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
    <a class="btn button text-white" href="{{ route('admin.testseriesquiz.create') }}"
        style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New</a>
    <br><br>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12">
                    <h6 class="m-0 font-weight-bold text-primary ">Quiz</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Questions</th>
                            <th>Assign Courses</th>
                            <th>Pdf</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->quiz_name }}</td>
                                <td><a href="{{ route('admin.testseriesquestion.index', $data->id) }}"
                                        class="btn btn-outline-primary">View</a></td>
                                <td><a href="{{ asset('storage/' . $data->pdf) }}" target="_blank"
                                        class="btn btn-outline-primary">View</a></td>
                                <td><a href="{{ route('admin.testseriesquiz.assign', $data->id) }}"
                                        class="btn btn-outline-primary">Assign Courses</a></td>
                                <td><a class="btn btn-outline-success small"
                                        href="{{ route('admin.testseriesquiz.edit', $data->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('testseriesquiz.destroy', $data->id) }}" method="POST">
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
