@extends('layouts.admin')
@section('title')
    Events
@endsection
@section('content')

    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{route('admin.user.event')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search email..."
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
            <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Event Book Id</th>
                        <th>User Name</th>
                        <th>User Phone</th>
                        <th>User Email</th>
                        <th>User District</th>
                        <th>User State</th>
                        <th>Event Title</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($user_events as $event)
                        <tr>
                            <td>{{$event->id}}</td>
                            <td>{{\App\User::where('id',$event->user_id)->get()->first()->name}}</td>
                            <td>{{\App\User::where('id',$event->user_id)->get()->first()->phone}}</td>
                            <td>{{\App\User::where('id',$event->user_id)->get()->first()->email}}</td>
                            <td>{{\App\User::where('id',$event->user_id)->get()->first()->district}}</td>
                            <td>{{\App\User::where('id',$event->user_id)->get()->first()->state}}</td>
                            <td>{{\App\Event::where('id',$event->event_id)->get()->first()->title}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Event found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                                {{$user_events->links()}}
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
