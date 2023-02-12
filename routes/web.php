<?php
use \App\Http\Controllers\DepController;
use Illuminate\Support\Facades\Route;
Route::get('/', [DepController::class, 'liste']);