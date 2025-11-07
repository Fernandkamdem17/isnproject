
@extends('admin')
@section('title')
    Add Training
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
                        <form action="{{route('trainings.store')}}" method="POST" enctype="multipart/form-data" class="px-4 py-2">
                            @csrf
                            <div class="mb-3">
                                <label for="category">Catégorie</label>
                                <select class="form-select @error('category') is-invalid @enderror" id="category_id" name="category">
                                    <option value="" disabled {{ old('category', $training->category->title ?? '') == '' ? 'selected' : '' }}>---Sélectionnez la catégorie---</option>
                                    <option value="1" {{ old('category', $training->category->title ?? '') == 1? 'selected' : '' }}>Numérique</option>
                                    <option value="2" {{ old('category', $training->category->title ?? '') == 2? 'selected' : '' }}>Paramédical</option>
                                    <option value="3" {{ old('category', $training->category->title ?? '') == 3? 'selected' : '' }}>Langue</option>
                                </select>

                                @error('category')
                                    <small class="invalid-feedback d-block">{{$message}}</small>
                                @enderror
                            </div>
                             <div class="mb-3">
                                 <label for="formation_titled" class="form-label">Intitule</label>
                                 <input type="text" name="formation_titled" class="form-control @error('formation_titled') is-invalid @enderror" id="formation_titled"  value="{{old('formation_titled', $training->title?? '')}}">
                                 @error('formation_titled')
                                    <small class="invalid-feedback d-block">{{$message}}</small>
                                 @enderror
                             </div>
                             <div class="mb-3">
                                 <label for="titled_img" class="form-label">Ajouter une image</label>
                                  <input type="file" class="form-control" name="img" />
                            </div>
                             <button type="submit" class="btn btn-success">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
