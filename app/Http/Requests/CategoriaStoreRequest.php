<?php

namespace App\Http\Requests;
class CategoriaStoreRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => ['required','string', 'max:100', 'unique:categorias'],
        ];
    }
}
