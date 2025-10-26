<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CategoriaUpdateRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $categoria_id = $this->route('categoria');
        return [
            'nombre' => [
                'sometimes',
                'required',
                'string',
                'max:100',
                "unique:categorias,nombre,$categoria_id",
            ],
        ];
    }
}
