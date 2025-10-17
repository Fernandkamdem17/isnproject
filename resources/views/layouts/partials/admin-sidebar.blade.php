<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets/img/logo.jpg')}}" alt="" style="width: 50px; height: 50px;">                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0 text-secondary">ISNP</h6>
                        <span>Administration</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    @yield('content-sidebar')
                </div>
            </nav>
        </div>