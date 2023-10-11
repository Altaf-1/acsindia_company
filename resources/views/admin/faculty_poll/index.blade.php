@extends('layouts.admin')
@section('title')
    Polls
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

    <!-- Search -->


    <a class="btn button text-white" href="{{ route('admin.faculty_poll.create') }}"
        style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New Poll
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-1">
                    <h6 class="m-0 font-weight-bold text-primary">Poll</h6>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Poll</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Questions</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($polls as $poll)
                            <tr>
                                <td>{{ $poll->poll_name }}</td>
                                <td>{!! $poll->poll_description !!}</td>
                                <td>{{ $poll->status == 1 ? 'Active' : 'Not active' }}</td>
                                <td><a class="btn btn-primary small"
                                        href="{{ route('admin.faculty_poll_question.index', $poll->id) }}">Add
                                        Questions</a>
                                </td>
                                <td><a class="btn btn-primary small"
                                        href="{{ route('admin.faculty_poll.edit', $poll->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('faculty_poll.destroy', $poll->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Poll Created</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
