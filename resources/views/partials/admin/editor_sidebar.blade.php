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
