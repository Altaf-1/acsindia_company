@extends('layouts.admin')
@section('title')
Apsc Materials
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

@elseif ($message = Session::get('create'))
<script>
Swal.fire({
    position: 'center',
    icon: 'success',
    title: '{{$message}}',
    showConfirmButton: true,
})
</script>
@endif


<a class="btn button text-white" href="{{route('admin.apscall.create')}}"
    style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
    Create New
</a>
<hr>
<!-- DataTales Example -->
<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">APSC Courses</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Pdf</th>

                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody id="data">
                    @forelse($courses as $course)
                    <tr>
                        <td>{{$course->name}}</td>
                        <td><a href="{{asset('storage/'.$course->pdf)}}" class="btn btn-link">View</a></td>

                        <td><a class="btn btn-primary small" href="{{route('admin.apscall.edit',$course->id)}}">Edit</a>
                        </td>
                        <td>
                            <form action="{{route('apscall.destroy', $course->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">No material found</td>
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
    $("#data").load(location.href + " #data>*", "");
}, 10000);
</script>
@endsection