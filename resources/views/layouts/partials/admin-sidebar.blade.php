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
                    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
                    </a>
                    <a href="{{route('trainings.index')}}" class="nav-item nav-link {{ Request::routeIs(['trainings.index', 'trainings.create', 'trainings.edit']) ? 'active' : '' }}">
                        <i class="fa fa-graduation-cap me-2"></i> Formations
                    </a>
                    <a href="{{route('modules.index')}}" class="nav-item nav-link {{ Request::routeIs(['modules.index', 'modules.create', 'modules.edit']) ? 'active' : '' }}">
                        <i class="fa fa-book-open me-2"></i> Modules
                    </a>
                    <a href="{{route('lessons.index')}}" class="nav-item nav-link {{ Request::routeIs(['lessons.index', 'lessons.create', 'lessons.edit']) ? 'active' : '' }}">
                        <i class="fa fa-layer-group me-2"></i> UE
                    </a>
                    <a href="{{route('recentsnews.index')}}" class="nav-item nav-link {{ Request::routeIs(['recentsnews.index', 'recentsnews.create', 'recentsnews.edit']) ? 'active' : '' }}">
                        <i class="fa fa-newspaper me-2"></i> Infos récentes
                    </a>
                    <a href="{{route('faqs.index')}}" class="nav-item nav-link {{ Request::routeIs(['faqs.index', 'faqs.create', 'faqs.edit']) ? 'active' : '' }}">
                        <i class="fa fa-question-circle me-2"></i> FAQs
                    </a>
                    <a href="{{route('announces.index')}}" class="nav-item nav-link {{ Request::routeIs(['announces.index', 'announces.create', 'announces.edit']) ? 'active' : '' }}">
                        <i class="fa fa-bullhorn me-2"></i> Annonces
                    </a>
                    <a href="{{route('testimonials.index')}}" class="nav-item nav-link {{ Request::routeIs(['testimonials.index', 'testimonials.create', 'testimonials.edit']) ? 'active' : '' }}">
                        <i class="fas fa-comment-dots me-2"></i> Témoignages
                    </a>
                    <a href="{{route('events.index')}}" class="nav-item nav-link {{ Request::routeIs(['events.index', 'events.create', 'events.edit']) ? 'active' : '' }}">
                        <i class="fa fa-calendar-alt me-2"></i> Évènements
                    </a>
                    <a href="{{route('galleries.index')}}" class="nav-item nav-link {{ Request::routeIs(['galleries.index', 'galleries.create', 'galleries.edit']) ? 'active' : '' }}">
                        <i class="fa fa-images me-2"></i> Galerie
                    </a>
                </div>
            </nav>
        </div>