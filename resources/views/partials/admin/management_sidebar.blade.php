@if (route('admin.scholarships.mentoring.index', 2) == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.scholarships.mentoring.index', 2) }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Ghy Scholarship</span></a>
</li>

@if (route('admin.apsc.exam.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.apsc.exam.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>APSC EXAM</span></a>
</li>
@if(route('admin.job.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.job.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>User Applied Jobs</span></a>
    </li>
    
<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwoAssignment" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Assignments</span>
    </a>
    <div id="collapseTwoAssignment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.assignments.index')}}">Create Assignments</a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','upsc')}}">UPSC </a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','apsc')}}">APSC </a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','recorded')}}">RECORDED </a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','study material')}}">STUDY MATERIAL </a>
        </div>
    </div>
</li>

@if(route('admin.request.coupon.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link"
           href="{{route('admin.request.coupon.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Request For Coupons</span></a>
    </li>
     @if(route('admin.users.index') == URL::current() )
        <li class="nav-item active">
    @else
        <li class="nav-item">
            @endif
            <a class="nav-link" href="{{route('admin.users.index')}}">
                <i class="fas fa-fw far fa-user"></i>
                <span>Users</span></a>
        </li>

        @if(route('admin.course.user.nil') == URL::current() )
            <li class="nav-item active">
        @else
            <li class="nav-item">
                @endif
                <a class="nav-link" href="{{route('admin.course.user.nil')}}">
                    <i class="fas fa-fw fa-question-circle"></i>
                    <span>No Course User</span></a>
            </li>
    <li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwoGuwahatioffice" data-toggle="collapse" data-target="#collapseTwoGuwahatioffice" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Office Management (Guwahati)</span>
    </a>
    <div id="collapseTwoGuwahatioffice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Office Management:</h6>
            <a class="collapse-item" href="{{route('admin.admissionenquiries.index','guwahati')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Admission Enquiries</span></a>
            <a class="collapse-item" href="{{route('admin.entercourse.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Enter Course</span></a>
            <a class="collapse-item" href="{{route('admin.studentAdmission.index','guwahati')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Student Admission</span></a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwoAssignment" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>All Seminars</span>
    </a>
    <div id="collapseTwoAssignment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.seminars.index','offline')}}">14 may Dibrugarh</a>
            <a class="collapse-item" href="{{route('admin.seminars.index','out')}}">27 may Dibrugarh</a>
            <a class="collapse-item" href="{{route('admin.seminars.index','dibru')}}">27 may Dibrugarh Extra Link</a>
            <a class="collapse-item" href="{{route('admin.seminars.index','ghy')}}">9 July Ghy </a>
        </div>
    </div>
</li>

   <li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo3212office" data-toggle="collapse" data-target="#collapseTwo3212office" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Office Management (Dibrugarh)</span>
    </a>
    <div id="collapseTwo3212office" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Office Management:</h6>
            <a class="collapse-item" href="{{route('admin.admissionenquiries.index','dibrugarh')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Admission Enquiries</span></a>
            <a class="collapse-item" href="{{route('admin.entercourse.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Enter Course</span></a>
            <a class="collapse-item" href="{{route('admin.studentAdmission.index','dibrugarh')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Student Admission</span></a>
            <a class="collapse-item" href="{{route('admin.staffInformation.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Staff Information</span></a>
            <a class="collapse-item" href="{{route('admin.staff-income.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Staff Income</span></a>
            <a class="collapse-item" href="{{route('admin.staff-point.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Staff Points</span></a>
            <a class="collapse-item" href="{{route('admin.student-admission-payment.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Student Payment</span></a>
        </div>
    </div>
</li>
@if(route('admin.payment-installment-add.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.payment-installment-add.index')}}">
            <i class="fas fa-fw fa-question-circle"></i>
            <span>Installment Users</span>
        </a>
    </li>

<li class="nav-item">
    <a class="nav-link collapsed"
       href="#collapseTwo"
       data-toggle="collapse"
       data-target="#collapseTwo6"
       aria-expanded="true"
       aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Installments</span>
    </a>
    <div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Installments:</h6>
            <a class="collapse-item" href="{{route('admin.payment-installments.index')}}">Pending
                Installments</a>
        </div>
    </div>
</li>
   

            @if(route('admin.usercoursedetail.index') == URL::current() || route('admin.usercoursedetail.apsc.index') == URL::current() )
                <li class="nav-item active">
            @else
                <li class="nav-item">
                    @endif
                    <a class="nav-link collapsed"
                       href="#collapseTwo"
                       data-toggle="collapse"
                       data-target="#usercoursedetails"
                       aria-expanded="true"
                       aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>User Course Details</span>
                    </a>
                    <div id="usercoursedetails" class="collapse"
                         aria-labelledby="headingTwo"
                         data-parent="#accordionSidebar">
                        <div
                            class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">User
                                Course Details:</h6>
                            <a class="collapse-item"
                               href="{{route('admin.usercoursedetail.index')}}">UPSC</a>
                            <a class="collapse-item"
                               href="{{route('admin.usercoursedetail.apsc.index')}}">APSC</a>
                            <a class="collapse-item"
                               href="{{route('admin.usercoursedetail.study.index')}}">Study</a>
                            <a class="collapse-item"
                               href="{{route('admin.usercoursedetail.recorded.index')}}">Recorded</a>
                        </div>
                    </div>
                </li>
                           @if(route('admin.tracking.index') == URL::current() )
                    <li class="nav-item active">
                @else
                    <li class="nav-item">
                        @endif
                        <a class="nav-link"
                           href="{{route('admin.tracking.index')}}">
                            <i class="fas fa-fw fa-book-reader"></i>
                            <span>Tracking Records</span></a>
                    </li>
                @if(route('admin.coupon.index') == URL::current() )
                    <li class="nav-item active">
                @else

                    <li class="nav-item">
                        @endif
                        <a class="nav-link"
                           href="{{route('admin.coupon.index')}}">
                            <i class="fas fa-fw fa-book-reader"></i>
                            <span>Coupons</span></a>
                    </li>
                    @if(route('admin.queries.index') == URL::current() )
                        <li class="nav-item active">
                    @else
                        <li class="nav-item">
                            @endif
                            <a class="nav-link"
                               href="{{route('admin.queries.index')}}">
                                <i class="fas fa-fw fa-question-circle"></i>
                                <span>Queries</span></a>
                        </li>
                        @if(route('admin.feedback.index') == URL::current() )
                            <li class="nav-item active">
                        @else
                            <li class="nav-item">
                                @endif
                                <a class="nav-link"
                                   href="{{route('admin.feedback.index')}}">
                                    <i class="fas fa-fw fa-question-circle"></i>
                                    <span>Feedback</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed"
                                   href="#collapseTwo"
                                   data-toggle="collapse"
                                   data-target="#Invoice"
                                   aria-expanded="true"
                                   aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Invoice</span>
                                </a>
                                <div
                                    id="Invoice"
                                    class="collapse"
                                    aria-labelledby="headingTwo"
                                    data-parent="#accordionSidebar">
                                    <div
                                        class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">
                                            Invoice:</h6>
                                        <a class="collapse-item"
                                           href="{{route('admin.invoice.razorpay.index')}}">RazorPay</a>
                                        <a class="collapse-item"
                                           href="{{route('admin.invoice.bank.index')}}">Bank
                                            Transfer</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed"
                                   href="#collapseTwo"
                                   data-toggle="collapse"
                                   data-target="#collapseTwo1"
                                   aria-expanded="true"
                                   aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Orders</span>
                                </a>
                                <div id="collapseTwo1"
                                     class="collapse"
                                     aria-labelledby="headingTwo"
                                     data-parent="#accordionSidebar">
                                    <div
                                        class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">
                                            Orders:</h6>
                                        <a class="collapse-item"
                                           href="{{route('admin.orders.create')}}">Created
                                            Orders</a>
                                        <a class="collapse-item"
                                           href="{{route('admin.orders.success')}}">Successfull
                                            Orders</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed"
                                   href="#collapseTwo"
                                   data-toggle="collapse"
                                   data-target="#collapseTwo"
                                   aria-expanded="true"
                                   aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>Payments</span>
                                </a>
                                <div
                                    id="collapseTwo"
                                    class="collapse"
                                    aria-labelledby="headingTwo"
                                    data-parent="#accordionSidebar">
                                    <div
                                        class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">
                                            Payment:</h6>
                                        <a class="collapse-item"
                                           href="{{route('admin.course_payment.pending')}}">Pending
                                            Payment</a>
                                        <a class="collapse-item"
                                           href="{{route('admin.course_payment.processed')}}">Processed
                                            Payment</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed"
                                   href="#collapseTwo"
                                   data-toggle="collapse"
                                   data-target="#collapseTwo3"
                                   aria-expanded="true"
                                   aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>APSC Orders</span>
                                </a>
                                <div
                                    id="collapseTwo3"
                                    class="collapse"
                                    aria-labelledby="headingTwo"
                                    data-parent="#accordionSidebar">
                                    <div
                                        class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">
                                            APSC
                                            Orders:</h6>
                                        <a class="collapse-item"
                                           href="{{route('admin.apsc.orders.create')}}">Created
                                            Orders</a>
                                        <a class="collapse-item"
                                           href="{{route('admin.apsc.orders.success')}}">Successful
                                            Orders</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed"
                                   href="#collapseTwo"
                                   data-toggle="collapse"
                                   data-target="#collapseTwoBank"
                                   aria-expanded="true"
                                   aria-controls="collapseTwo">
                                    <i class="fas fa-fw fa-cog"></i>
                                    <span>APSC Payments</span>
                                </a>
                                <div
                                    id="collapseTwoBank"
                                    class="collapse"
                                    aria-labelledby="headingTwo"
                                    data-parent="#accordionSidebar">
                                    <div
                                        class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">
                                            APSC
                                            Payment:</h6>
                                        <a class="collapse-item"
                                           href="{{route('admin.apsc.course_payment.pending')}}">Pending
                                            Payment</a>
                                        <a class="collapse-item"
                                           href="{{route('admin.apsc.course_payment.processed')}}">Processed
                                            Payment</a>
                                    </div>
                                </div>
                            </li>
                            @if(route('admin.studymaterial.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo12" data-toggle="collapse" data-target="#collapseTwoBank12" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Study Material Payments</span>
    </a>
    <div id="collapseTwoBank12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Study
                Material
                Payment:</h6>
            <a class="collapse-item" href="{{route('admin.studymaterial.course_payment.pending')}}">Pending
                Payment</a>
            <a class="collapse-item" href="{{route('admin.studymaterial.course_payment.processed')}}">Processed
                Payment</a>
        </div>
    </div>
</li>

@if(route('admin.user.study.course') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo321" data-toggle="collapse" data-target="#collapseTwo321" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Study Orders</span>
    </a>
    <div id="collapseTwo321" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Study
                Orders:</h6>
            <a class="collapse-item" href="{{route('admin.study.orders.create')}}">Created
                Orders</a>
            <a class="collapse-item" href="{{route('admin.study.orders.success')}}">Successful
                Orders</a>
        </div>
    </div>
</li>
@if(route('admin.recorded.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo1211" data-toggle="collapse" data-target="#collapseTwo1211" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>RECORDED Payments</span>
    </a>
    <div id="collapseTwo1211" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                RECORDED
                Payment:</h6>
            <a class="collapse-item" href="{{route('admin.recorded.course_payment.pending')}}">Pending
                Payment</a>
            <a class="collapse-item" href="{{route('admin.recorded.course_payment.processed')}}">Processed
                Payment</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo3212" data-toggle="collapse" data-target="#collapseTwo3212" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>RECORDED Orders</span>
    </a>
    <div id="collapseTwo3212" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Study
                Orders:</h6>
            <a class="collapse-item" href="{{route('admin.recorded.orders.create')}}">Created
                Orders</a>
            <a class="collapse-item" href="{{route('admin.recorded.orders.success')}}">Successful
                Orders</a>
        </div>
    </div>
</li>
<hr/>
@if(route('admin.user-webinar.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.user-webinar.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>User Webinar</span></a>
    </li>

@if(route('admin.student.analysis.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.student.analysis.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Student Webinar Analysis</span></a>
    </li>