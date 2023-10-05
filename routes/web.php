<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GitHubAuthController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 
Route::get('/register',[RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login',[LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/auth/github', function () {
    return Socialite::driver('github')->redirect();
});

// Ruta de callback para manejar la respuesta de GitHub
Route::get('/auth/github/callback', [GitHubAuthController::class, 'handleCallback']);


Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleCallback']);


// Rutas para mostrar todos los clientes y el formulario para crear uno nuevo
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Rutas para mostrar un cliente, el formulario para editar y actualizar, y eliminar
Route::get('/clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

//Rutas para mostrar todos los Proveedores y el formulario para crear uno nuevo
Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores.index');
Route::get('/proveedores/create',[ProveedoresController::class,'create'])->name('proveedores.create');
Route::get('/proveedores/edit/{nombre}',[ProveedoresController::class,'edit'])->name('proveedores.edit');
Route::get('/proveedores/show',[ProveedoresController::class,'show'])->name('proveedores.show');
Route::post('/proveedores/store',[ProveedoresController::class,'store'])->name('proveedores.store');
//Route::get('/proveedores/',[ProveedoresController::class,'create'])->name('proveedores.create');
//Route::get('/proveedores/c',[ProveedoresController::class,'create'])->name('proveedores.create');

