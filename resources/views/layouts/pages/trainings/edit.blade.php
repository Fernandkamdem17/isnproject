
@extends('admin')
@section('title')
    Edit Training
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
                                 <label for="img" class="form-label">Modifier l'image</label>

                                 @if(!empty($training->img))
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $training->img) }}" 
                                            alt="Image actuelle" 
                                            data-featherlight="{{ asset('storage/' . $training->img) }}"
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
