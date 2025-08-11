<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\SubmitController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});



Route::get('/employee', [EmployeeController::class, 'employee']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/employees', [EmployeeController::class, 'list']);

Route::post('/submit-contributor-form', [SubmitController::class, 'submitContributorForm']);


// Route::get('/contributor-list', [ListController::class, 'contributor_list']);
// Route::get('/details/{id}', [ListController::class, 'details'])->name('details.id');
                                            
Route::controller(ListController::class)->group(function () {
    Route::get('/contributor-list', 'contributor_list');
    Route::get('/details/{id}', 'details')->name('details.id');
    Route::get('/remove/{id}', 'removeEntry')->name('remove.id');
    Route::get('/details/{id}', 'details')->name('comment.id');
});

Route::post('/add-comment', [CommentController::class, 'add_comment']);