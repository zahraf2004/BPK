<div id="navbar-wrapper">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #92bce0;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img src="{{ asset('img/Logo-BPK.png') }}" alt="logo" height="45px">
                    <a class="navbar-brand" href="{{ url('/dashboard') }}"
                        style="color: #ffffff; margin-left: 30px; font-size:25px;">SiMail</a>
                </div>
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <form class="navbar-form navbar-left" role="search" style="margin-left: 20px">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"
                                        aria-hidden="true"></span></button>
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('img/flag.png') }}" alt="flag" width="28px" height="18px">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                <li>
                                    <a href="#">
                                        <img src="{{ asset('img/flag.png') }}" alt="flag" width="28px" height="18px">
                                        <span>Indonesia</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img
                                    src="{{ asset('img/foto.jpeg') }}" class="img-responsive img-thumbnail img-circle">
                                Username</a>
                            <ul class="dropdown-menu dropdown-block" role="menu">
                                <li><a href="#">Profil edition</a></li>
                                <li><a href="#">Admin</a></li>
                                <li>
                                    <!-- Form Logout -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>