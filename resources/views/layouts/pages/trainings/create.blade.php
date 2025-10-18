
@extends('admin')
@section('title')
    Add Training
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
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                        <div class="bg-secondary rounded h-100 px-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-secondary mb-0">Ajouter une formation</h6>
                                <a href="{{ route('trainings.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="#" method="POST" enctype="multipart/form-data" class="px-4 py-2">
                            @csrf
                            @method('POST')
                             <div class="mb-3">
                                 <label for="formation_titled" class="form-label">Intitule</label>
                                 <input type="text" class="form-control" id="formation_titled" value="{{old('formation_titled', $training->title?? '')}}">
                             </div>
                             @error('formation_titled')
                                <span class="invalid-feedback d-block">{{$message}}</span>
                            @enderror

                             <div class="mb-3">
                                <label for="category">Catégorie</label>
                                <select class="form-select" id="category_id" name="category">
                                    <option value="" disabled {{ old('category', $training->category->title ?? '') == '' ? 'selected' : '' }}>---Sélectionnez la catégorie---</option>
                                    <option value="1" {{ old('category', $training->category->title ?? '') == 'numerique'? 'selected' : '' }}>Nmérique</option>
                                    <option value="2" {{ old('category', $training->category->title ?? '') == 'parmedical'? 'selected' : '' }}>Paramédical</option>
                                    <option value="3" {{ old('category', $training->category->title ?? '') == 'langue'? 'selected' : '' }}>Langue</option>
                                </select>
                            </div>
                             <div class="mb-3">
                                 <label for="titled_img" class="form-label">Ajouter une image</label>
                                <input class="form-control bg-dark" type="file" id="titled_img">
                            </div>
                             <button type="submit" class="btn btn-success">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
