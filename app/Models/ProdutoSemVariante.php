<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoSemVariante extends Model
{
    use HasFactory;

    protected $chavePrimaria = 'inventory_number';
    public $incrementando = false;
    protected $chaveTipo = 'string';

    public function produto() 
    {
        return $this->belongsTo('App\Models\Produto', 'product_number');
    }
    public function inventario()
    {
        return $this->belongsTo('App\Models\Inventario', 'inventory_number');
    }
}
