<header class="home-header" id="home-topbar">
    <div class="container">
        <div class="navbar-wrapper">
            <div class="navbar-content">
                <div class="navbar-leftside">
                    <div class="nav-logo">
                        <a href="/">
                            <img src="{{ asset('assets-frontend/home-image/logo-group.png') }}" alt="Ramgong_eTender">
                        </a>
                    </div>
                </div>
                <div class="navbar-rightside">
                  <ul>
                        @auth
                            @if(auth()->user()->role_id === 2)
                                <li><a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                            @elseif(auth()->user()->role_id === 3)
                                <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                            @endif
                        @else
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
