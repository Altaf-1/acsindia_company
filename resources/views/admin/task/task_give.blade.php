@extends('layouts.admin')
@section('title')
    Task Given
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

    <a class="btn button text-white" href="{{route('admin.task-given.create')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create Task
    </a>


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-2">
                    <h6 class="m-0 font-weight-bold text-primary">Task List</h6>
                </div>
                <div class="col-lg-6">
                    <form action="{{route('admin.task-given.filter')}}" method="POST">
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
                        <th>Task Id</th>
                        <th>Admin Name</th>
                        <th>Task</th>
                        <th>Attached file</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{\App\User::findOrFail($task->admin_id)->name}}</td>
                            <td>{{$task->task}}</td>
                            <td>@if($task->file)
                                <a href="{{asset('storage/'.$task->file)}}" target="_blank">Download File</a>
                                @else
                                No Document
                                    @endif
                            </td>
                            <td>
                                @if($task->status == 0)
                                    Pending
                                @else
                                    <i class="fa fa-check-circle"
                                       style="color: greenyellow"></i>
                                @endif
                            </td>
                            <td>
                                @if($task->status == 0)
                                    <a class="btn btn-primary" href="{{route('admin.task-given.edit', $task->id)}}">Edit</a>
                                @else
                                   Task Completed
                                @endif
                            </td>
                            <td>
                                @if($task->status == 0)
                                    <form action="{{route('admin.task-given.delete', $task->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning" style="background-color: red" type="submit">Delete</button>
                                    </form>
                                @else
                                    Task Completed
                                @endif
                            </td>
                            <td>{{$task->created_at}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Task found<a class="btn-primary btn" href="{{route('admin.task-given.index')}}">Show ALl</a></td>
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
