@extends('layouts.admin')
@section('title')
    Referral Code
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
                      action="{{route('admin.referralcode.index')}}" method="post">

                    @csrf
                    <div class="input-group">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

    <a class="btn button text-white" href="{{route('admin.referralcode.create')}}" style="background: #fb770c;margin-top: -4px;"><i class="fas fa-user-edit"></i>
        Create New Referral Code
    </a>

                <hr>
                <!-- DataTales Example -->
                <div class="card shadow mb-4" id="usersTable">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                         Referral Codes
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>User name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Referral Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="data">
                                @forelse($referral_codes as $referral_code)
                                    <tr>
                                        <td>{{$referral_code->user->name}}</td>
                                        <td>{{$referral_code->user->email}}</td>
                                        <td>{{$referral_code->user->phone}}</td>
                                        <td>{{$referral_code->refer_code}}</td>
                                        <td>
                                            @if($referral_code->status == 0)
                                                <span class="badge badge-success">Un-Applied</span>
                                            @else
                                                <span class="badge badge-danger">Applied</span>
                                            @endif
                                        </td>
                                        @if(Auth::user()->role === 'super')
                                            <td><a class="btn btn-primary small"
                                                   href="{{route('admin.referralcode.edit',$referral_code->id)}}">Edit
                                                </a><i class="fa fa-pencil-square" aria-hidden="true"></i>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">No Referral Codes</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        @endsection
