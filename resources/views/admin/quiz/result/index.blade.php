@extends('layouts.admin')
@section('title')
quizs
@endsection
@section('style')
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
<!-- DataTales Example -->
<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6 class="m-0 font-weight-bold text-primary ">Quiz</h6>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="{{route('export.quiz.result')}}" class="btn btn-outline-primary  float-right">Export</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Email</th>
                        <th>UIN</th>
                        <th>Quiz</th>
                        <th>Course</th>
                        <th>Correct</th>
                        <th>Wrong</th>
                        <th>Total</th>
                        <th>View Result</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="data">
                    @forelse($datas as $data)
                    <tr>
                        <td>{{$data->user->name}}</td>
                        <td>{{$data->user->email}}</td>
                        <td>{{'ACS-'.$data->user->id}}</td>
                        <td>{{$data->quiz->quiz_name}}</td>
                        <td>{{$data->course_name}}</td>
                        <td>{{$data->correct_answers}}</td>
                        <td>{{$data->wrong_answers}}</td>
                        <td>{{$data->total_mark}}</td>
                        <td><a class="btn btn-info small" href="{{route('quiz.result.view', ['id'=>$data->quiz_id,'user_id'=>$data->user_id])}}">View</a>
                        </td>
                        <td>
                            <form action="{{route('quizresult.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10">No Data found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection