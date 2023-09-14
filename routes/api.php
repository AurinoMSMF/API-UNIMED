<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('pacientes', [ApiController::class,'createPaciente']); // Feita
Route::get('pacientes', [ApiController::class,'getTodosOsPacientes']); //Feita
Route::get('pacientes/{id}', [ApiController::class,'getPaciente']); //Feita
Route::put('pacientes/{id}', [ApiController::class,'editPaciente']);
Route::delete('pacientes/{id}', [ApiController::class,'deletePaciente']);