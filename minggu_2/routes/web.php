<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

Route::get('/user', [ManagementUserController::class,'index'])->name('user.index');
Route::post('/user', [ManagementUserController::class, 'store'])->name('user.store');
Route::get('/user/create', [ManagementUserController::class, 'create'])->name('user.create');
Route::get('/user/{user}', [ManagementUserController::class, 'show'])->name('user.show');
Route::put('/user/{user}', [ManagementUserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [ManagementUserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{user}/edit', [ManagementUserController::class, 'edit'])->name('user.edit');

Route::get("/home", function() {
    return view("home");
});

Route::get("/", function() {
    return view("welcome");
});
// Route::resource('/user', [ManagementUserController::class,'index']);
// metode name dapat digunakan untuk awalan setiap 
// nama route dalam group dengan string yang diberikan
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });