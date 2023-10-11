@extends('layouts.admin')
@section('title')
    Poll Questions
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
    <a class="btn button text-white" href="{{ route('admin.faculty_poll.index') }}"
        style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        View All Polls
    </a>

    <a class="btn button text-white" href="{{ route('admin.faculty_poll_question.create', $poll->id) }}"
        style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create Questions
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
                            <th>Sl no</th>
                            <th>Question</th>
                            <th>Option 1</th>
                            <th>Option 2</th>
                            <th>Option 3</th>
                            <th>Option 4</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($questions as $poll)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{!! $poll->question !!}</td>
                                <td>{{ $poll->option_1 }}</td>
                                <td>{{ $poll->option_2 }}</td>
                                <td>{{ $poll->option_3 }}</td>
                                <td>{{ $poll->option_4 }}</td>
                                <td>{{ $poll->answer }}</td>
                                <td>{{ $poll->status == 1 ? 'Active' : 'Not active' }}</td>
                                <td><a class="btn btn-primary small"
                                        href="{{ route('admin.faculty_poll_question.edit', $poll->id) }}">Edit</a></td>
                                <td>
                                    <form action="{{ route('faculty_poll_question.destroy', $poll->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Question Created</td>
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
