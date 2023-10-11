@extends('layouts.admin')
@section('title')
    Offline Exam Registration
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Offline Exam Registration</h6>
                </div>
                <div class="col-sm-12 col-lg-6 d-flex justify-content-end">
                    <form action="{{ route('admin.offline.exam.register.deleteAll') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i> Delete All
                        </button>
                    </form>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>WhatsApp No</th>
                            <th>City</th>
                            <th>State</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                        @forelse($datas as $test)
                            <tr>
                                <td><img src="{{ asset('storage/' . $test->image) }}" height="100px" alt=""></td>
                                <td>{{ $test->name }}</td>
                                <td>{{ $test->email }}</td>
                                <td>{{ $test->phone }}</td>
                                <td>{{ $test->whatsapp_no }}</td>
                                <td>{{ $test->city }}</td>
                                <td>{{ $test->state }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No Data found</td>
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
