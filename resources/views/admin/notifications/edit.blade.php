@extends('layouts.admin')
@section('title')
    Edit Notification
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Notification</h6>
    </div>
    <hr>

    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.notification.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select id="cars" class="form-control" name="course">
                    <option selected value="{{$data->course}}">{{$data->course}}</option>
                    @foreach($courses as $course)
                        <option value="{{$course->title}}">{{$course->title}}</option>
                    @endforeach
                    @foreach($apscs as $apsc)
                        <option value="{{$apsc->title}}">{{$apsc->title}}</option>
                    @endforeach
                    @foreach($records as $record)
                        <option value="{{$record->title}}">{{$record->title}}</option>
                    @endforeach
                    @foreach($studies as $study)
                        <option value="{{$study->title}}">{{$study->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group font-weight-bold">
                <label for="title">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" value="{{$data->title}}"
                       name="title" placeholder="Enter title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control"
                       value="{{date("Y-m-d", strtotime($data->date))}}" name="date" placeholder="Enter date">
            </div>
            <div class="form-group font-weight-bold">
                <label for="pdf">Pdf Link:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" value="{{$data->pdf}}" name="pdf"
                       >
            </div>


            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection

