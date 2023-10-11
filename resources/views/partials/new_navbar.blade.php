<header id="header">
    <header id="header" class="header style-04 header-dark fixed-top bg-white">
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-nav">
                    <div class="container">
                        <div class="kobolg-menu-wapper"></div>
                        <div class="header-nav-inner">
                            <div data-items="8"
                                class="vertical-wrapper block-nav-category has-vertical-menu show-button-all">
                                <div>
                                    <span><a href="{{asset('/')}}"><img src="{{asset('img/log1.jpg')}}" alt="logo"
                                                width="190"></a></span>
                                </div>
                            </div><!-- block category -->
                            <div class="box-header-nav menu-nocenter">
                                <ul id="menu-primary-menu"
                                    class="clone-main-menu kobolg-clone-mobile-menu kobolg-nav main-menu pt-2">

                                    <li id="menu-item-229"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <div class="dropdown">
                                            <a href="{{asset('/upsc')}}" class="btn dropbtn"
                                                style="font-family: 'Righteous';">HOME <spam><i class="fa fa-caret-down"
                                                        aria-hidden="true"></i></spam></a>
                                            <div class="dropdown-content">
                                                <a href="{{asset('/aboutus')}}">About Us</a>
                                                <a href="{{asset('/contact')}}">Contact
                                                    Us</a>
                                                <a href="{{asset('/apply-job')}}">Apply
                                                    Job</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-230"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <div class="dropdown">
                                            <a href="{{asset('/upsc')}}" class="btn dropbtn"
                                                style="font-family: 'Righteous';">UPSC <spam><i class="fa fa-caret-down"
                                                        aria-hidden="true"></i></spam></a>
                                            <div class="dropdown-content">
                                                <a href="{{asset('/course')}}">Online
                                                    Courses</a>
                                                <a href="{{asset('/current_affairs_2023')}}">Current
                                                    Affairs</a>
                                                <a href="{{asset('/syllabus')}}">UPSC Syllabus</a>
                                                <a href="{{asset('/previous')}}">UPSC
                                                    Previous Year Question
                                                    Paper</a>
                                                <a href="{{asset('/digipedia')}}">NCERT
                                                    Books</a>

                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-228"
                                        class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <div class="dropdown">
                                            <a href="{{asset('/apsc')}}" class="btn dropbtn"
                                                style="font-family: 'Righteous';">APSC <spam><i class="fa fa-caret-down"
                                                        aria-hidden="true"></i></spam></a>
                                            <div class="dropdown-content">
                                                <a href="{{asset('/apsc/courses')}}">APSC
                                                    Online Courses</a>
                                                <a href="{{asset('/current_affairs_2023')}}">Current
                                                    Affairs</a>
                                                <a href="{{asset('/syllabus')}}">APSC
                                                    Syllabus</a>
                                                <a href="{{asset('/previous')}}">APSC
                                                    Previous Year Question
                                                    Paper</a>
                                                <a href="{{asset('/digipedia')}}">NCERT
                                                    Books</a>

                                            </div>
                                        </div>
                                    </li>
                                    <li id="menu-item-238"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-238">
                                        @auth
                                        <div class="dropdown">
                                            <a class="btn dropbtn text-white"
                                                style="background-color: #e52e06; font-family: 'Righteous';">{{ Auth::user()->name }}
                                                <spam><i class="fa fa-caret-down" aria-hidden="true"></i></spam>
                                            </a>
                                            <div class="dropdown-content">
                                                <a href="{{ route('user.show', Auth::user()->id) }}">
                                                    My Courses
                                                </a>
                                                <a href="{{ route('order.index') }}">My Orders</a>
                                                @if(Auth::user()->role == 'super')
                                                <a href="{{ route('admin.index') }}">Admin Panel</a>
                                                @endif
                                                @if(Auth::user()->role == 'admin')
                                                <a href="{{ route('admin.index') }}">Admin Panel</a>
                                                @endif
                                                <a href="https://acsindiaias.com/current-affair/current_affair"
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                        @else
                                        <a class="kobolg-menu-item-title"
                                            style="color: azure; background-color: #e52e06; line-height: 20px; font-family: 'Righteous'; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; margin: 7px; border-radius: 20px;"
                                            title="Elements" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                        @if (Route::has('register'))
                                        <a class="kobolg-menu-item-title"
                                            style="color: azure; background-color: #e52e06; line-height: 20px; font-family: 'Righteous'; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; margin: 7px; border-radius: 20px;"
                                            title="Elements" href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                                        @endif
                                        @endauth
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--MObile Navbar-->
    </header>
</header>