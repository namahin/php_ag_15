<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
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

// Task 1
Route::get("/task-1", [AssignmentController::class, 'RequestValidation'])->middleware([AssignmentMiddleware::class]);

// Task 2
Route::get("/home", [AssignmentController::class, 'RequestRedirect'])->middleware([RequestRedirectMiddleware::class]);
Route::get("/dashboard", [AssignmentController::class, 'RequestRedirect2']);

//Task 3: Global Middleware
//Global Middleware Created "LogRequestGlobalMiddleware.php"

//Task 4: Route Middleware
Route::middleware('AuthMiddleware')->group(function (){
    Route::get("/profile", [AssignmentController::class, 'AuthAction']);
    Route::get("/settings", [AssignmentController::class, 'AuthAction']);
});

//Task 5: Controller
Route::resource('product', ProductController::class);

//Task 6: Single Action Controller
Route::get("/submit", ContactController::class);

//Task 7: Resource Controller


//Task 8: Blade Template Engine
Route::get('/', function () {
    return view('welcome');
});
