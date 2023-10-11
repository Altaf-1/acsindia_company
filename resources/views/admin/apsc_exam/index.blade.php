@extends('layouts.admin')
@section('title')
    APSC EXAM
@endsection
@section('style')
@endsection
@section('content')
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <!-- Search -->
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
        action="{{ route('admin.apsc.exam.index') }}" method="GET">
        @csrf
        <div class="input-group d-flex align-items-center">
            <span class="mr-2 font-weight-bold">FILTER BY</span>
            <select name="class" class="form-control ">
                @if (Request::get('class'))
                    <option value="{{ Request::get('class') }}" selected>{{ Request::get('class') }}</option>
                @else
                    <option value="" selected>SELECT</option>
                    <option value="Offline Class">Offline Class</option>
                    <option value="Online Class">Online Class</option>
                @endif
                @if (Request::get('class') == 'Offline Class')
                    <option value="Online Class">Online Class</option>
                @elseif(Request::get('class') == 'Online Class')
                    <option value="Offline Class">Offline Class</option>
                @endif
            </select>
            <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search for..."
                value="{{ Request::get('searchUser') }}" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="col-lg-3 col-md-6 mb-4 mt-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total</div>
                        <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{ $datas->count() }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x" style="color:#fb78ff;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">APSC Exam</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Whatsapp Number</th>
                            <th>Class</th>
                            <th>Place</th>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->whatsAppNo }}</td>
                                <td>{{ $data->class }}</td>
                                <td>{{ $data->place }}</td>
                                <td><a target="_blank" href="{{ asset('storage/' . $data->profile) }}">View</a></td>
                                <td>
                                    <form action="{{ route('apsc.exam.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Courses found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
