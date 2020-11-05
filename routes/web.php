<?php

use App\Http\Controllers\MenteeController;
use App\Http\Controllers\MentorController;
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
//     return view('welcome');
// });

// // GET
// Route::get('/', [MenteeController::class, 'index'])->name('index'); //memanggil function index() dalam MenteeController.class
// Route::get('mentee/{mentee}', [MenteeController::class, 'edit'])->name('mentee.edit'); //memanggil function edit() dalam MenteeController.class

// // VIEW
// Route::view('addMentee', 'mentee.addMentee')->name('mentee.create');

// // ADD
// Route::post('create', [MenteeController::class, 'store'])->name('mentee.store');

// // UPDATE
// Route::patch('update/{mentee}', [MenteeController::class, 'update'])->name('mentee.update');

// // DELETE
// Route::delete('delete/{mentee}', [MenteeController::class, 'destroy'])->name('mentee.destroy');

//biar gak perlu pake localhost/mentee
Route::get('/', function(){
    return redirect()->route('mentor.index');
});

// // GET
// Route::get('/', [MentorController::class, 'index'])->name('mentor.index'); //memanggil function index() dalam MenteeController.class
// Route::get('mentor/{mentor}', [MentorController::class, 'edit'])->name('mentor.edit'); //memanggil function edit() dalam MenteeController.class
Route::get('/listMentoring', [MenteeController::class, 'list'])->name('listView');

// // VIEW
// Route::view('listView', 'mentor.addMentor')->name('mentor.create');

// // ADD
// Route::post('create', [MentorController::class, 'store'])->name('mentor.store');

// // UPDATE
// Route::patch('update/{mentor}', [MentorController::class, 'update'])->name('mentor.update');

// // DELETE
// Route::delete('delete/{mentor}', [MentorController::class, 'destroy'])->name('mentor.destroy');

// RESOURCE - untuk menggenerate otomatis function dalam MenteeController
Route::resource('mentee', MenteeController::class);

Route::resource('mentor', MentorController::class);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
