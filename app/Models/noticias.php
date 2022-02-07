<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noticias extends Model
{
    use HasFactory;

    /* Definindo aqui qual o nome da minha chave primária
    conforme a da minha tabela porque por predefinição, ele define
    qualquer chave primária com o nome de ->[id]
    */

    protected $primaryKey = 'id_noticia';
    
}
