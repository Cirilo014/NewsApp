@extends('layouts.app')

@section('conteudo')

    <form method="POST" action="/salvar">

    {{-- 
        Csrf-> é um mecanismo de segurança que impossibilita o preenchimento 
        de dados de um formulário à partir de fontes externas.. 
             
    --}}

        {{ csrf_field() }}

        <h3>Nova notícia</h3>

        <div class="form-group">

            {{-- Título da notícia --}}
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="text_titulo" id="titulo" placeholder="Título" required>
        </div>

        <div class="form-group">

            {{-- Texto da notícia --}}
            <label for="texto">Texto:</label>
            <textarea class="form-control" id="texto" name="text_texto"  placeholder="Texto da notícia" rows="5" required></textarea>
                        
        </div>

        <div class="form-group">

            {{-- Autor da notícia --}}
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" name="text_autor" id="autor" placeholder="Autor" required>
           
        </div>

            {{-- Visibilidade da notícia --}}
        <div class="form-group text-center">
            <input type="checkbox" name="check_visivel" checked>Notícia visível.
        </div>

        {{-- Botão submeter para salvar do dados.. --}}
            <div class="text-center">
                <button class="btn btn-primary" role="submit">Salvar</button>
            </div>

    </form>
   


@endsection