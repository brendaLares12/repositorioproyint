<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $primaryKey = "id";
    //public $timestamps 
    public $guarded = [];

    public $fillable = [
      'nombre',
      'imagen',
      'descripcion',
      'precio',
      'categoria_id'
    ];

    public function categoria() {
     return $this->belongsTo("App\Categoria", "categoria_id");
 }
}