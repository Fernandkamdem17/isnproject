
@extends('admin')
@section('title')
    Add Event
@endsection


@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                        <div class="bg-secondary rounded h-100 px-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-secondary mb-0">Ajouter un évènement</h6>
                                <a href="{{ route('events.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('events.store')}}" method="POST" class="px-4 py-2" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Titre</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"  value="{{old('title', $event->title?? '')}}">
                                @error('title')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="link">Lien de la vidéo</label>
                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" id="link"  value="{{old('link', $event->link?? '')}}">
                                @error('link')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                 <label for="description" class="form-label">Description</label>
                                 <textarea  name="description"  id="description"  class="form-control @error('description') is-invalid @enderror"  rows="4" >{{ old('description', $event->description ?? '') }}</textarea>

                                @error('description')
                                    <small class="invalid-feedback d-block">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="img" class="form-label">Ajouter une image</label>
                                <input type="file" class="form-control @error('img') is-invalid @enderror" value="{{ old('img', $event->img ?? '') }}" name="img" id="img" />
                                @error('img')
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
