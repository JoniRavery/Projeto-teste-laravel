@extends('layout')

@section('content')
    <h1 class="mt-4">Detalhes da {{ $noticia->titulo }} </h1>
    <div class="card mt-3">
        <div class="card-body">
            <p class="card-text">{{ $noticia->detalhes }}</p>
            <a href="{{ route('noticias.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
@endsection
