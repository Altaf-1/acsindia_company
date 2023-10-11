@extends('layouts.admin')
@section('title')
    User Webinars
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
          action="{{route('admin.user-webinar.search')}}"
          method="GET">
        @csrf
        <div class="input-group">
            <select class="form-control border-0 small" required name="webinar" id="Select Webinar">
                <option value="">Select Webinar </option>
                @foreach($webinars as $webinar)
                    <option value="{{$webinar}}">{{$webinar}}</option>
                @endforeach
            </select>
            <input type="text"
                   class="form-control border-2 small"
                   name="state"
                   placeholder="State ..."
                   aria-label="Search"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <hr>
    <div class="row">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Webinar : {{$selected_webinar}}</h6>
            <h6 class="m-0 font-weight-bold text-primary">State : {{$state ?? ''}}</h6>
        </div>
        <!-- Events Card -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Webinar Total</div>
                            <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{$total_webinar}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x" style="color:#fb78ff;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Admission</div>
                            <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{$total_admission}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa >fa fa-users fa-2x" style="color:green;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">No Admission</div>
                            <div id="eventCount"
                                 class="h5 mb-0 font-weight-bold text-gray-800">{{$total_webinar - $total_admission}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x" style="color:#fb78ff;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Counsellors</h6>
        </div>
        <!-- Events Card -->

        @foreach(\App\UserWebinarCounsellor::get_counsellor_data() as $counsellor)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Webinar Total</div>
                            <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">{{$counsellor->name}}</div>
                            <div id="eventCount" class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$counsellor->get_user_webinar_data($counsellor->counsellor_id, $selected_webinar, $state)->count()}}
                            </div>
                            <div class="mt-2">
                                <form action="{{route('admin.user-webinar.students.show')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="counsellor_id" value="{{$counsellor->counsellor_id}}">
                                    <input type="hidden" name="webinar" value="{{$selected_webinar}}">
                                    <input type="hidden" name="state" value="{{$state}}">
                                    <button type="submit" class="btn btn-info">Show</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x" style="color:#fb78ff;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

