@extends('layouts.admin')
@section('title')
Ias Mock Test
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
<div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Students</div>
                        <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{\App\IasMockTest::all()->count('id')}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x" style="color:#fb78ff;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Datas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>State</th>
                        <th>Have you appeared in the IAS Exam earlier?</th>
                        <th>If yes, have you cleared the prelims earlier?</th>
                        <!-- <th>Delete</th> -->
                    </tr>
                </thead>
                <tbody id="data">
                    @forelse($datas as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->state}}</td>
                        <td>{{$data->appeared_IAS_Exam_earlier}}</td>
                        <td>{{$data->cleared_prelims_earlier}}</td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="9">No New Datas</td>
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