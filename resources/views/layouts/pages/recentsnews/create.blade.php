
@extends('admin')
@section('title')
    Add Recent New
@endsection

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                        <div class="bg-secondary rounded h-100 px-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-secondary mb-0">Ajouter une annonce récente</h6>
                                <a href="{{ route('recentsnews.index') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                    <i class="fa fa-book text-light"></i>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <form action="{{route('recentsnews.store')}}" method="POST" class="px-4 py-2">
                            @csrf
                             <div class="mb-3">
                                 <label for="description" class="form-label">Description</label>
                                 <textarea 
                                    name="description" 
                                    id="description" 
                                    class="form-control @error('description') is-invalid @enderror" 
                                    rows="4"
                                 >{{ old('description', $recentsnews->title ?? '') }}</textarea>

                                @error('description')
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
