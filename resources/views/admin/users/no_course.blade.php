@extends('layouts.admin')
@section('title')
    No Course Users
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
   <form class="d-sm-inline-block form-inline mr-auto my-md-0 mw-100 navbar-search"
          action="{{route('admin.course.user.nil')}}"
    >
        @csrf
        <div class="input-group">
           
            @if($month != 0)
                <input type="month" class="form-control border-2 small" name="month" value="{{$month}}"
                       aria-label="Search" aria-describedby="basic-addon2">
            @else
                <input type="month" class="form-control border-2 small" name="month"
                       aria-label="Search" aria-describedby="basic-addon2">
            @endif
             <input type="date" class="form-control border-2 small" name="date" value="{{$date}}"
                       aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">No Course Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                    <tr>
                        <th>User ID</th>
                        <th style="width:200px">Name</th>
                        <th  style="width:200px">Email</th>
                        <th>Phone</th>
                        <th>State</th>
                          <th>Date</th>
                    </tr>
                    </thead>
                    <tbody >
                    @forelse($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td style="max-width:100px">{{$user->name}}</td>
                            <td style="max-width:100px">{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->state}}</td>
                                 <td>{{$user->created_at}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No users found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection

<!--@section('scripts')-->
<!--    <script type="text/javascript">-->
<!--        setInterval(function() {-->
<!--            $("#data").load(location.href+" #data>*","");-->
<!--        }, 10000);-->
<!--    </script>-->
<!--@endsection-->
