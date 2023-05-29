<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Middleware\AssignmentMiddleware;
use App\Http\Middleware\RequestRedirectMiddleware;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

// Task 1
Route::get("/task-1", [AssignmentController::class, 'RequestValidation'])->middleware([AssignmentMiddleware::class]);

// Task 2
Route::get("/home", [AssignmentController::class, 'RequestRedirect'])->middleware([RequestRedirectMiddleware::class]);
Route::get("/dashboard", [AssignmentController::class, 'RequestRedirect2']);
