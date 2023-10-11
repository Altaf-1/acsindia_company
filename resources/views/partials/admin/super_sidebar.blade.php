@if (route('admin.scholarships.mentoring.index', 1) == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.scholarships.mentoring.index', 1) }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Acs Scholarship Mentoring</span></a>
</li>
@if (route('admin.scholarships.mentoring.index', 2) == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.scholarships.mentoring.index', 2) }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Ghy Scholarship</span></a>
</li>
@if (route('admin.group.email.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.group.email.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Group Mail</span></a>
</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwoAssignment"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>HDFC Orders</span>
        </a>
        <div id="collapseTwoAssignment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.hdfc-orders.index', 'upsc') }}">UPSC </a>
                <a class="collapse-item" href="{{ route('admin.hdfc-orders.index', 'apsc') }}">APSC </a>
                <a class="collapse-item" href="{{ route('admin.hdfc-orders.index', 'recorded') }}">RECORDED </a>
                <a class="collapse-item" href="{{ route('admin.hdfc-orders.index', 'study') }}">STUDY
                    MATERIAL
                </a>
            </div>
        </div>
    </li>
@if (route('admin.interview.preparation.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.interview.preparation.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Interview Preparations</span></a>
</li>
@if (route('admin.free.trial.course.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.free.trial.course.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Free Trial Course</span></a>
</li>
@if (route('admin.testseriesquizroll.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.testseriesquizroll.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Test Series Quiz Roll</span></a>
</li>
@if (route('admin.personalmentor.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.personalmentor.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Personal Mentorship</span></a>
</li>
@if (route('admin.testseriesquizresultroll') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.testseriesquizresultroll') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Test Series Quiz Roll Result</span></a>
</li>

@if (route('admin.products.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.products.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Products Code</span></a>
</li>
@if (route('admin.products.orders.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.products.orders.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Products Orders</span></a>
</li>
@if (route('admin.free.master.class.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.free.master.class.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Free Master Class</span></a>
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
@if (route('admin.offline.exam.register.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.offline.exam.register.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>OFFLINE EXAM REGISTRATION</span></a>
</li>
@if (route('admin.onlineQuiz.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.onlineQuiz.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>APSC TEST 2023</span></a>
</li>

@if (route('admin.onlineQuizView') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.onlineQuizView') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>APSC TEST 2023 Result</span></a>
</li>
@if (route('admin.prelims.faq.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.prelims.faq.index') }}">
    <i class="fas fa-fw fa-event"></i>
    <span>Prelims FAQ</span></a>
</li>
@if (route('admin.testseriesquiz.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.testseriesquiz.index') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Test Series Quiz</span></a>
</li>
@if (route('admin.testseriesquizresult') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.testseriesquizresult') }}">
    <i class="fas fa-fw fa-pen-square"></i>
    <span>Test Series Quiz Result</span></a>
</li>
@if (route('admin.faculty_poll.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.faculty_poll.index') }}">
    <i class="fas fa-fw fa-question"></i>
    <span>faculty Poll</span></a>
</li>
@if (route('admin.faculty_user_poll.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
<a class="nav-link" href="{{ route('admin.faculty_user_poll.index') }}">
    <i class="fas fa-fw fa-question"></i>
    <span>faculty User Poll Result</span></a>
</li>
@if(route('admin.dailynews.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.dailynews.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Daily News</span></a>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwoAssignment" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>All Seminars</span>
    </a>
    <div id="collapseTwoAssignment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <!--<a class="collapse-item" href="{{route('admin.seminars.index','offline')}}">3 Sep Dibrugarh</a>-->
            <a class="collapse-item" href="{{route('admin.seminars.index','out')}}">3 Sep Dibrugarh</a>
            <!--<a class="collapse-item" href="{{route('admin.seminars.index','dibru')}}">27 may Dibrugarh Extra Link</a>-->
            <!--<a class="collapse-item" href="{{route('admin.seminars.index','ghy')}}">9 July Ghy </a>-->
        </div>
    </div>
</li>

@if(route('admin.apscall.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.apscall.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Assam Tribune</span></a>
</li>

@if(route('admin.eventdata.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.eventdata.index')}}">
        <i class="fas fa-fw fa-event"></i>
        <span>Event Data</span></a>
</li>
@if(route('admin.quiz.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.quiz.index')}}">
        <i class="fas fa-fw fa-pen-square"></i>
        <span>Quiz</span></a>
</li>

@if(route('admin.viewQuiz') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.viewQuiz')}}">
        <i class="fas fa-fw fa-pen-square"></i>
        <span>Quiz Result</span></a>
</li>



@if(route('admin.apscall.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.apscall.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>APSC ALL</span></a>
</li>

@if(route('admin.iasMockTest.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.iasMockTest.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Ias Mock Test</span></a>
</li>
@if(route('admin.dailynewsanalyse.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.dailynewsanalyse.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Daily News Analyse (Homepage)</span></a>
</li>
@if(route('admin.calculator') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.calculator')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Calculator</span></a>
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
    <a class="nav-link" href="{{route('admin.request.coupon.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Request For Coupons</span></a>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Video Ratings</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Type:</h6>
            <a class="collapse-item" href="{{route('admin.video-rating.index')}}">Old
                Videos</a>
            <a class="collapse-item" href="{{route('admin.video-rating-new.index')}}">New
                Videos</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="{{route('admin.admins.index')}}">
        <i class="fas fa-fw fa-user-shield"></i>
        <span>Admins</span></a>
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
@if (route('admin.referralcode.index') == URL::current())
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{ route('admin.referralcode.index') }}">
            <i class="fas fa-fw far fa-user"></i>
            <span>Referral Code</span></a>
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

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#task" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Admin Management</span>
    </a>
    <div id="task" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Task / Leave List:</h6>
            <a class="collapse-item" href="{{route('admin.task-given.index')}}">Task given</a>
            <a class="collapse-item" href="{{route('admin.task-complete.index')}}">Task Complete</a>
            <a class="collapse-item" href="{{route('admin.leave.index')}}">Leave Request</a>
            <a class="collapse-item" href="{{route('admin.daily-task.index')}}">Daily Request</a>
        </div>
    </div>
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
@if(route('admin.subjects.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.subjects.index')}}">
        <i class="fas fa-fw far fa-user"></i>
        <span>Additional Subjects</span></a>
</li>
@if(route('admin.chat-teachers.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.chat-teachers.index')}}">
        <i class="fas fa-fw far fa-user"></i>
        <span>Chat</span></a>
</li>
@if(route('admin.showresult.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.showresult.index')}}">
        <i class="fas fa-fw far fa-user"></i>
        <span>Show Result</span></a>
</li>
@if(route('admin.answers.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.answers.index')}}">
        <i class="fas fa-fw far fa-user"></i>
        <span>Answers</span></a>
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


@if(route('admin.event.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.event.index')}}">
        <i class="fas fa-fw fa-calendar-alt"></i>
        <span>Events</span></a>
</li>
@if(route('admin.course.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.course.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Courses</span></a>
</li>
@if(route('admin.user.event') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.user.event')}}">
        <i class="fas fa-fw fa-calendar-check"></i>
        <span>User Events</span></a>
</li>

@if(route('admin.user.course') == URL::current() )
<li class="nav-item active">
    @else

<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.user.course')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>User Course</span></a>
</li>
@if(route('admin.article.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.article.index')}}">
        <i class="fas fa-fw fa-question-circle"></i>
        <span>Articles</span></a>
</li>
@if(route('admin.notification.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.notification.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Notification</span></a>
</li>

@if(route('admin.usercoursedetail.index') == URL::current() || route('admin.usercoursedetail.apsc.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#usercoursedetails" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>User Course Details</span>
    </a>
    <div id="usercoursedetails" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">User
                Course Details:</h6>
            <a class="collapse-item" href="{{route('admin.usercoursedetail.index')}}">UPSC</a>
            <a class="collapse-item" href="{{route('admin.usercoursedetail.apsc.index')}}">APSC</a>
            <a class="collapse-item" href="{{route('admin.usercoursedetail.study.index')}}">Study</a>
            <a class="collapse-item" href="{{route('admin.usercoursedetail.recorded.index')}}">Recorded</a>
        </div>
    </div>
</li>

@if(route('admin.tracking.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.tracking.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Tracking Records</span></a>
</li>
@if(route('admin.video.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.video.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Class Video</span></a>
</li>
@if(route('admin.video.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.test.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Tests</span></a>
</li>

@if(route('admin.new_test.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.new_test.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>New Tests</span></a>
</li>


@if(route('admin.result.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.result.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Result</span></a>
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
    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Orders:</h6>
            <a class="collapse-item" href="{{route('admin.orders.create')}}">Created
                Orders</a>
            <a class="collapse-item" href="{{route('admin.orders.success')}}">Successfull
                Orders</a>
        </div>
    </div>
</li>

@if(route('admin.coupon.index') == URL::current() )
<li class="nav-item active">
    @else

<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.coupon.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Coupons</span></a>
</li>
@if(route('admin.queries.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.queries.index')}}">
        <i class="fas fa-fw fa-question-circle"></i>
        <span>Queries</span></a>
</li>
@if(route('admin.feedback.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.feedback.index')}}">
        <i class="fas fa-fw fa-question-circle"></i>
        <span>Feedback</span></a>
</li>
<!-- Divider -->
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
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Payment:</h6>
            <a class="collapse-item" href="{{route('admin.course_payment.pending')}}">Pending
                Payment</a>
            <a class="collapse-item" href="{{route('admin.course_payment.processed')}}">Processed
                Payment</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider d-none d-md-block">


<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwoBank" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>APSC Payments</span>
    </a>
    <div id="collapseTwoBank" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                APSC
                Payment:</h6>
            <a class="collapse-item" href="{{route('admin.apsc.course_payment.pending')}}">Pending
                Payment</a>
            <a class="collapse-item" href="{{route('admin.apsc.course_payment.processed')}}">Processed
                Payment</a>
        </div>
    </div>
</li>


@if(route('admin.apsccourses.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.apsccourses.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Do Not Touch</span></a>
</li>

@if(route('admin.user.apsc.course') == URL::current() )
<li class="nav-item active">
    @else

<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.user.apsc.course')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>APSC User Course</span></a>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>APSC Orders</span>
    </a>
    <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                APSC
                Orders:</h6>
            <a class="collapse-item" href="{{route('admin.apsc.orders.create')}}">Created
                Orders</a>
            <a class="collapse-item" href="{{route('admin.apsc.orders.success')}}">Successful
                Orders</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#Invoice" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Invoice</span>
    </a>
    <div id="Invoice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Invoice:</h6>
            <a class="collapse-item" href="{{route('admin.invoice.razorpay.index')}}">RazorPay</a>
            <a class="collapse-item" href="{{route('admin.invoice.bank.index')}}">Bank
                Transfer</a>
        </div>
    </div>
</li>

@if(route('admin.studymaterial.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.studymaterial.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Study Material</span></a>
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
    <a class="nav-link" href="{{route('admin.user.study.course')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Study Material Course user</span></a>
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
    <a class="nav-link" href="{{route('admin.recorded.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>Recorded Courses</span></a>
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

@if(route('admin.user.recorded.course') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.user.recorded.course')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>RECORDED Course user</span></a>
</li>

@if(route('admin.new_video.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.new_video.index')}}">
        <i class="fas fa-fw fa-book-reader"></i>
        <span>New Videos</span></a>
</li>


@if(route('admin.user-rating.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.user-rating.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>User Rating For Questions</span></a>
    </li>
    
    
@if(route('admin.poll.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.poll.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Polls</span></a>
    </li>
    
@if(route('admin.user-poll.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.user-poll.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>User Submitted Polls</span></a>
    </li>
    
    
@if(route('admin.user-webinar.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.user-webinar.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>User Webinar</span></a>
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
@if(route('admin.student.analysis.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link" href="{{route('admin.student.analysis.index')}}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Student Webinar Analysis</span></a>
    </li>
    
@if (route('admin.current.affairs.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
        <a class="nav-link" href="{{ route('admin.current.affairs.index') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Current Affairs</span></a>
    </li>
