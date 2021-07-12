<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get("/", [StudentController::class, "index"])->name("home");
Route::get("/add_student", [StudentController::class, "add_student"])->name("add-student");
Route::post("/add_student", [StudentController::class, "create_student"]);
Route::get("/edit_student/{id}", [StudentController::class, "edit_student"]);
Route::post("/edit_student/{id}", [StudentController::class, "update_student"]);
Route::get("/delete_student/{id}", [StudentController::class, "delete_student"]);

// Route::get("/add-student", function () {
//     return view("add-student");
// })->name("add-student");

// Route::get("/edit-student", function () {
//     return view("edit-student");
// })->name("edit-student");