@extends('layouts.admin')
@section('title')
    Feedbacks
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
            <h6 class="m-0 font-weight-bold text-primary">Feedbacks</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Rating</th>
                        <th>Feedback</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($feedbacks as $feedback)
                        <tr>
                            <td>{{$feedback->user_id}}</td>
                            <td>{{$feedback->name}}</td>
                            <td>{{$feedback->email}}</td>
                            <td>{{$feedback->phone}}</td>
                            <td>{{$feedback->rating}}</td>
                            <td>{{$feedback->feedback}}</td>
                            <td>
                                <form action="{{route('admin.feedback.destroy', $feedback->id)}}" method="post">
                                        @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No New Feedbackfound</td>
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
        setInterval(function () {
            $("#data").load(location.href + " #data>*", "");
        }, 10000);
    </script>
@endsection
