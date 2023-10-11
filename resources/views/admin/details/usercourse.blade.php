@extends('layouts.admin')
@section('title')
User Courses
@endsection
@section('content')
<script>
    function exportTableToExcel(tableID, filename = '') {

        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';
        // Create download link element
        downloadLink = document.createElement("a");
        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

            // Setting the file name
            downloadLink.download = filename;

            //triggering the function
            downloadLink.click();
        }
    }
</script>
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
@if ($message = Session::get('info'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'info',
        title: '{{$message}}',
        showConfirmButton: true,
    })
</script>
@endif
<!-- Search -->
<form class="d-sm-inline-block form-inline mr-auto my-md-0 mw-100 navbar-search"
      @if(route('admin.usercoursedetail.index')==URL::current() )
          action="{{route('admin.usercoursedetail.index')}}"
      @elseif(route('admin.usercoursedetail.apsc.index')==URL::current())
          action="{{route('admin.usercoursedetail.apsc.index')}}"
      @elseif(route('admin.usercoursedetail.recorded.index')==URL::current())
          action="{{route('admin.usercoursedetail.recorded.index')}}"
      @else action="{{route('admin.usercoursedetail.study.index')}}"
    @endif>
    @csrf
    <div class="input-group">
        <input type="text" class="form-control border-2 small" name="searchUser" placeholder="Search " aria-label="Search" aria-describedby="basic-addon2">
        @if($month != 0)
        <input type="month" class="form-control border-2 small" name="month" value="{{$month}}" aria-label="Search" aria-describedby="basic-addon2">
        @else
        <input type="month" class="form-control border-2 small" name="month" aria-label="Search" aria-describedby="basic-addon2">
        @endif
        <select class="form-control border-2 small" name="course" aria-label="Search" aria-describedby="basic-addon2">
            <option value="" selected>No Option</option>
            @foreach($courses as $course)
            <option value="{{$course->id}}">{{$course->title}}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<hr>

<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Total Students : {{ $total_users  }}
            @foreach($courses as $course)
                @if($course->id == request()->query('course'))
                    <h4>Course : <strong>{{$course->title}}</strong></h4>
                @endif
            @endforeach
        </h6>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4" id="usersTable">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-6">
                <h6 class="m-0 font-weight-bold btn text-primary">Courses</h6>
            </div>
            <div class="col-6 d-flex justify-content-end">

                @if(route('admin.usercoursedetail.index')==URL::current() )
                <a class="btn btn-primary" href="{{route('export.details.upsc')}}">Export </a>
                @elseif(route('admin.usercoursedetail.apsc.index')==URL::current())
                <a class="btn btn-primary" href="{{route('export.details.apsc')}}">Export </a>
                @elseif(route('admin.usercoursedetail.recorded.index')==URL::current())
                <a class="btn btn-primary" href="{{route('export.details.recorded')}}">Export </a>
                @else
                <a class="btn btn-primary" href="{{route('export.details.studyMaterial')}}">Export </a>
                @endif

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="usercourse" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Payment Mode</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Postal Address</th>
                        <th>Address Detail</th>
                        <th>Tracking Status</th>
                        <th>Invoice</th>
                        <th>Course Title</th>
                        <th>Purchased at</th>
                    </tr>
                </thead>
                <tbody id="data">
                    @forelse($user_courses as $enroll)
                    <tr>
                        @php
                            $user = App\User::whereId($enroll->user_id)->get()->first();
                        @endphp
                        @if($user)

                        <td>{{$user['name']}}</td>
                        <td>
                            {{$user['email']}} <br>

                            @if(route('admin.usercoursedetail.index') == URL::current() )
                                @php
                                    $userExtraMaterial = App\UserExtraMaterial::get_user_extra_material($enroll->user_id, 1, $enroll->course_id);
                                @endphp

                                @if($userExtraMaterial)
                                    @foreach($userExtraMaterial as $extraMaterial)
                                        @if($extraMaterial->extra_material_id == 1)
                                            <span class="badge badge-primary">Upsc Materials</span><br>
                                        @elseif($extraMaterial->extra_material_id == 2)
                                            <span class="badge badge-primary">No Materials</span><br>
                                        @endif
                                    @endforeach
                                @endif
                            @elseif(route('admin.usercoursedetail.apsc.index') == URL::current())
                                @php
                                    $userExtraMaterial = App\UserExtraMaterial::get_user_extra_material($enroll->user_id, 2, $enroll->apsc_courses_id);
                                @endphp

                                @if($userExtraMaterial)
                                    @foreach($userExtraMaterial as $extraMaterial)
                                        @if($extraMaterial->extra_material_id == 1)
                                            <span class="badge badge-primary">Upsc Materials</span><br>
                                        @elseif($extraMaterial->extra_material_id == 2)
                                                <span class="badge badge-primary">Apsc Materials</span><br>
                                        @elseif($extraMaterial->extra_material_id == 3)
                                            <span class="badge badge-primary">No Materials</span><br>
                                        @endif
                                    @endforeach
                                @endif
                            @endif

                        </td>
                        <td>{{$user['phone']}}</td>
                        <td>{{$user->getInvoiceData($enroll->user_id, $enroll->course )
                                ? $user->getInvoiceData($enroll->user_id, $enroll->course )->mode : ""}}</td>
                        <td>{{$user['district']}}</td>
                        <td>{{$user['state']}}</td>
                        <td>{{$user['postal']}}</td>
                        <td><a class="btn btn-primary small"
                                   target="_blank"
                                   href="{{route('admin.user-address-detail.show', $enroll->user_id)}}">View
                                </a>
                        </td>
                        @if(route('admin.usercoursedetail.index') == URL::current() )
                            <td>
                                @if(\App\Tracking::where('user_id', $enroll->user_id)->exists())
                                 {{\App\Tracking::where('user_id', $enroll->user_id)->first()->tracking_id}}
                                @else
                                <a class="btn btn-primary text-white" type="button" onclick='modal({{$enroll->user_id}},
                                 "{{\App\Course::where('id',$enroll->course_id)->get()->first()->title}}")'>Dispatch</a>
                                @endif
                            </td>
                            <td>
                                @if($user->getInvoiceData($enroll->user_id, $enroll->course ))
                                    <div class=" col-sm-2"><a
                                            href="{{route('user.order.invoice.show',
                                      $user->getInvoiceData($enroll->user_id, $enroll->course )->payment_id)}}"
                                            target="_blank"
                                            class="btn btn-primary text-white">
                                            Show Invoice</a></div>

                                @else
                                    <a class="btn btn-primary" href="{{route('admin.upsc.razor-invoice',
                                     [$enroll->user_id, $enroll->course_id])}}">
                                        Invoice</a>
                                @endif
                            </td>

                        @elseif(route('admin.usercoursedetail.apsc.index') == URL::current())
                        <td>
                            @if(\App\Tracking::where('user_id', $enroll->user_id)->exists())
                                {{\App\Tracking::where('user_id', $enroll->user_id)->first()->tracking_id}}
                            @else
                            <a class="btn btn-primary text-white" type="button" onclick="modal({{$enroll->user_id, \App\ApscCourses::where('id',$enroll->apsc_courses_id)->get()->first()->title}})">Dispatch</a>
                            @endif
                        </td>
                        <td>
                            @if($user->getInvoiceData($enroll->user_id, $enroll->course ))
                                <div class=" col-sm-2"><a
                                        href="{{route('user.order.invoice.show',
                                  $user->getInvoiceData($enroll->user_id, $enroll->course )->payment_id)}}"
                                        target="_blank"
                                        class="btn btn-primary text-white">
                                        Show Invoice</a></div>

                            @else
                            <a class="btn btn-primary" href="{{route('admin.apsc.razor-invoice',
                                  [$enroll->user_id, $enroll->apsc_courses_id])}}">
                                Invoice
                            </a>
                            @endif

                        </td>

                        @elseif(route('admin.usercoursedetail.recorded.index') == URL::current())
                        <td>
                            @if(\App\Tracking::where('user_id', $enroll->user_id)->exists())
                                {{\App\Tracking::where('user_id', $enroll->user_id)->first()->tracking_id}}
                            @else
                            <a class="btn btn-primary text-white" type="button"
                               onclick="modal({{$enroll->user_id,
                                   \App\Recorded::where('id',$enroll->recorded_id)->get()->first()->title}})">Dispatch</a>
                            @endif
                        </td>
                        <td>
                            @if($user->getInvoiceData($enroll->user_id, $enroll->course ))
                                <div class=" col-sm-2"><a
                                        href="{{route('user.order.invoice.show',
                                  $user->getInvoiceData($enroll->user_id, $enroll->course )->payment_id)}}"
                                        target="_blank"
                                        class="btn btn-primary text-white">
                                        Show Invoice</a></div>

                            @else
                            <a class="btn btn-primary" href="{{route('admin.recorded.razor-invoice',
                                   [$enroll->user_id, $enroll->recorded_id])}}">
                                Invoice
                            </a>
                            @endif
                        </td>

                        @else
                        <td>
                            @if(\App\Tracking::where('user_id', $enroll->user_id)->exists())
                                {{\App\Tracking::where('user_id', $enroll->user_id)->first()->tracking_id}}
                            @else
                            <a class="btn btn-primary text-white" type="button" onclick="modal({{$enroll->user_id,\App\StudyMaterial::where('id',$enroll->study_material_id)->get()->first()->title}})">Dispatch</a>
                            @endif
                        </td>
                        <td>
                            @if($user->getInvoiceData($enroll->user_id, $enroll->course ))
                                <div class=" col-sm-2"><a
                                        href="{{route('user.order.invoice.show',
                                  $user->getInvoiceData($enroll->user_id, $enroll->course )->payment_id)}}"
                                        target="_blank"
                                        class="btn btn-primary text-white">
                                        Show Invoice</a></div>

                            @else
                            <a class="btn btn-primary" href="{{route('admin.study.razor-invoice',
                                    [$enroll->user_id, $enroll->study_material_id])}}">
                                Invoice
                            </a>
                            @endif
                        </td>
                        @endif

                        @if(route('admin.usercoursedetail.index') == URL::current() )
                        <td>{{\App\Course::where('id',$enroll->course_id)->get()->first()->title}}</td>
                        @elseif(route('admin.usercoursedetail.apsc.index') == URL::current())
                        <td>{{\App\ApscCourses::where('id',$enroll->apsc_courses_id)->get()->first()->title}}</td>
                        @elseif(route('admin.usercoursedetail.recorded.index') == URL::current())
                        <td>{{\App\Recorded::where('id',$enroll->recorded_id)->get()->first()->title}}</td>
                        @else
                        <td>{{\App\StudyMaterial::where('id',$enroll->study_material_id)->get()->first()->title}}</td>
                        @endif
                        <td>{{$enroll->created_at}}</td>
                        @endif
                    </tr>

                    @empty
                    <tr>
                        <td colspan="6">No User found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{$user_courses->appends(['searchUser'=>Request::get('searchUser'),'month'=>Request::get('month'),'course'=>Request::get('course')])->links()}}
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function modal(userId, courseTitle) {

        Swal.fire({
            title: 'Enter Tracking Id',
            html: '<div class="card m-2">\n ' +
                '<form class="p-3" action="{{route('admin.tracking.store')}}" method="POST">\n ' +
            '@csrf()\n' +
            '<input style="border-radius: 20px;" class="form-control" name="tracking_id" placeholder="Tracking Id" type="text"><br>\n ' +
            `<input type="hidden" name="user_id" value=${userId}>` +
            `<textarea name="course_title" style="display:none">${courseTitle}</textarea>` +
            '<button type="submit" class="btn btn-primary">Submit</button>\n ' +
            '</form>\n ' +
            '</div>',
            width: 800,
            showConfirmButton: false,
            showCancelButton: true,
        })
    }
</script>
@endsection
