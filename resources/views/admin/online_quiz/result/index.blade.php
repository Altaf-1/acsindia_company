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
            <!--<div class="col-sm-12 col-md-6">-->
            <!--    <a href="{{route('export.quiz.result')}}" class="btn btn-outline-primary  float-right">Export</a>-->
            <!--</div>-->
        </div>
    </div>
      <div class="col-lg-3 col-md-6 mb-4 mt-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total</div>
                            <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{ $datas->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x" style="color:#fb78ff;"></i>
                        </div>
                    </div>
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
                        <th>Total</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody id="data">
                    @forelse($datas as $data)
                    <tr>
                        <td>{{$data->user->name}}</td>
                        <td>{{$data->user->email}}</td>
                        <td>{{'ACS-'.$data->user->id}}</td>
                        <td>{{$data->online_quiz->quiz_name}}</td>
                        <td>{{$data->course_name}}</td>
                        <td>{{$data->total_mark}}</td>
                        <td>
                            <form action="{{route('onlineQuizresult.destroy', $data->id)}}" method="POST">
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