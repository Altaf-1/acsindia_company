@extends('layouts.admin')
@section('title')
    Class Test
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Result</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.result.update', $result->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select id="cars" class="form-control"  name="course">
                    <option selected value="{{$result->course}}">{{$result->course}}</option>
                    @foreach($courses as $course)
                        <option value="{{$course->title}}">{{$course->title}}</option>
                    @endforeach
                    @foreach($apscs as $apsc)
                        <option value="{{$apsc->title}}">{{$apsc->title}}</option>
                    @endforeach
                        @foreach($studies as $study)
                        <option value="{{$study->title}}">{{$study->title}}</option>
                    @endforeach
                      @foreach($records as $record)
                            <option value="{{$record->title}}">{{$record->title}}</option>
                        @endforeach
                </select>
            </div>
             <div class="form-group font-weight-bold">
                <label for="date">Test Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="test_name" value="{{$result->test_name}}"
                       placeholder="test name">
            </div>
            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date" value="{{$result->date}}"
                       placeholder="email">
            </div>
            <div class="form-group font-weight-bold">
                <label for="rank">Rank:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="rank" value="{{$result->rank}}"
                       placeholder="Enter rank">
            </div>

            <div class="form-group font-weight-bold">
                <label for="percentage">Percentage :</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="percentage" value="{{$result->percentage}}"
                       placeholder="percentage">
            </div>

            <div class="form-group font-weight-bold">
                <label for="marks">Marks:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="marks" value="{{$result->marks}}"
                       placeholder="Enter marks">
            </div>

            <div class="form-group font-weight-bold">
                <label for="total_marks">Total Marks:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="total_marks" value="{{$result->total_marks}}"
                       placeholder="total marks">
            </div>

            <div class="form-group font-weight-bold">
                <label for="pdf">Pdf:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="pdf" 
                       placeholder="pdf">
            </div>
   <div class="form-group font-weight-bold">
            <label for="feedback">FeedBack:</label>
            <textarea class="form-control" name="feedback" cols="30" rows="10">{{$result->feedback}}</textarea>
        </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Edit</button>

        </form>
    </div>
@endsection

