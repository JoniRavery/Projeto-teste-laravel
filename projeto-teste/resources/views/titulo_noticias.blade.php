@extends('layout')

@section('content')
    <h1 class="mt-4 text-center">Notícias</h1>
    <ul class="list-group text-center" style="width: 50%; margin: 0 auto; margin-bottom: 20px;">
        @foreach($noticias as $noticia)
            <li class="list-group-item" style="font-size: 14px;">
                
                    <h4>{{ $noticia->titulo }}</h4>
                
                <a href="{{ route('noticias.show', $noticia->id) }}" class="btn btn-primary">Ver Detalhes</a>
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-center">
        <a href="{{ route('filmes.index') }}" class="btn btn-warning">Ver Filmes</a>
    </div>
</div>
@endsection
