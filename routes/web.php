<?php

use App\Http\Controllers\UsuarioController;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/* DB::listen(function ($query){
    dump($query->sql);
});  */

Route::view('/', 'welcome');

 
// Define the logout
Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
 
    return redirect('/login');
});
 
// Protected routes here
Route::middleware('auth')->group(function () {
});




Route::fallback(function () {
    return view('components.app.404');
});
//Volt::route('/register', 'register'); 
