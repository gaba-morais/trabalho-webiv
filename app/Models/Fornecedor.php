<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedor';

    public $timestamps = false;

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'endereco',
        'fone',
        'email',
        'cnpj',
    ];
}