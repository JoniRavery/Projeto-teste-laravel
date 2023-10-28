@extends('layout')

@section('content')
    <h1 class="mt-4 mx-auto text-center">Filmes</h1>
    <div class="row">
        @foreach($filmes as $filme)
    <div class="col-md-4 mb-4">
        <div class="card">
            @if ($filme->primaryImage)
                <div class="d-flex justify-content-center h-100">
                    <img src="{{ $filme->primaryImage->url }}" class="card-img-top mx-auto d-block" alt="{{ $filme->titleText->text }}">
                </div>
            @else
                <div class="d-flex justify-content-center h-100">
                    <img src="{{ asset('placeholder-image.jpg') }}" class="card-img-top mx-auto d-block" alt="{{ $filme->titleText->text }}">
                </div>
            @endif
            <div class="card-body">
                <h5 class="card-title justify-content-center">{{ $filme->titleText->text }}</h5>
                <p class="card-text">Ano: {{ $filme->releaseYear->year }}</p>
            </div>
        </div>
    </div>
@endforeach
    </div>
    
    <nav class="mx-auto d-flex justify-content-center">
        <ul class="pagination">
            @if ($pagina > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ route('filmes.index', ['pagina' => $pagina - 1]) }}" aria-label="Anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif
            
            @for ($i = 1; $i <= $totalPaginas; $i++)
                <li class="page-item {{ $i == $pagina ? 'active' : '' }}">
                    <a class="page-link" href="{{ route('filmes.index', ['pagina' => $i]) }}">{{ $i }}</a>
                </li>
            @endfor
            
            @if ($pagina < $totalPaginas)
                <li class="page-item">
                    <a class="page-link" href="{{ route('filmes.index', ['pagina' => $pagina + 1]) }}" aria-label="Próxima">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
@endsection
