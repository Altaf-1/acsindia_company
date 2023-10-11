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
<hr>

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
<hr>
@if(route('admin.apscall.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.apscall.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Assam Tribune</span></a>
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
@if(route('admin.dailynews.index') == URL::current() )
    <li class="nav-item active">
@else
    <li class="nav-item">
        @endif
        <a class="nav-link"
           href="{{route('admin.dailynews.index')}}">
            <i class="fas fa-fw fa-bell"></i>
            <span>Daily News</span></a>
    </li>
    @if(route('admin.dailynewsanalyse.index') == URL::current() )
        <li class="nav-item active">
    @else
        <li class="nav-item">
            @endif
            <a class="nav-link"
               href="{{route('admin.dailynewsanalyse.index')}}">
                <i class="fas fa-fw fa-bell"></i>
                <span>Daily News Analyse (Homepage)</span></a>
        </li>
    <li class="nav-item">
        <a class="nav-link collapsed"
           href="#collapseTwo"
           data-toggle="collapse"
           data-target="#collapseTwoAssignment"
           aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Assignments</span>
        </a>
        <div id="collapseTwoAssignment" class="collapse"
             aria-labelledby="headingTwo"
             data-parent="#accordionSidebar">
            <div
                class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item"
                   href="{{route('admin.assignments.index')}}">Create Assignments</a>
                <a class="collapse-item" href="{{route('admin.assignments.submission','upsc')}}">UPSC </a>
                <a class="collapse-item" href="{{route('admin.assignments.submission','apsc')}}">APSC </a>
                <a class="collapse-item" href="{{route('admin.assignments.submission','recorded')}}">RECORDED </a>
                <a class="collapse-item" href="{{route('admin.assignments.submission','study material')}}">STUDY MATERIAL </a>
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
                @if(route('admin.notification.index') == URL::current() )
                    <li class="nav-item active">
                @else
                    <li class="nav-item">
                        @endif
                        <a class="nav-link"
                           href="{{route('admin.notification.index')}}">
                            <i class="fas fa-fw fa-bell"></i>
                            <span>Notification</span></a>
                    </li>
                    @if(route('admin.article.index') == URL::current() )
                        <li class="nav-item active">
                    @else
                        <li class="nav-item">
                            @endif
                            <a class="nav-link"
                               href="{{route('admin.article.index')}}">
                                <i class="fas fa-fw fa-question-circle"></i>
                                <span>Articles</span></a>
                        </li>
                        @if(route('admin.result.index') == URL::current() )
                            <li class="nav-item active">
                        @else
                            <li class="nav-item">
                                @endif
                                <a class="nav-link"
                                   href="{{route('admin.result.index')}}">
                                    <i class="fas fa-fw fa-book-reader"></i>
                                    <span>Result</span></a>
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
                                @if(route('admin.video.index') == URL::current() )
            <li class="nav-item active">
        @else
            <li class="nav-item">
                @endif
                <a class="nav-link"
                   href="{{route('admin.video.index')}}">
                    <i class="fas fa-fw fa-book-reader"></i>
                    <span>Class Video</span></a>
            </li>
            @if(route('admin.new_video.index') == URL::current() )
                <li class="nav-item active">
            @else
                <li class="nav-item">
                    @endif
                    <a class="nav-link"
                       href="{{route('admin.new_video.index')}}">
                        <i class="fas fa-fw fa-book-reader"></i>
                        <span>New Videos</span></a>
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