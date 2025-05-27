<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public $timestamps = false;
    protected $table = 'producto';
    protected $primaryKey = 'CodigoProducto';

    protected $fillable = [
        'Nombre',
        'Imagen',
        'Stock',
        'Precio',
        'Descripcion',
        'CategoriaCodigoCategoría',
        'IVA',
        'EstadoCodigoEstado',
        'MarcasCodigoMarca',
        'TallasCodigoTallas',
        'Num_Documento'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoriaCodigoCategoría', 'CodigoCategoría');
    }

    // Método para obtener listas para dropdowns
    public function obtenerListasCatalogos()
    {
        return [
            'categorias' => DB::table('categoria')->get(),
            'estados' => DB::table('estado')->get(),
            'marcas' => DB::table('marcas')->get(),
            'tallas' => DB::table('tallas')->get(),
            'usuario' => DB::table('usuario')->get()
        ];
    }

    // Método para agregar producto
    public function agregarProducto($data)
    {
        return self::create($data);
    }
}