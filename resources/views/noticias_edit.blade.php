@extends('layouts.app')

@section('conteudo')

    <form method="POST" action="/atualizar/{{ $noticia->id_noticia }}">


        {{ csrf_field() }}

        <h3>Editar notícia</h3>

        <div class="form-group">

            {{-- Título da notícia --}}
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="text_titulo" id="titulo" value="{{ $noticia->titulo }}" required>
        </div>

        <div class="form-group">

            {{-- Texto da notícia --}}
            <label for="texto">Texto:</label>
            <textarea class="form-control" id="texto" name="text_texto"  rows="5" required>{{ $noticia->texto }}</textarea>
                        
        </div>

        <div class="form-group">

            {{-- Autor da notícia --}}
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" name="text_autor" id="autor" value="{{ $noticia->autor }}" required>
           
        </div>

            {{-- Visibilidade da notícia --}}
        <div class="form-group text-center">

            @if($noticia->visivel == 1)
            
            <input type="checkbox" name="check_visivel" checked>Notícia visível.
        </div>
            @else
            <input type="checkbox" name="check_visivel">Notícia visível.
            @endif
        </div>
                    

        {{-- Botão submeter para salvar do dados.. --}}
            <div class="text-center">
                <button class="btn btn-primary" role="submit">Atualizar</button>
            </div>

    </form>
   


@endsection