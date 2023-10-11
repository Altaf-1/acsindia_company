@extends('layouts.admin')
@section('title')
    Prelims FAQ
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
    @elseif($message = Session::get('info'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'info',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif
    <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100"
        action="{{ route('admin.prelims.faq.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    Add
                </button>
            </div>
        </div>

    </form>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Prelims FAQ</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="data">

                        @forelse($prelims_faqs as $data)
                            <tr>
                                <td><img src="{{ asset('/storage/' . $data->image) }}" width="100" alt=""></td>
                                <td>
                                    <form action="{{ route('admin.prelims.faq.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">Delete</button>
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
                {{ $prelims_faqs->links() }}
            </div>
        </div>
    </div>
@endsection
