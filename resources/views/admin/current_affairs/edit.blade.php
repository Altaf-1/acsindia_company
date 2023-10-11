@extends('layouts.admin')
@section('title')
    Current Affair Create
@endsection

@section('links')

    <link href="{{asset('css/form.css')}}" rel="stylesheet">

@endsection
@section('style')
    <style>
        .header {
            position: absolute;
            top: -14px;
            left: 1%;
            padding: 0% 2px;
            margin: 0%;
            background: white!important;
        }

        .borderdiv {
            position: relative;
            padding: 32px;
            border-radius: 10px;
            border: 2px solid #75b3e2;
            margin-top: 2rem;
        }

    </style>
@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Current Affair <br>
            <span class="text-uppercase font-weight-bolder" style="font-size: large">{{$current_affair->title}}</span>
        </h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.current.affairs.update', $current_affair->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group font-weight-bold">
                <label for="title">Title:</label>
                <input type="text" style="border-radius: 20px;" class="form-control"
                       value="{{$current_affair->title}}"
                       name="title" placeholder="Enter Title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="long_title">Long Title:</label>
                <input type="text" style="border-radius: 20px;"
                       class="form-control"
                          value="{{$current_affair->long_title}}"
                       name="long_title" placeholder="Enter Long Title">
            </div>

            <div class="form-group font-weight-bold">
                <label for="content">Current Affair Content:</label>
                <textarea name="content" id="editor1" style="border-radius: 20px;" class="form-control" placeholder="Enter content" >
                    {{$current_affair->content}}
                </textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="image">Upload Thumbnail: </label>
                <input type="file" class="form-control" name="image">
            </div>

            <div class="form-group font-weight-bold">
                <label for="year">Year: </label>
                <input type="text"
                       value="{{$current_affair->year}}"
                       class="form-control" name="year">
            </div>

            <div class="form-group font-weight-bold">
                <label for="type">Type: </label>
                <select name="type" id="type" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="current_affair" {{$current_affair->type == 'current_affair' ? 'selected' : ''}}>Current Affairs</option>
                    <option value="article" {{$current_affair->type == 'article' ? 'selected' : ''}}>Article</option>
                    <option value="assam_current_affair" {{$current_affair->type == 'assam_current_affair' ? 'selected' : ''}}>Assam Current Affairs</option>
                </select>



            <br>
            <button class="btn button text-white" style="background: #fb770c"type="submit">Update</button>

        </form>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('editor1');
    </script>
@stop

