<?php 
use App\Http\Controllers\HomeownerController;

Route::prefix('homeowners')->group(function () {
    Route::post('/', [HomeownerController::class, 'store']);
    Route::get('/', [HomeownerController::class, 'index']);
    Route::get('{id}', [HomeownerController::class, 'show']);
    Route::put('{id}', [HomeownerController::class, 'update']);
    Route::delete('{id}', [HomeownerController::class, 'destroy']); 
});
