<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes (v1)
|--------------------------------------------------------------------------
|
| All routes are prefixed with /api/v1/ (configured in bootstrap/app.php).
| Token authentication via Laravel Sanctum.
|
*/

Route::middleware(['auth:sanctum', 'throttle:api'])->group(function (): void {
    Route::get('/user', function () {
        return request()->user();
    });
});
