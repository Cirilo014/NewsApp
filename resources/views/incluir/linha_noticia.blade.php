<div class="row">

{{-- Titulo--}}
    <div class="col-md-6">
        <strong>{{ $noticia->titulo }} </strong>
    </div>


{{-- Autor--}}
    <div class="col-md-3">
    {{ $noticia->autor }} 
    </div>


{{-- Icones --}}
<div class="col-md-3 text-right">

    {{-- Visibilidade --}}
  
@if($noticia->visivel == 1)
    <a href="tornar_invisivel/{{ $noticia->id_noticia }}">
        <span class="glyphicon glyphicon-eye-open" style="margin-left: 10px;"></span>
    </a>
    
@else
    <a href="tornar_visivel/{{ $noticia->id_noticia }}">
        <span class="glyphicon glyphicon-eye-open" style="margin-left: 10px; color: #ddd;"></span>
    </a>



@endif
    {{-- Editar --}}

    <a href="editar/{{ $noticia->id }}">
        <span class="glyphicon glyphicon-pencil" style="margin-left: 10px;"></span>
    </a>

    {{-- Eliminar dados--}}

    <a href="apagar/{{$noticia->id_noticia}}">
        <span class="glyphicon glyphicon-trash" style="margin-left: 10px;"></span>
    </a>

    </div>

</div>