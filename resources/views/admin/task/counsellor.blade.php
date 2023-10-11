@extends('layouts.admin')
@section('title')
    Courses
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


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-lg-2">
                    <h6 class="m-0 font-weight-bold text-primary">Counsellor List</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Feedback</th>
                        <th>Number</th>
                        <th>Follow Up Date</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($values as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->number}}</td>
                            <td>{{$value->feedback}}</td>
                            <td>{{$value->follow}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Counsellor data found
                                <a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
