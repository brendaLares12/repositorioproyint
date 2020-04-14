<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $primaryKey = "id";
    //public $timestamps
    public $guarded = [];

    public function categorias() {
     return $this->belongsTo("App\Categoria", "categoria_id");
 }
 public function subcategorias() {
  return $this->belongsTo("App\Subcategorias", "subcategoria_id");
}
}
