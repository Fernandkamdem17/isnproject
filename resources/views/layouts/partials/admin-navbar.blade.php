            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                   <img src="{{('assets/img/logo.jpg')}}" alt="" style="height: 40px; width: 40px;">
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle" src="{{asset('assets/img/user.png')}}" alt="" style="width: 50px; height:auto">
                            <span class="d-none d-lg-inline-flex">{{Auth::user()->username}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0 shadow-lg">
                            <a href="#" class="dropdown-item text-secondary">Mon profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" class="dropdown-item text-secondary" value="Déconnexion">
                            </form>
                        </div>
                    </div>
                </div>
            </nav>