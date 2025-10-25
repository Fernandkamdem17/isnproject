
@extends('admin')
@section('title')
    Add Training
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    <a href="{{route('trainings.index')}}" class="nav-item nav-link active">
        <i class="fa fa-graduation-cap me-2"></i> Formations
    </a>
    <a href="{{route('modules.index')}}" class="nav-item nav-link">
        <i class="fa fa-book-open me-2"></i> Modules
    </a>
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
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                        <div class="bg-secondary rounded h-100 px-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-secondary mb-0">Modifier une formation</h6>
                                <a href="{{ route('trainings.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('trainings.update', $training)}}" method="POST" enctype="multipart/form-data" class="px-4 py-2">
                            @csrf
                            @method('PUT')
                             <div class="mb-3">
                                 <label for="formation_titled" class="form-label">Intitule</label>
                                 <input type="text" name="formation_titled" class="form-control @error('formation_titled') is-invalid @enderror" id="formation_titled"  value="{{old('formation_titled', $training->title?? '')}}">
                                 @error('formation_titled')
                                    <small class="invalid-feedback d-block">{{$message}}</small>
                                 @enderror
                             </div>
                             <div class="mb-3">
                                <label for="category">Catégorie</label>
                                <select class="form-select @error('category') is-invalid @enderror" id="category_id" name="category">
                                    <option value="" disabled {{ old('category', $training->category->title ?? '') == '' ? 'selected' : '' }}>---Sélectionnez la catégorie---</option>
                                    <option value="1" {{ old('category', $training->category->id ?? '') == 1? 'selected' : '' }}>Numérique</option>
                                    <option value="2" {{ old('category', $training->category->id ?? '') == 2? 'selected' : '' }}>Paramédical</option>
                                    <option value="3" {{ old('category', $training->category->id ?? '') == 3? 'selected' : '' }}>Langue</option>
                                </select>

                                @error('category')
                                    <small class="invalid-feedback d-block">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                 <label for="img" class="form-label">Modifier l' image</label>

                                 @if(!empty($training->img))
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $training->img) }}" 
                                            alt="Image actuelle" 
                                            style="height: 80px; border-radius: 6px; object-fit: cover;">
                                    </div>
                                @endif
                                <input type="file" class="form-control  @error('img') is-invalid @enderror" name="img" id="img"/>
                                 @error('img')
                                    <small class="invalid-feedback d-block">{{$message}}</small>
                                 @enderror
                            
                            </div>
                             <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
