<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $chavePrimaria = 'number';
    public $incrementando = false;
    protected $chaveTipo = 'string';
    
    public function categoria() 
    {
        return $this->belongsTo('App\Models\Categoria');
    }
    public function produtoNaoVariante() {
        return $this->hasMany('App\Models\ProdutoSemVariante');
    }
    public function produtoComVariantes() {
        return $this->hasMany('App\Models\ProdutoComVariante');
    }
}
