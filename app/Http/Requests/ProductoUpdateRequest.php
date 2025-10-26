<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoUpdateRequest extends BaseFormRequest
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
            'precio' => ['sometimes', 'numeric'],
            'categoria_id' => ['sometimes', 'exists:categorias,id']
        ];
    }
    public function messages(): array
    {
        return [
            'categoria_id.exists' => 'La categoría no existe en la base de datos',
        ];
    }
}
