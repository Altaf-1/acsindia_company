
@if(route('admin.users.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.users.index')}}">
        <i class="fas fa-fw far fa-user"></i>
        <span>Users</span></a>
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

@if (route('admin.current.affairs.index') == URL::current())
    <li class="nav-item active">
    @else
    <li class="nav-item">
@endif
        <a class="nav-link" href="{{ route('admin.current.affairs.index') }}">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Current Affairs</span></a>
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

@if(route('admin.dailynewsanalyse.index') == URL::current() )
<li class="nav-item active">
    @else
<li class="nav-item">
    @endif
    <a class="nav-link" href="{{route('admin.dailynewsanalyse.index')}}">
        <i class="fas fa-fw fa-bell"></i>
        <span>Daily News Analyse (Homepage)</span></a>
</li>
    

