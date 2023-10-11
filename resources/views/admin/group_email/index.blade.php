@extends('layouts.admin')
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


    @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ $message }}',
                showConfirmButton: true,
            })
        </script>
    @endif <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                <h1>Group Emails</h1>
                <a href="{{ route('admin.group.email.create') }}" type="button" class="btn btn-outline-success">Add Group
                    Email</a>

            </div>
            <div class="row mt-2">
                <div class="col-xl-12 col-lg-12">
                    <div class="ec-cat-list card card-default">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="responsive-data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Sl No.</th>
                                            <th>Mail To</th>
                                            <th>Subject</th>
                                            <th>Body</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $data->course }}</td>
                                                <td>{{ $data->subject }}</td>
                                                <td>{!! $data->email_body !!}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <form action="{{ route('admin.group.email.destroy', $data->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@stop
