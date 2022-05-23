<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ManagementController;

Route::get('/', [ManagementController::class, 'index']);
Route::get('/edit', [ManagementController::class, 'edit']);
Route::post('/edit', [ManagementController::class, 'update']);
Route::get('/delete', [ManagementController::class, 'delete']);
Route::post('/delete', [ManagementController::class, 'remove']);