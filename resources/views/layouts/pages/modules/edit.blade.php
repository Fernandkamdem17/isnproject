
@extends('admin')
@section('title')
    Edit Module
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    <a href="{{route('trainings.index')}}" class="nav-item nav-link">
        <i class="fa fa-graduation-cap me-2"></i> Formations
    </a>
    <a href="{{route('modules.index')}}" class="nav-item nav-link active">
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
                                <h6 class="text-secondary mb-0">Modifier un module</h6>
                                <a href="{{ route('modules.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('modules.update', $module)}}" method="POST" class="px-4 py-2">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="training_id">Formation</label>
                                <select class="form-select  @error('training_id') is-invalid @enderror" id="training_id" name="training_id">
                                    <option value="" disabled selected>--- Sélectionnez la formation ---</option>
                                    @foreach($categories as $category)
                                        <optgroup label="{{ $category->title }}">
                                            @foreach($category->trainings as $training)
                                                <option value="{{ $training->id }}"
                                                    {{ old('training_id', $module->training_id ?? '') == $training->id ? 'selected' : '' }}>
                                                    {{ $training->title }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                                @error('training_id')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                @enderror
                            </div>

                             <div class="mb-3">
                                 <label for="module_titled" class="form-label">Intitule</label>
                                 <input type="text" name="module_titled" class="form-control @error('module_titled') is-invalid @enderror" id="module_titled"  value="{{old('module_titled', $module->title?? '')}}">
                                 @error('module_titled')
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
