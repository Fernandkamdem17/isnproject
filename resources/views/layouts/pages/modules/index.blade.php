
@extends('admin')
@section('title')
    modules
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    @role('superadmin')
        <a href="{{route('trainings.index')}}" class="nav-item nav-link">
            <i class="fa fa-graduation-cap me-2"></i> Formations
        </a>
        <a href="{{route('modules.index')}}" class="nav-item nav-link active">
            <i class="fa fa-book-open me-2"></i> Modules
        </a>
    @endrole
    <a href="{{route('lessons.index')}}" class="nav-item nav-link">
        <i class="fa fa-layer-group me-2"></i> UE
    </a>
    <a href="{{route('recentsnews.index')}}" class="nav-item nav-link">
        <i class="fa fa-newspaper me-2"></i> Infos récentes
    </a>
    <a href="{{route('faqs.index')}}" class="nav-item nav-link">
        <i class="fa fa-question-circle me-2"></i> FAQs
    </a>
    <a href="{{route('announces.index')}}" class="nav-item nav-link">
        <i class="fa fa-bullhorn me-2"></i> Annonces
    </a>
    <a href="{{route('testimonials.index')}}" class="nav-item nav-link">
        <i class="fa fa-bullhorn me-2"></i> Témoignages
    </a>
    <a href="{{route('events.index')}}" class="nav-item nav-link">
        <i class="fa fa-calendar-alt me-2"></i> Évènements
    </a>
    <a href="{{route('galleries.index')}}" class="nav-item nav-link">
        <i class="fa fa-images me-2"></i> Galerie
    </a>
@endsection

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                @if(session('success-update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('success-create'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-create') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('success-delete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-delete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="text-secondary mb-0">Liste des modules</h6>
                    <a href="{{ route('modules.create') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                        <i class="fa fa-plus text-light"></i>
                    </a>

                </div>
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr >
                                <th scope="col">#</th>
                                <th scope="col">Intutule</th>
                                <th scope="col">Formation</th>
                                <th scope="col" class="text-center align-middle">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($modules!=null && count($modules)>0)
                                @foreach ($modules as $module)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$module->title}}</td>
                                        <td> {{$module->training->title}} </td>
                                        <td class="text-center align-middle">    
                                            @if ($module->deleted_at==null)
                                                <a href="{{route('modules.edit', $module)}}" class="text-warning mx-2"><i class="bi bi-pen"></i></a>
                                                <form action="{{route('modules.destroy', $module)}}" method="POST" style="display: inline-block" onsubmit="return confirm('Etes-vous sûr de vouloir supprimer ce module ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link p-0 m-0 text-danger form-button" title="supprimer">
                                                        <i class="bi bi-trash"></i> 
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{route('modules.restore', ['module'=>$module->id])}}" method="POST" style="display: inline-block" onsubmit="return confirm('Etes-vous sûr de vouloir restaurer ce module ?')">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-link p-0 m-0 text-success form-button" title="restaurer">
                                                        <i class="bi bi-arrow-clockwise"></i> 
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
