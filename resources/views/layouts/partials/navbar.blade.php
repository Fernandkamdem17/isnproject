   <!-- Bandeau d'annonces fixe -->
    <div class="announcement-bar bg-primary text-white py-2 sticky-top-top" id="announcementBar">
        <div class="container-fluid">
            <div class="marquee-wrapper overflow-hidden position-relative">
                <div class="marquee d-flex">
                    @if ($recentsnews!=null && count($recentsnews)>0)
                        @foreach ($recentsnews as $recentsnew)
                            <span class="me-5">{{$recentsnew->title}}</span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @yield('navbar')
