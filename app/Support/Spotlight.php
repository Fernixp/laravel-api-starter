<?php

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;

class Spotlight
{
    public function search(Request $request)
    {
        // Verificación de seguridad - solo usuarios autenticados
        if (!Auth::user()) {
            return [];
        }

        $search = $request->search ?? '';

        return collect([
            [
                'name' => 'Dashboard',
                'description' => 'Panel principal del sistema',
                'icon' => Blade::render("<x-icon name='o-home' class='w-11 h-11 p-2 bg-blue-500/10 rounded-full text-blue-600' />"),
                'link' => '/dashboard'
            ],
            [
                'name' => 'Usuarios',
                'description' => 'Administración de usuarios',
                'icon' => Blade::render("<x-icon name='o-users' class='w-11 h-11 p-2 bg-orange-500/10 rounded-full text-orange-600' />"),
                'link' => '/usuarios'
            ],
        ])->filter(fn(array $item) => 
            str($item['name'] . ' ' . $item['description'])
                ->contains($search, true)
        );
    }
}