<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticias;

class NoticiasController extends Controller
{
  
    
    public function index()
    {
        /* Irá buscar todas as notícias do DB*/
        $dados = noticias::all();
        return view('index_noticias', compact('dados'));
        
    }

    
    public function create()
    {
        /* Irá buscar o formulário para criar uma nova notícia */
        return view('noticias_create');
    }

   
    public function store(Request $request)
    {
        /* Este método permite gravar as notícias no banco de dados */
        $noticia = new noticias;
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

            // Parte da visibilidade ou ñ da notícia
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        
        }else {
            $noticia->visivel = 0; 
        }
            /* Salvar a notícia no BD*/
        $noticia->save();

            /* Logo após isso redirecionará para o início */
        return redirect('/');

    }

    /* Criação do método para a Gestão dos dados do BD */
    public function apresentargestaoTabelas(){
                    
         /* Carregar todas as notícias e apresentar em formato de tabelas para a gestão */
    $noticias = noticias::all();
    return view('noticias_gestao', compact('noticias'));


    }

    public function tornarVisivel($id){

        /* Tornar visível uma notícia que está invisivel */
            $noticia = noticia::find($id);
            $noticia->visivel = 1;
            $noticia->save();
            return redirect('/gerir_noticias');

    }

    public function tornarInisivel($id){

        /* Tornar visível uma notícia que está invisivel */
            $noticia = noticia::find($id);
            $noticia->visivel = 0;
            $noticia->save();
            return redirect('/gerir_noticias');

    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        /* Apresentar um formulário para editar uma notícia,
        pressupõe a apresentação dos dados da notícia no formulário
        
        */

        $noticia = noticias::find($id);
        return view('noticias_edit', compact('noticia'));

    }

    
    public function update(Request $request, $id)
    {
        /* Atualização dos dados da notícia no banco de dados */
        $noticia = noticias::find($id);

        /* Atualizar os dados */

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;
        
        // Parte da visibilidade ou ñ da notícia
        
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        
        }else {
            $noticia->visivel = 0; 
        }
        $noticia->save();
        return redirect('gerir_noticias');
   
    }

    
    public function destroy($id)
    {
        /* Irá ser usado para excluir uma notícia no banco de dados */
            noticias::destroy($id);
    }

    
}
