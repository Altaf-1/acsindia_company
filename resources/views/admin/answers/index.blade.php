@extends('layouts.admin')
@section('title')
    Answers
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

    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.answers.index')}}"
          method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search for..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <a class="btn button text-white" href="{{route('admin.answers.create')}}"
       style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New Answer
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-1">
                    <h6 class="m-0 font-weight-bold text-primary">Answers</h6>
                </div>
                <div class="col-4">
                    <form action="{{route('admin.answers.unique')}}" method="post">
                        @csrf
                        <select style="border-radius: 20px; padding: 5px" name="course">
                            @if($select ?? '')
                                <option selected value="{{$select ?? ''}}">{{$select ?? ''}}</option>
                            @endif
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
                        <button class="btn btn-primary" style="padding: 3px" type="submit">GO</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Course</th>
                        <th>Test Name</th>
                        <th>Date</th>
                        <th>Pdf</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($tests as $test)
                        <tr>
                            <td>{{$test->course}}</td>
                            <td>{{$test->test_name}}</td>
                            <td>{{$test->date}}</td>
                            <td><a href="{{$test->pdf}}">Link</a></td>
                            <td><a class="btn btn-primary small"
                                   href="{{route('admin.answers.edit', $test->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('answers.destroy', $test->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Courses found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
             
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    
@endsection
