@extends('layouts.admin')
@section('title')
    User Ratings For Questions
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

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users Ratings on Questions</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Coupon Code</th>
                        <th>Question 1</th>
                        <th>Question 2</th>
                        <th>Opinion</th>
                        <th>Question 3</th>
                        <th>Question 4</th>
                        <th>Opinion</th>
                        <th>Question 5</th>
                        <th>Question 6</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($ratings as $rating)
                        <tr>
                            <td>{{$rating->name}}</td>
                            <td>{{$rating->email}}</td>
                            <td>{{$rating->phone}}</td>
                            <td>{{$rating->coupon($rating->coupon_id)}}</td>
                            <td>{{$rating->thought}}</td>
                            <td>{{$rating->news}}</td>
                            <td>{{$rating->news_message}}</td>
                            <td>{{$rating->preparation}}</td>
                            <td>{{$rating->coaching}}</td>
                            <td>{{$rating->preparation_message}}</td>
                            <td>{{$rating->join}}</td>
                            <td>{{$rating->interest}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No users ratings found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $ratings->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
@endsection
