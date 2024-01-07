@extends('layouts.admin')
@section('title')
    Outside Course
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
    @elseif ($message = Session::get('create'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Outside Course</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course Taken</th>
                            <th>Feedback</th>
                            <th>Created_at</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->courseTaken($data->email) }}</td>
                                <td>
                                    @if (empty($data->feedback))
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#feedbackModal{{ $data->id }}">
                                            Add Feedback
                                        </button>
                                        <div class="modal fade" id="feedbackModal{{ $data->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="feedbackModalLabel{{ $data->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="feedbackModalLabel{{ $data->id }}">
                                                            Add Feedback</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.outside.course.add_feedback') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="data_id"
                                                                value="{{ $data->id }}">
                                                            <textarea class="form-control" name="feedback_text" placeholder="Enter feedback"></textarea>
                                                            <button type="submit"
                                                                class="btn btn-primary mt-3">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        {{ $data->feedback }}
                                    @endif
                                </td>
                                <td>{{ $data->created_at }}</td>
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
        setInterval(function() {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
