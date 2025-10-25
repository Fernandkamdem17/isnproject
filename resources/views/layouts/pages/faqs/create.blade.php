
@extends('admin')
@section('title')
    Add FAQ
@endsection
@section('content-sidebar')
    <a href="{{route('admin.dashboard')}}" class="nav-item nav-link">
        <i class="fa fa-tachometer-alt me-2"></i> Tableau de Bord
    </a>
    <a href="{{route('trainings.index')}}" class="nav-item nav-link">
        <i class="fa fa-graduation-cap me-2"></i> Formations
    </a>
    <a href="{{route('modules.index')}}" class="nav-item nav-link">
        <i class="fa fa-book-open me-2"></i> Modules
    </a>
    <a href="{{route('lessons.index')}}" class="nav-item nav-link">
        <i class="fa fa-layer-group me-2"></i> UE
    </a>
    <a href="{{route('faqs.index')}}" class="nav-item nav-link">
        <i class="fa fa-newspaper me-2"></i> Infos récentes
    </a>
    <a href="{{route('faqs.index')}}" class="nav-item nav-link active">
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
                                <h6 class="text-secondary mb-0">Ajouter un FAQ</h6>
                                <a href="{{ route('faqs.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('faqs.store')}}" method="POST" class="px-4 py-2">
                            @csrf
                             <div class="mb-3">
                                 <label for="question" class="form-label">Question</label>
                                 <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" id="question"  value="{{old('question', $faqs->title?? '')}}">
                                 
                                  @error('question')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                  @enderror
                                 
                                 <label for="response" class="form-label">Réponse</label>
                                 <textarea 
                                    name="response" 
                                    id="response" 
                                    class="form-control @error('response') is-invalid @enderror" 
                                    rows="4"
                                 >{{ old('response', $faqs->description ?? '') }}</textarea>

                                @error('response')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                @enderror
                             </div>
                             <button type="submit" class="btn btn-success">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
