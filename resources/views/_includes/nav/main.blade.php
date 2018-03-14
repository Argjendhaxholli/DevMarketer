<nav class="navbar has-shadow">
  <div class="container is-fluid">
    <div class="tabs">
        <ul>
          <li>
            <a class="nav-item" href="{{route('home')}}">
              <img src="{{asset('images/devmarketer-logo.png')}}" alt="Devmarketer logo">
            </a>
          </li>
          <li class="is-active"><a>Learn</a></li>
          <li><a>Discuss</a></li>
          <li><a>Share</a></li>
        </ul>
    </div>
    <div class="navbar-end">
      @if(Auth::guest())
        <ul>
          <a href="{{route('login')}}" class="navbar-item">Login</a>
          <a href="{{route('register')}}" class="navbar-item">Join the Community</a>
        </ul>
      @else
        <div class="navbar-end navbar-item has-dropdow is-hoverable">
          <a class="navbar-link">
            Hey {{ Auth::user()->name }}
          </a>

          <div class="navbar-dropdown test">
            <a class="navbar-item" href="#">
              <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span> Profile
            </a>
            <a class="navbar-item" href="#">
              <span class="icon"><i class="fa fa-fw fa-bell"></i></span> Notifications
            </a>
            <a class="navbar-item" href="{{route('manage.dashboard')}}">
              <span class="icon"><i class="fa fa-fw fa-cog"></i></span> Manage
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form>
          </div>
      </div>
      @endif
    </div>
  </div>
</nav>
