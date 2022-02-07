@extends('layouts.app')

@section('conteudo')

    {{-- Verifica se existem noticias na BD --}}
        
    @if(count($noticias) == 0)

        <div class="row">
        <div class="col-md-12 text-center">
        <p class="alert alert-danger text-center">Não foram encontradas noticias.</p>
        
    </div>
        </div>

        @else

        @foreach($noticias as $noticia)

        @include('incluir.linha_noticia')

        @endforeach

    @endif

@endsection