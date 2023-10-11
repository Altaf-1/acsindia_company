@extends('layouts.admin')
@section('title')
    Edit quiz
@endsection

@section('links')

    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

@endsection
@section('content')

    <div class="py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Quiz</h6>
    </div>
    <hr>

    <div class="container emp-profile mt-3">
        <form action="{{ route('admin.onlineQuizquestion.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <input type="hidden" name="online_quiz_id" value="{{ $data->online_quiz_id }}">
            <div class="form-group font-weight-bold">
                <label for="question">Question:</label>
                <Textarea id="editor1" required type="question" style="border-radius: 20px;" class="form-control" name="question">{{ $data->question }}</Textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="option1">Oprion 1:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option1"
                    value="{{ $data->option1 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="explanation1">explanation:</label>
                <Textarea id="explanation1" type="question" style="border-radius: 20px;" class="form-control" name="explanation1">{{ $data->explanation1 }}</Textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="option2">Option 2:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option2"
                    value="{{ $data->option2 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="explanation2">explanation:</label>
                <Textarea id="explanation2" type="question" style="border-radius: 20px;" class="form-control" name="explanation2">{{ $data->explanation2 }}</Textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="option3">Option 3:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option3"
                    value="{{ $data->option3 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="explanation3">explanation:</label>
                <Textarea id="explanation3" type="question" style="border-radius: 20px;" class="form-control" name="explanation3">{{ $data->explanation3 }}</Textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="option4">Option 4:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="option4"
                    value="{{ $data->option4 }}">
            </div>
            <div class="form-group font-weight-bold">
                <label for="explanation4">explanation:</label>
                <Textarea id="explanation4" type="question" style="border-radius: 20px;" class="form-control" name="explanation4">{{ $data->explanation4 }}</Textarea>
            </div>

            <div class="form-group font-weight-bold">
                <label for="correct_option">Correct Answer Option:</label>
                <Select name="correct_option" class="form-control col-2">
                    <option
                        @if ($data->correct_option === $data->option1) value="option1" 
                    @elseif($data->correct_option === $data->option2)
                        value="option2" 
                    @elseif($data->correct_option === $data->option3)
                        value="option3" 
                    @else
                        value="option4" @endif
                        selected>{{ $data->correct_option }}</option>
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                    <option value="option4">option4</option>
                </Select>
            </div>
            <div class="form-group font-weight-bold">
                <label for="note">Note:</label>
                <Textarea type="note" style="border-radius: 20px;" class="form-control" name="note">{{ $data->note }}</Textarea>
            </div>
            <div class="form-group font-weight-bold">
                <label for="point">Point:</label>
                <input required type="text" style="border-radius: 20px;" class="form-control" name="point"
                    value="{{ $data->point }}">
            </div>
            <br>
            <button class="btn button text-white" style="background: #fb770c" type="submit">Update</button>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('editor1');
    </script>
@stop
