<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'CodigoCategoría';

    protected $fillable = ['Nombre'];

    public function products()
    {
        return $this->hasMany(Product::class, 'CategoriaCodigoCategoría', 'CodigoCategoría');
    }}
