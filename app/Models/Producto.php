<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'precio',
        'categoria_id',
        'estado'
    ];

    protected $casts = [
        'precio' => 'float',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
