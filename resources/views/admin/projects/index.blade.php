@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="pb-4">Projects List</h1>
            </div>
            <div class="col-md-12">

                @foreach ($progetti as $progetto)

                    <div class="card mb-4">
                        <img src="{{ $progetto->img }}" class="card-img-top" alt="{{ $progetto->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $progetto->name }}</h5>
                            <p class="card-text">{{ $progetto->description }}</p>
                            <a href="{{ route("admin.projects.show", $progetto) }}" class="btn btn-primary">Mostra dettagli</a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
