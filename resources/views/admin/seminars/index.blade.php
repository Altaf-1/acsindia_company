@extends('layouts.admin')
@section('title')
Seminars
@endsection
@section('content')
@if($message = Session::get('success'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-start',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success',
        title: '{{$message}}'
    })
</script>
@endif
<h4>Seminars</h4>
<hr>
<div class="col-lg-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Upcoming Events</div>
                    <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{$datas->count()}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x" style="color:#fb78ff;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search -->
<form class="d-sm-inline-block form-inline mr-auto my-md-0 mw-100 navbar-search" action="{{route('admin.seminars.index',$type)}}" method="GET">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control border-2 small" name="search" placeholder="Search ..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

  <form action="{{ route('admin.seminars.delete', $type) }}" method="POST">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Delete All</button>
        </form>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Seminars</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>WhatsApp No</th>
                            <th>Qualification</th>
                            <th>City</th>
                            <!--<th>Solo Debate</th>-->
                            <!--<th>Quiz</th>-->
                            <th>Date and Time</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->whatsapp_no }}</td>
                                <td>{{ $data->qualification }}</td>
                                <td>{{ $data->city }}</td>
                                <!--  <td>{{ $data->solo_debate == 'on' ? 'Yes' : 'No' }}</td>-->
                                <!--<td>{{ $data->quiz == 'on' ? 'Yes' : 'No' }}</td>-->
                                <td>{{ $data->created_at }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">No datas found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection