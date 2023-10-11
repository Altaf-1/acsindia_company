@extends('layouts.admin')
@section('title')
    Courses
@endsection
@section('content')

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif



    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-2">
                    <h6 class="m-0 font-weight-bold text-primary">Leave Request List</h6>
                </div>
                <div class="col-lg-6">
                    <form action="{{route('admin.leave.filter')}}" method="POST">
                        @csrf
                        <label class="form-group font-weight-bold">
                            <select required class="form-control" name="admin_id">
                                <option value="">Select Admin</option>
                                @foreach($admins as $admin)
                                    <option value="{{$admin->id}}">{{$admin->name}}</option>
                                @endforeach
                            </select>
                        </label>
                        <label>
                            <button class="btn btn-primary" type="submit">Filter</button>
                        </label>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Leave Id</th>
                        <th>Reason</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Attached file</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($leaves as $leave)
                        <tr>
                            <td>{{$leave->id}}</td>
                            <td>{{$leave->reason}}</td>
                            <td>{{\App\User::findOrFail($leave->admin_id)->name}}</td>
                            <td>{{\App\User::findOrFail($leave->admin_id)->phone}}</td>
                            <td>@if($leave->file)
                                    <a href="{{asset('storage/'.$leave->file)}}" target="_blank">Download File</a>
                                @else
                                    No Document
                                @endif</td>
                            <td>
                                @if($leave->status == 0)
                                    Pending
                                @elseif($leave->status == 2)
                                    Reject
                                @else
                                    Complete
                                @endif
                            </td>
                            <td class="text-center"> @if($leave->status == 0)
                                    <form action="{{route('admin.leave.action', $leave->id)}}" method="POST">
                                        @csrf
                                        <select name="status">
                                            <option value="1">Complete</option>
                                            <option value="2">Reject</option>
                                        </select>
                                        <button class="btn btn-primary" type="submit">Go</button>
                                    </form>
                                @elseif($leave->status == 2)
                                    <i class="fa fa-times-circle"
                                       style="color: red"></i>
                                @else
                                    <i class="fa fa-check-circle"
                                       style="color: greenyellow"></i>
                                @endif
                            </td>
                            <td>{{$leave->created_at}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Leave found<a class="btn-primary btn" href="{{route('admin.leave.index')}}">Show ALl</a></td>
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
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
