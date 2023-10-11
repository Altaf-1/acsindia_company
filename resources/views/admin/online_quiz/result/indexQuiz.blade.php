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
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6 class="m-0 font-weight-bold text-primary ">Quiz</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Quiz</th>
                            <th>View Result</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->quiz_name }}</td>
                                <td><a class="btn btn-info small"
                                        href="{{ route('admin.onlineQuizresult', $data->id) }}">View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">No Data found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
