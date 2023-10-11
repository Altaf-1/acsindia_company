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
<a class="btn btn-outline-primary" href="{{route('admin.quiz.index')}}" style="margin-top: -4px;"><i class="fas fa-arrow-circle-left"></i>
    Quiz</a>
<a class="btn button text-white" href="{{route('admin.question.create',$quiz->id)}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
    Create Question</a>

<br><br>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-12">
                <h6 class="m-0 font-weight-bold text-primary ">{{$quiz->quiz_name}}</h6>
                <h6 class="m-0 font-weight-bold text-primary ">Questions</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Questions</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="data">
                    @forelse($datas as $data)
                    <tr>
                        <td>{!!$data->question!!}</td>
                        <td><a class="btn btn-primary small" href="{{route('admin.question.edit', $data->id)}}">Edit</a></td>
                        <td>
                            <form action="{{route('question.destroy', $data->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">No Data found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection