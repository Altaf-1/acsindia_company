@extends('layouts.admin')
@section('title')
    New Quiz
@endsection

@section('links')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Question</h6>
    </div>
    <hr>
    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.testseriesquestion.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="test_series_quiz_id" value="{{ $quiz->id }}">
            <div class="form-group font-weight-bold">
                <label for="question">Question:</label>
                <Textarea id="editor1" required type="question" style="border-radius: 20px;" class="form-control" name="question"></Textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="option1">Oprion 1:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option1">
            </div>
            <div class="form-group font-weight-bold">
                <label for="option2">Option 2:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option2">
            </div>
            <div class="form-group font-weight-bold">
                <label for="option3">Option 3:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option3">
            </div>
            <div class="form-group font-weight-bold">
                <label for="option4">Option 4:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option4">
            </div>

            <div class="form-group font-weight-bold">
                <label for="correct_option">Correct Answer Option:</label>
                <Select name="correct_option" class="form-control col-2">
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                    <option value="option4">option4</option>
                </Select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="note">Note:</label>
                <Textarea type="note" style="border-radius: 20px;" class="form-control" name="note"></Textarea>
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Add</button>

        </form>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('editor1');
    </script>
@stop
