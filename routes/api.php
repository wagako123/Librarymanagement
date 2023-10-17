<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\Api\AuthorController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('Authors', [AuthorController::class, 'index']);
Route::post('Authors', [AuthorController::class, 'store']);
Route::get('Authors/{id}', [AuthorController::class, 'show']);
Route::get('Authors/{id}/edit', [AuthorController::class, 'edit']);
Route::put('Authors/{id}/edit', [AuthorController::class, 'update']);
Route::delete('Authors/{id}/delete', [AuthorController::class, 'destroy']);