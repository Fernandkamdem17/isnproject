
@extends('admin')
@section('title')
    Testimonials
@endsection

@section('main')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                @if(session('success-update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-update') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('success-create'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-create') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session('success-delete'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success-delete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="text-secondary mb-0">Liste des témoignages</h6>
                    <a href="{{ route('testimonials.create') }}" class="btn btn-success rounded-pill d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                        <i class="fa fa-plus text-light"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table">
                        <thead>
                            <tr >
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Formation</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col" class="text-center align-middle">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($testimonials!=null && count($testimonials)>0)
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$testimonial->name}}</td>
                                        <td>{{$testimonial->training}}</td>
                                        <td>{{$testimonial->description}}</td>
                                        <td>
                                            @if($testimonial->img)
                                                <a href="{{ asset('storage/' . $testimonial->img) }}" data-featherlight="image" class="btn btn-primary btn-sm">
                                                    Voir l'image
                                                </a>
                                            @else
                                                <span class="text-muted">Aucune image</span>
                                            @endif

                                        </td>
                                        <td class="text-center align-middle">
                                            
                                            <a href="{{route('testimonials.edit', $testimonial)}}" class="text-warning mx-2"><i class="bi bi-pen"></i></a>
                                            <form action="{{route('testimonials.destroy', $testimonial)}}" method="POST" style="display: inline-block" onsubmit="return confirm('Etes-vous sûr de vouloir supprimer ce témoignage ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 m-0 text-danger form-button" title="supprimer">
                                                    <i class="bi bi-trash"></i> 
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
