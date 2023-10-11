@extends('layouts.admin')
@section('title')
    Applied Jobs
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

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Applied Jobs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Apply For</th>
                            <th>Subjects</th>
                            <th>Resume</th>
                            <th>Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($jobs as $job)
                            <tr>
                                <td>{{ $job->name }}</td>
                                <td>{{ $job->email }}</td>
                                <td>{{ $job->phone }}</td>
                                <td>{{ $job->city }}</td>
                                <td>{{ $job->apply_for }}</td>
                                <td>{{ $job->subjects }}</td>
                                <td>
                                    <a href="{{ asset('storage/' . $job->resume) }}" target="_blank">
                                        <i class="fas fa-file-download"></i>
                                    </a>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($job->created_at)->format('d-M-Y') }}</td>
                                <td>
                                    <form action="{{ route('admin.job.destroy', $job->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">No Jobs Applied</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $jobs->links() }}
        </div>
    </div>
@endsection
