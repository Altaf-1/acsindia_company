

<nav class="navbar navbar-default navbar-expand-lg " id="navigation" data-offset-top="0">

    <div class="container-fluid" style="background-color: #134982;">

        <div class="navbar-header">
            <div class="navbar-brand">
            <img src="{{asset("comimages/icons/log1.JPG")}}" style="width: 250px; height: 200px; border-radius: 22px; " alt="">
            </div>

        </div>

        <div class="burger-icon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="nav navbar-nav ml-auto text-center active">
              
                <li class="subnav">
                    <a href="{{route('home')}}" class="">Home</a>
                </li>
                @if(route('root')==URL::current() || route('home')==URL::current())
                    <li><a href="#apsc">Apsc</a></li>
                    <li><a href="#Events">Seminar/Webinar</a></li>
                    <li><a href="#con">Contact</a></li>

                @endif
                <li class="subnav header-cta">
                
                @auth
                    <!-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-black-50" href="{{ route('user.show', Auth::user()->id) }}">
                                My Courses
                            </a>
                            <a class="dropdown-item text-black-50" href="{{ route('order.index') }}">
                                My Orders
                            </a>
                            @if(Auth::user()->role == 'super')
                                <a class="dropdown-item text-black-50" href="{{ route('admin.index') }}">
                                    Admin Panel
                                </a>
                            @endif
  @if(Auth::user()->role == 'admin')
                                <a class="dropdown-item text-black-50" href="{{ route('admin.index') }}">
                                    Admin Panel
                                </a>
                            @endif
                            <a class="dropdown-item text-black-50" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li> -->
                @else
                    <li class="nav-item">
                        <a class="nav-link btn p-1 pl-4 pr-4 mt-2" style="background-color: #d99032;"
                           href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn p-1 pl-4 pr-4 mt-2" style="background-color: #d99032"
                               href="{{ route('register') }}">{{ __('SIGN UP') }}</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>

    </div>

</nav>

