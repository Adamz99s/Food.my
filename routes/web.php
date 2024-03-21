<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Stripecontroller;

Route::get('/', function () {
    return view('welcome');
});

//spatie validation//
Route::get('dashboard', [HomeController::class, 'index'])->middleware('auth')->name('home');

/*Routing based on controller method */
Route::get('Ipoh',[Controller::class,'ipoh']);
Route::get('Bookingindex',[Controller::class,'Bookingindex']);
Route::get('MikerPizza',[Controller::class,'mikerpizza']);
Route::get('Cart',[Controller::class,'cart']);

//Stripe Implementation//


Route::get('/', [Stripecontroller::class,'index'])->name('index');
Route::post('/checkout',[Stripecontroller::class, 'checkout'])->name('checkout');
Route::get('/success',[Stripecontroller::class,'success'])->name('success');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware'=> ['auth', 'admin']], function(){
    Route::get('manage_user', [AdminController::class, 'viewuser'])->name('admin.manage_user');
    Route::get('/admin/update-role/{id}', [AdminController::class, 'updateRole'])->name('admin.updateRole');
    Route::get('/admin/revert-role/{id}', [AdminController::class, 'revertRole'])->name('admin.revertRole');
    Route::get('/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.deleteUser');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  
});

Route::view('welcome', 'welcome')
->middleware(['auth', 'verified'])
->name('welcome');

require __DIR__.'/auth.php';
