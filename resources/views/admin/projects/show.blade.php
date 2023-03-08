@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-5 background_dark_2 border_radius_50 table_container">
            <div class="col-12 d-flex justify-content-between">
                <div>
                    <h2 class="fw-bolder text-white">{{ $project->name }}</h2>
                </div>
                <div>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.index') }}" role="button">Elenco progetti</a>
                    <a class="btn btn-sm btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}" role="button" title="Modifica il progetto">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 mt-4 d-flex align-items-end">
                <h4 class="fw-bold m-0 text-white">Tipo:</h4>
                <p class="m-0 ms-1 text-white">{{ $project->type ? $project->type->type : 'Senza tipo' }}</p>
            </div>
            <div class="col-5 me-5 mt-4 border_dark border_radius_50 table_container">
                <h5 class="fw-bold text-white">Copertina:</h5>
                <img src="{{ asset('storage/' .$project->cover_image) }}" alt="{{ $project->name }}" class="w-100">
            </div>
            <div class="col-6 mt-4 border_dark border_radius_50 table_container">
                <h5 class="fw-bold text-white">Descrizione:</h5>
                <p class="text-white">{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection