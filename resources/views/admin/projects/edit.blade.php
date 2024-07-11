@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1 class="pb-4">{{ $progetto->name }}</h1>

                <form action="{{ route('admin.projects.update', $progetto) }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label class="form-label">name</label>
                        <input class="form-control" name="name" value="{{ $progetto->name }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">img</label>
                        <input class="form-control" name="img" value="{{ $progetto->img }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">description</label>
                        <input class="form-control" name="description" value="{{ $progetto->description }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">category_id</label>
                        <input class="form-control" name="category_id" value="{{ $progetto->category_id }}">
                    </div>

                    <div class="mb-3">
                        <a href="{{ route('admin.projects.show', $progetto) }}" class="btn btn-primary">Annulla</a>
                        <button type="submit" class="btn btn-primary">Salva</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
