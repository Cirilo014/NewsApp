<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsApp</title>
    <link rel="stylesheet" href={{ asset("css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{ asset("css/styles.css") }}>
</head>


<body>

    <div class="container">       

    <!-- Cabeçalho e navegação -->
    @include('layouts.nav')

    <!-- Conteúdo -->
    @yield('conteudo')

    <!-- Rodapé -->
    @include('layouts.rodape')

    </div>

    <script src={{ asset("js/bootstrap.min.js") }}></script>
    
</body>
</html>