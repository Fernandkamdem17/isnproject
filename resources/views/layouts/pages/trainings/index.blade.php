
@extends('admin')
@section('title')
    Trainings
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    <a href="{{route('admin.trainings.index')}}" class="nav-item nav-link active">
        <i class="fa fa-graduation-cap me-2"></i> Formations
    </a>
    <a href="{{route('admin.modules.index')}}" class="nav-item nav-link">
        <i class="fa fa-book-open me-2"></i> Modules
    </a>
    <a href="{{route('admin.ues.index')}}" class="nav-item nav-link">
        <i class="fa fa-layer-group me-2"></i> Unités d'enseignement
    </a>
    <a href="{{route('admin.recentsnews.index')}}" class="nav-item nav-link">
        <i class="fa fa-newspaper me-2"></i> Infos récentes
    </a>
    <a href="{{route('admin.faqs.index')}}" class="nav-item nav-link">
        <i class="fa fa-question-circle me-2"></i> FAQs
    </a>
    <a href="{{route('admin.anounces.index')}}" class="nav-item nav-link">
        <i class="fa fa-bullhorn me-2"></i> Annonces
    </a>
    <a href="{{route('admin.events.index')}}" class="nav-item nav-link">
        <i class="fa fa-calendar-alt me-2"></i> Évènements
    </a>
    <a href="{{route('admin.galleries.index')}}" class="nav-item nav-link">
        <i class="fa fa-images me-2"></i> Galerie
    </a>
@endsection

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="text-secondary mb-0">Liste des formations</h6>
                    <a href="{{ route('admin.trainings.create') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                        <i class="fa fa-plus text-light"></i>
                    </a>

                </div>
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr >
                                <th scope="col">#</th>
                                <th scope="col">Intitule</th>
                                <th scope="col">Image</th>
                                <th scope="col" class="text-center align-middle">Catégorie</th>
                                <th scope="col" class="text-center align-middle">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Développement Web</td>
                                <td>
                                    <a href="{{asset('assets/img/formations/f-11.jpg')}}" class="btn btn-primary btn-sm glightbox">
                                        Voir l'image
                                    </a>
                                </td>
                                <td class="text-center align-middle">Numérique</td>
                                <td class="text-center align-middle">
                                    <a href="#" class="me-1" title="Modifier">
                                        <i class="fa fa-edit text-warning"></i>
                                    </a>
                                    <a href="#"  title="Supprimer">
                                        <i class="fa fa-trash text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>mark@email.com</td>
                                <td>UK</td>
                                <td>456</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacob@email.com</td>
                                <td>AU</td>
                                <td>789</td>
                                <td>Member</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
