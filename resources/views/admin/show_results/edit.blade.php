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
        <form action="{{ route('admin.showresult.update', $result->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group font-weight-bold">
                <label for="course">Course Title:</label>
                <select class="form-control" name="course">
                    <option value="{{$result->course}}" selected>{{$result->course}}</option>
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
                <label for="name">Student Name:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="name"
                       placeholder="name" required value="{{$result->name}}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="state">State</label>
                <select id="state" type="text" class="form-control " name="state" placeholder="Select State" required>
                    <option value="{{$result->state}}">{{$result->state}}</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>

            </div>
            <div class="form-group font-weight-bold">
                <label for="percentage">Percentage:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="percentage"
                       placeholder="Example:90%" required value="{{$result->percentage}}">
            </div>

            <div class="form-group font-weight-bold">
                <label for="rank">Rank:</label>
                <input type="text" style="border-radius: 20px;" class="form-control" name="rank"
                       placeholder="Enter rank" required value="{{$result->rank}}">
            </div>
            <div class="form-group font-weight-bold">
                <img src="{{asset('storage/'.$result->image)}}" alt="" style="height: 300px; width: 300px; object-fit: cover;">
            </div>
            <div class="form-group font-weight-bold">
                <label for="image">Student Photo:</label>
                <input type="file" style="border-radius: 20px;" class="form-control" name="image"
                       placeholder="name" >
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Edit</button>

        </form>
    </div>
@endsection

