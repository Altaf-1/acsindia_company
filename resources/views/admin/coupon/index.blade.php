@extends('layouts.admin')
@section('title')
    Coupons
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
    <form class="d-sm-inline-block form-inline mr-auto  my-md-0 mw-100 navbar-search" action="{{route('admin.coupon.index')}}" method="GET">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control border-2 small" name="coupon" placeholder="Search for..."
                   aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form><br><br>
        <a class="btn button text-white"
           href="{{route('admin.coupon.create')}}"
           style="background: #fb770c;margin-top: -4px;">
            <i class="fas fa-user-edit"></i>
            Create New Coupons
        </a>
        <a class="btn button text-white"
           href="{{route('admin.coupon.bulk_coupon_create')}}"
           style="background: #fb770c;margin-top: -4px;">
            <i class="fas fa-user-edit"></i>
            Bulk Create Coupons
        </a>
        <a class="btn button text-white"
           href="{{route('admin.coupon.bulk_coupon_delete')}}"
           style="background: #fb770c;margin-top: -4px;">
            <i class="fas fa-remove"></i>
            Bulk Delete Coupons
        </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Coupons</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Coupon Id</th>
                        <th>Coupon Code</th>
                        <th>Coupon Discount</th>
                        <th>User Mail</th>
                        <th>User Phone no</th>
                        <th>Applied</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <!--<th>Send</th>-->
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($coupons as $coupon)
                        <tr>
                            <td>{{$coupon->id}}</td>
                            <td>{{$coupon->coupon_code}}</td>
                            <td>{{$coupon->coupon_discount}}</td>
                            <td>{{$coupon->email}}</td>
                            <td>{{$coupon->phone}}</td>
                            <td>
                                @if($coupon->applied == 0)
                                    Not applied
                                @else
                                    Applied
                                @endif
                            </td>
                            <td>
                                @if($coupon->status == 0)
                                    Not active
                                @else
                                    Active
                                @endif
                            </td>
                            <td><a class="btn btn-primary small" href="{{route('admin.coupon.edit',$coupon->id)}}">Deactivate</a>
                            <!--</td>-->
                            <!--                            <td><a class="btn btn-primary small" href="{{route('admin.coupon.send',$coupon->id)}}">Send</a></td>-->

                            <td>
                                <form action="{{route('coupon.destroy', $coupon->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary small"  type="submit">DELETE</button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No Coupons found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $coupons->links() }}
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
