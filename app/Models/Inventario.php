<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $chavePrimaria = 'number';
    public $incrementando = false;
    protected $chaveTipo = 'string';

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto');
    }
    public function produtoComVariante()
    {
        return $this->hasOne('App\Models\ProdutoComVariante', 'inventory_number');
    }
    public function produtoSemVariante()
    {
        return $this->hasOne('App\Models\ProdutoSemVariante', 'inventory_number');
    }
}
