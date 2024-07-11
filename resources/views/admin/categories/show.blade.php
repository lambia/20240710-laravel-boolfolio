@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1 class="pb-4">
                    <i class="{{ $categoria->icon }}"></i> {{ $categoria->name }}
                </h1>
                
                
                
                <a href="{{ route("admin.categories.index") }}" class="btn btn-primary">Torna alla lista categorie</a>

            </div>
        </div>
    </div>
@endsection
