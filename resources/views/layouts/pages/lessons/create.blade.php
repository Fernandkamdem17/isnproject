
@extends('admin')
@section('title')
    Add Module
@endsection

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                        <div class="bg-secondary rounded h-100 px-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-secondary mb-0">Ajouter une U.E</h6>
                                <a href="{{ route('lessons.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('lessons.store')}}" method="POST" class="px-4 py-2">
                            @csrf
                            <div class="mb-3">
                                <label for="training_id">Formation</label>
                                <select class="form-select  @error('training_id') is-invalid @enderror" id="training_id" name="training_id">
                                    <option value="" disabled selected>--- Sélectionnez la formation ---</option>
                                    {{-- @foreach($categories as $category)
                                        <optgroup label="{{ $category->title }}">
                                            @foreach($category->trainings as $training)
                                                <option value="{{ $training->id }}"
                                                    {{ old('training_id', $module->training_id ?? '') == $training->id ? 'selected' : '' }}>
                                                    {{ $training->title }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach --}}
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

                             <button type="submit" class="btn btn-success">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
