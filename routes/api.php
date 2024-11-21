<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'auth']);

Route::middleware(['auth:sanctum'])->group(function () {

    // Logout
    Route::post('logout', [AuthController::class, 'logout']);

    // Usuários
    // Route::apiResource('usuarios', UserController::class);
    Route::get('usuarios', [UserController::class, 'index']);
    Route::get('usuarios/{id}', [UserController::class, 'show']);
    Route::post('usuarios', [UserController::class, 'store']);
    Route::put('usuarios/{id}', [UserController::class, 'update']);
    Route::delete('usuarios/{id}', [UserController::class, 'destroy']);

    // Cadastros
    // Route::apiResource('cadastros', CadastrosController::class);
    Route::get('cadastros', [CadastrosController::class, 'index']);
    Route::get('cadastros/{id}', [CadastrosController::class, 'show']);
    Route::post('cadastros', [CadastrosController::class, 'store']);
    Route::put('cadastros/{id}', [CadastrosController::class, 'update']);
    Route::delete('cadastros/{id}', [CadastrosController::class, 'destroy']);
});
