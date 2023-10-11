@extends('layouts.admin')
@section('title')
    User Submitted Polls
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


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">User Submitted Poll</h6>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Poll Name</th>
                            <th>Total User Response</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($polls as $poll)
                            <tr>
                                <td>{{ $poll->poll_name }}</td>
                                <td>{{ $poll->count_reposnses($poll->id) }}</td>
                                <td>
                                    <a href="{{ route('admin.faculty_user_poll.show', $poll->id) }}"
                                        class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No User Poll Created</td>
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
