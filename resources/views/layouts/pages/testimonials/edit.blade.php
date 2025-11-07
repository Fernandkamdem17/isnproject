
@extends('admin')
@section('title')
    Edit testimonial
@endsection

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                        <div class="bg-secondary rounded h-100 px-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-secondary mb-0">Modifier un témoignage</h6>
                                <a href="{{ route('testimonials.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('testimonials.update', $testimonial)}}" method="POST" enctype="multipart/form-data" class="px-4 py-2">
                            @csrf
                            @method('PUT')
                                <div class="mb-3">
                                    <label for="name">Nom</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  value="{{old('name', $testimonial->name?? '')}}">
                                    @error('name')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="training" class="form-label">Formation</label>
                                    <input type="text" name="training" class="form-control @error('training') is-invalid @enderror" id="training"  value="{{old('training', $testimonial->training?? '')}}">
                                    @error('training')
                                        <small class="invalid-feedback d-block">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea  name="description"  id="description"  class="form-control @error('description') is-invalid @enderror"  rows="4" >{{ old('description', $testimonial->description ?? '') }}</textarea>

                                    @error('description')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="img" class="form-label">Modifier l'image</label>
                                    <div>
                                        @if(!empty($testimonial->img))
                                            <img src="{{ asset('storage/' . $testimonial->img) }}" 
                                                alt="Image actuelle" 
                                                data-featherlight="{{ asset('storage/' . $testimonial->img) }}"
                                                style="height: 80px; border-radius: 6px; object-fit: cover; cursor:pointer">
                                        @endif
                                        <input type="file" class="form-control mt-3 @error('img') is-invalid @enderror" value="{{ old('img', $testimonial->img ?? '') }}" name="img" id="img" />
                                    </div>
                                    @error('img')
                                        <small class="invalid-feedback d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
