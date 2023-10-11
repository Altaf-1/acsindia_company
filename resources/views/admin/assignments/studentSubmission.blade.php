@extends('layouts.admin')
@section('title')
    {{ strtoupper($course) }} Assignments
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="{{ route('admin.assignments.submission', $course) }}" method="GET">
        @csrf
        <div class="input-group">
            <select name="search" class="form-control border-2 small">
                @foreach ($courses as $cr)
                    <option value="{{ $cr }}">{{ $cr }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $search }} Assignments</h6>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Title</th>
                            <th>User</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>File</th>
                            <th>Score</th>
                            <th>Result</th>
                            <th>FeedBack</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->course }}</td>
                                <td>{{ $data->assignment->title }}</td>
                                <td>{{ $data->user->name }}</td>
                                <td>{{ $data->user->email }}</td>
                                <td>{{ $data->user->phone }}</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d-M-Y') }}</td>
                                <td>
                                    @if ($data->pdf != null)
                                        <a href="{{ asset('storage/' . $data->pdf) }}" target="_blank">File</a>
                                    @else
                                        No File Attached
                                    @endif
                                </td>
                                <td>
                                    @if ($data->score)
                                        {{ $data->score }}
                                    @else
                                        <a href="{{ route('admin.assignments.createScore', [$data->id, $course]) }}"
                                            class="btn btn-info">Add Score</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($data->result)
                                        <a href="{{ route('admin.assignments.createResult', [$data->id, $course]) }}"
                                            class="btn btn-info">Edit Result</a>
                                        <a href="{{ asset('storage/' . $data->result) }}" class="mt-3 btn btn-info"
                                            target="_blank">File</a>
                                    @else
                                        <a href="{{ route('admin.assignments.createResult', [$data->id, $course]) }}"
                                            class="btn btn-info">Add Result</a>
                                    @endif
                                </td>
                                <td>
                                    @if ($data->feedback)
                                        <a href="{{ route('admin.assignments.createFeedback', [$data->id, $course]) }}"
                                            class="btn btn-info">Edit Feedback</a>
                                    @else
                                        <a href="{{ route('admin.assignments.createFeedback', [$data->id, $course]) }}"
                                            class="btn btn-info">Add Feedback</a>
                                    @endif
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
<!--
{{-- @section('scripts') --}}

{{-- <script type="text/javascript"> --}}
{{-- setInterval(function() { --}}
{{-- $("#data").load(location.href+" #data>*",""); --}}
{{-- }, 10000); --}}
{{-- </script> --}}
{{-- @endsection --}} -->
