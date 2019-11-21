<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['nome', 'qtde', 'preco', 'categoria_id'];

    public function categorias(){
    	return $this->belongsTo("App\Categoria","relacao",'categoria_id','produto_id');
    }
    
}
