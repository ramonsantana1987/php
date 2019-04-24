<?php

namespace aula7;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';//tabela no banco de dados

    protected $fillable = ['id', 'nome', 'data_nascimento','url'];//campos da tabela no banco de dados

    public $timestamps = false;//como o laravel não administrará nosso app marque essa propriedade assim
}
