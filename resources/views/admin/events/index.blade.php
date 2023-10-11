@extends('layouts.admin')
@section('title')
    Events
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
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
          action="{{route('admin.event.index')}}" method="GET">
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
    @if(Auth::user()->role === 'super')
    <a class="btn button text-white" href="{{route('admin.event.create')}}" style="background: #fb770c;margin-top: -4px; "><i
            class="fas fa-user-edit"></i>
        Create New Event
    </a>
    @endif
    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Events</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Event Id</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Venue</th>
                        <th>View</th>
                        <th>Active/Inactive</th>
                        @if(Auth::user()->role === 'super')
                        <th>Edit</th>
                        @else
                        @endif
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($events as $event)
                        <tr>
                            <td>{{$event->id}}</td>
                            <td>{{$event->title}}</td>
                            <td>{{$event->date}}</td>
                            <td>{{$event->start_time}}</td>
                            <td>{{$event->end_time}}</td>
                            <td>{{$event->venue}}</td>
                            <td><a class="btn btn-primary small mr-2" href="{{route('admin.event.show',$event->slug)}}">View
                                    More Details
                                </a></td>
                            <td>
                                <form action="{{route('admin.event.isactive',$event->id)}}"
                                      method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary small">
                                        @if($event->status == 0)
                                            Make Active
                                        @else
                                            Make Inactive
                                        @endif
                                    </button>
                                </form>
                            </td>
                            @if(Auth::user()->role === 'super')
                            <td>
                                <a class="btn btn-primary small" href="{{route('admin.event.edit',$event->slug)}}">Edit
                                    <i class="fa fa-pencil-alt" aria-hidden="true"></i></a>
                            </td>
                            @else
                            @endif
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Events found</td>
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
