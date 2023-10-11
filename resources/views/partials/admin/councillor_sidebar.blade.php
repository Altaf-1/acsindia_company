@if(route('admin.users.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.users.index')}}">
            <i class="fas fa-fw far fa-user"></i>
            <span>Users</span></a>
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
