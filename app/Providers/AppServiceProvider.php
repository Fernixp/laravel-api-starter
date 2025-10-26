<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blueprint::macro('estado', function () {
            /**
             * @disregard P1013 Undefined method
             */
            $this->enum('estado', ['activo', 'inactivo'])->default('activo');
        });
    }
}
