<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }
}