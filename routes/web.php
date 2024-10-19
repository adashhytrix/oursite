<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\FrontentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SerivcesController;

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

Route::get('/', [FrontentController::class,'index'])->name('home');
Route::get('/About', [FrontentController::class,'about'])->name('about');
Route::get('/Services', [FrontentController::class,'services'])->name('services');
Route::get('/Contact Us', [FrontentController::class,'contact_us'])->name('contact_us');
Route::get('/service', [FrontentController::class,'service'])->name('service');
Route::get('/sendmail', [FrontentController::class,'sendWelcomeEmail']);


Route::get('/admin/login', [AdminController::class, 'login'])->name('adminLogin');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::prefix('admin')->group(function () {
    // Define your admin routes here
  

   // Route::get('/', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    
  
    Route::post('/register', [AdminController::class, 'registerstore'])->name('admin.registerstore');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/service-list', [SerivcesController::class, 'service_list'])->name('admin.service_list');
        Route::get('/service-add', [SerivcesController::class, 'add'])->name('admin.add');
        Route::get('/service-edit/{id}', [SerivcesController::class, 'edit'])->name('admin.servicEedit');
        Route::post('/service-update/{id}', [SerivcesController::class, 'update'])->name('admin.servicupdate');
        Route::get('/service-servicDelete/{id}', [SerivcesController::class, 'delete'])->name('admin.servicDelete');
        
        Route::post('/service-store', [SerivcesController::class, 'store'])->name('admin.store');

 
    });
   
   
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});