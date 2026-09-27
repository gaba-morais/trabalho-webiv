<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    public $timestamps = false;

    protected $fillable = [
        'qtde_maxima',
        'nome',
        'embalagem',
        'qtde_estoque',
        'id_barra',
        'valor_compra',
        'valor_venda',
        'categoria_id',
    ];
}