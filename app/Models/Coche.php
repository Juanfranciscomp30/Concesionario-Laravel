<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'color',
        'precio'
    ];

    /* Scope para filtrar por marca */
    public function scopeMarcaScope($query, $marca)
    {
        return $query->where('marca', $marca);
    }
     
     /* Scope para filtrar por color */
    public function scopeColorScope($query, $color)
    {
        return $query->where('color', $color);
    }

    
     /*Scope para filtrar por precio */
     
    public function scopePrecioScope($query, $precio)
    {
        return $query->where('precio', '<=', $precio);
    }
}
