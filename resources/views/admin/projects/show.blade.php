@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1 class="pb-4">{{ $progetto->name }}</h1>
                <img src="{{ $progetto->img }}" class="w-100" alt="{{ $progetto->name }}">
                <p class="card-text my-4">{{ $progetto->description }}</p>

                {{-- Stampo semplicemente l'intero scritto nella colonna --}}
                <p class="card-text my-4">ID Categoria: {{ $progetto->category_id }}</p>

                <a href="{{ route("admin.projects.index") }}" class="btn btn-primary">Torna alla lista progetti</a>

            </div>
        </div>
    </div>
@endsection
