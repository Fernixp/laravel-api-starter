<?php

namespace App\Http\Requests;

class ProductoStoreRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $producto_id = $this->route('producto');
        return [
            'nombre' => [
                'sometimes',
                'required',
                'string',
                'max:100',
                "unique:productos,nombre,$producto_id",
            ],
            'precio' => ['required', 'numeric'],
            'categoria_id' => ['required', 'exists:categorias,id']
        ];
    }
}
