@extends('layouts.admin')
@section('title')
    Create New Task
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Task List</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.task-given.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="task">Task:</label>
                <textarea style="border-radius: 20px;" class="form-control" rows="5" name="task" placeholder="Enter task details"></textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="admin_id">Admin:</label>
                <select required class="form-control" name="admin_id">
                    <option value="">Select Admin</option>
                    @foreach($admins as $admin)
                        <option value="{{$admin->id}}">{{$admin->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group font-weight-bold">
                <label for="file">File:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="file" placeholder="Enter Attached File">
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Add</button>

        </form>
    </div>
@endsection

