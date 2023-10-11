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
    </li>    @if(route('admin.article.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
        @endif
        <a class="nav-link"
           href="{{route('admin.article.index')}}">
            <i class="fas fa-fw fa-question-circle"></i>
            <span>Articles</span></a>
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
<h4 class="text-white text-decoration-underline text-center mb-2 mt-2">Offline Class</h4>
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