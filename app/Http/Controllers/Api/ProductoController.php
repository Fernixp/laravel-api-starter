<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductoStoreRequest;
use App\Http\Requests\ProductoUpdateRequest;
use App\Http\Resources\ProductoResource;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $data = Producto::with('categoria')->get();
        return response()->json(ProductoResource::collection($data));
    }
    public function store(ProductoStoreRequest $producto){
        $producto = Producto::create($producto->all());
        return response()->json($producto);
    }
    public function show(string $id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            return response()->json($producto);
        } else {
            return response()->json([
                'data' => [],
                'message' => 'no se encontró ningun registro',
            ]);
        }
    }

    public function update(ProductoUpdateRequest $request, string $id)
    {
        try {
            // Buscar el modelo o lanzar 404 si no existe
            $producto = Producto::find($id);
    
            if(!$producto){
                return response()->json([
                    'data' => [],
                    'message' => 'No se encontro el registro',
                ]);
            }
            // Actualizar con datos validados
            $producto->update($request->all());
    
            return response()->json([
                'data' => $producto,
                'message' => 'Registro actualizado correctamente',
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => 'Error al actualizar el registro',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function destroy(string $id)
    {
        $producto = Producto::find($id);
        if ($producto) {
            $producto->delete();
            return response()->json([
                'data' => [],
                'message' => 'Registro eliminado correctamente',
            ]);
        } else {
            return response()->json([
                'data' => [],
                'message' => 'no se encontró ningun registro',
            ]);
        }
    }
}
