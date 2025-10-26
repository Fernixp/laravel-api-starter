<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaStoreRequest;
use App\Http\Requests\CategoriaUpdateRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriaStoreRequest $categoria)
    {
        $categoria = Categoria::create($categoria->all());
        return response()->json($categoria);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::find($id);
        if ($categoria) {
            return response()->json($categoria);
        } else {
            return response()->json([
                'data' => [],
                'message' => 'no se encontró ningun registro',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriaUpdateRequest $request, string $id)
    {
        try {
            // Buscar el modelo o lanzar 404 si no existe
            $categoria = Categoria::find($id);
    
            if(!$categoria){
                return response()->json([
                    'data' => [],
                    'message' => 'No se encontro el registro',
                ]);
            }
            // Actualizar con datos validados
            $categoria->update($request->all());
    
            return response()->json([
                'data' => $categoria,
                'message' => 'Registro actualizado correctamente',
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'message' => 'Error al actualizar el registro',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::find($id);
        if ($categoria) {
            $categoria->delete();
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
