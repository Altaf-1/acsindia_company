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
        <form action="{{ route('admin.result.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select id="course" class="form-control" name="course">
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
                <input type="text" style="border-radius: 20px;" class="form-control" name="test_name"
                       placeholder="test name">
            </div>
            <div class="form-group font-weight-bold">
                <label for="date">Date:</label>
                <input type="date" style="border-radius: 20px;" class="form-control" name="date"
                       placeholder="date">
            </div>
            <div class="form-group font-weight-bold">
                <label for="date">User email:</label>
                <input type="email" style="border-radius: 20px;" class="form-control" name="email"
                       placeholder="email"  onmousedown="this.value='';" onchange="getUser(this.value);">
            </div>

            <div class="form-group font-weight-bold">
                <label for="date">Phone No:</label>
                <input id="phone" type="text" style="border-radius: 20px;" class="form-control" name="phone"
                       placeholder="Enter phone">
            </div>

            <div class="form-group font-weight-bold">
                <label for="rank">Rank:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="rank"
                       placeholder="Enter rank">
            </div>

            <div class="form-group font-weight-bold">
                <label for="percentage">Percentage :</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="percentage"
                       placeholder="percentage">
            </div>

            <div class="form-group font-weight-bold">
                <label for="marks">Marks:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="marks"
                       placeholder="Enter marks">
            </div>

            <div class="form-group font-weight-bold">
                <label for="total_marks">Total Marks:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="total_marks"
                       placeholder="total marks">
            </div>

            <div class="form-group font-weight-bold">
                <label for="pdf">Pdf:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="pdf"
                       placeholder="pdf">
            </div>
     <div class="form-group font-weight-bold">
            <label for="feedback">FeedBack:</label>
            <textarea class="form-control" name="feedback" cols="30" rows="10"></textarea>
        </div>

            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

        function getUser(email){
            axios.get(`https://www.acsindiaias.com/api/getUserCourse/${email}`)
                .then(result => {
                    document.getElementById('course').value = result.data[0];
                    document.getElementById('phone').value = result.data[1];
                    console.log(result.data);
                })
                .catch(err => {
                    console.log(err);
                })
        }
    </script>
@endsection

