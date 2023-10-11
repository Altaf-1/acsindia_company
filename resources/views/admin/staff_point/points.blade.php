@extends('layouts.admin')
@section('title')
    Staff Points
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
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Staff Point</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Staff ID</th>
                        <th>Total</th>
                        <th>Overall Performace</th>
                        <th>Print</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">

                    @forelse($datas as $data)
                        <tr>
                            <td>{{$data->staff_id}}</td>
                            <td>{{$data->total}}</td>
                            <td>{{$data->overall}}</td>
                            <td><a class="btn button btn-primary" target="_blank"
                                   href="{{route('admin.staff-point.show',$data->id)}}">Print</a></td>
                            <td><a class="btn button btn-success"
                                   href="{{route('admin.staff-point.edit',$data->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('admin.staff-point.delete', $data->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Data</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
