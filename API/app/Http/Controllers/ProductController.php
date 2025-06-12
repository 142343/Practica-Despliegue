<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function campoUpdate(Request $request, $id)
    {
        info('Solicitud de actualización parcial', [
            'id' => $id,
            'data' => $request->all()
        ]);

        $response = [];

        try {
            $product = Product::findOrFail($id);

            $validatedData = $request->validate([
                'field' => 'required|string',
                'value' => 'required'
            ]);

            $allowedFields = [
                'Nombre' => 'string|max:255',
                'Precio' => 'numeric|min:0',
                'Cantidad' => 'integer|min:0',
                // agrega más campos si lo necesitas
            ];

            $field = $validatedData['field'];
            $value = $validatedData['value'];

            if (!array_key_exists($field, $allowedFields)) {
                $response = [
                    'data' => [
                        'success' => false,
                        'message' => 'Campo no permitido para actualización'
                    ],
                    'status' => 400
                ];
            } else {
                $request->validate([
                    $field => $allowedFields[$field]
                ]);

                $product->$field = $value;
                $product->save();

                $response = [
                    'data' => [
                        'success' => true,
                        'message' => 'Campo actualizado exitosamente',
                        'product' => $product
                    ],
                    'status' => 200
                ];
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            $response = [
                'data' => [
                    'success' => false,
                    'message' => 'Error de validación',
                    'errors' => $e->errors()
                ],
                'status' => 422
            ];
        } catch (\Exception $e) {
            $response = [
                'data' => [
                    'success' => false,
                    'message' => 'Error: ' . $e->getMessage()
                ],
                'status' => 500
            ];
        }

        return response()->json($response['data'], $response['status']);
    }
}

//Eliminar producto con su id
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            if ($product->Imagen) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($product->Imagen);
            }
            $product->delete();
            return response()->json([
                'success' => true,
                'message' => 'Producto eliminado exitosamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el producto: ' . $e->getMessage()
            ], 500);
        }
    }

    //Traer categorias 
    public function getProductsByCategory($categoryName)
    {
        try {
            $category = \App\Models\Category::where('Nombre',  $categoryName)->first();

            if (!$category) {
                return response()->json([
                    'message' => 'Categoría no encontrada',
                    'status' => 404
                ], 404);
            }
            

            $products = Product::where('CategoriaCodigoCategoría', $category->CodigoCategoría)->get();

            $listas = (new Product())->obtenerListasCatalogos();

            return view('catalog.index', [
                'products' => $products,
                'categorias' => $listas['categorias'],
                'estados' => $listas['estados'],
                'marcas' => $listas['marcas'],
                'tallas' => $listas['tallas'],
                'usuario' => $listas['usuario'],
                'selectedCategory' => $categoryName
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error: ' . $e->getMessage(), 
                'status' => 500
            ], 500);
        }
        
    }

//Listas desplegables para agregar producto
    public function index()
    {
        try {

            $products = Product::all();
            $listas = (new Product())->obtenerListasCatalogos();

            return view('catalog.index', [
                'products' => $products,
                'categorias' => $listas['categorias'],
                'estados' => $listas['estados'],
                'marcas' => $listas['marcas'],
                'tallas' => $listas['tallas'],
                'usuario' => $listas['usuario']
               
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }


//Agregar nuevo producto desde 0
    public function store(Request $request)
    {
        try {
            info('Iniciando validación de datos', ['datos_recibidos' => $request->all()]);
    
            $validated = $request->validate([
                'Nombre' => 'required|string|max:255',
                'Precio' => 'required|numeric',
                'IVA' => 'required|numeric',
                'Imagen' => 'nullable|image|max:2048',  // Imagen ya no es obligatorio
                'CategoriaCodigoCategoría' => 'required|exists:categoria,CodigoCategoría',
                'EstadoCodigoEstado' => 'nullable|exists:estado,CodigoEstado',
                'Stock' => 'nullable|numeric',
                'Descripcion' => 'nullable|string',
                'MarcasCodigoMarca' => 'required|exists:marcas,CodigoMarca',
                'TallasCodigoTallas' => 'required|exists:tallas,CodigoTallas',
                'Num_Documento' => 'required|exists:usuario,Num_Documento'
            ]);
    
            info('Validación completada exitosamente', ['datos_validados' => $validated]);
    
            if ($request->hasFile('Imagen')) {
                $imagen = $request->file('Imagen');
                $rutaImagen = $imagen->store('productos', 'public');
                info('Imagen cargada exitosamente', ['ruta_imagen' => $rutaImagen]);
                $validated['Imagen'] = $rutaImagen;  
            } else {
                $validated['Imagen'] = null;
            }
 
            $producto = (new Product())->agregarProducto($validated);
    
            info('Producto agregado correctamente', ['producto' => $producto]);
            return response()->json([
                'message' => 'Producto agregado exitosamente',
                'producto' => $producto
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            info('Errores de validación', ['errores' => $e->errors()]);
            return response()->json([
                'message' => 'Errores de validación',
                'errores' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            info('Error en el proceso de almacenamiento', ['error' => $e->getMessage()]);
            return response()->json([
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }
    }
    
 //Actualizar todos lo campos
    public function update(Request $request, $id)   
    {  
        info('Solicitud de actualización', [  
            'id' => $id,  
            'data' => $request->all()  
        ]);  

        try {  
            $product = Product::findOrFail($id);  
            $product->update($request->only([  
                'Nombre', 'Descripcion', 'Precio'
            ]));  
            
            return response()->json([  
                'success' => true,  
                'message' => 'Producto actualizado exitosamente',  
                'product' => $product  
            ]);  
        } catch (\Exception $e) {  
            return response()->json([  
                'success' => false,  
                'message' => 'Error: ' . $e->getMessage()  
            ], 500);  
        }  
    }  
    

    //Trae todos los productos que estan en a base de datos
    public function indexx()  
    {  
        $products = Product::all();  
        if ($products->isEmpty()) {  
            $data = [  
                'message' => 'No se encontraron Productos',  
                'status' => 200  
            ];  
            return response()->json($data, 200);  
        }  
        return response()->json($products, 200);  
    }  
 
}
