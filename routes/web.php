<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/property/{id}',[PropertyController::class,'single'])->name('property_single');
    Route::get('/propertise',[PropertyController::class,'index'])->name('propertise');
    Route::get('/page/{slug}',[PageController::class,'single'])->name('page');
    Route::post('/property-inquiry/{id}',[ContactController::class,'propertyInquiry'])->name('property-inquiry');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[DashboardController::class,'Index'])->name('dashboard-index');
    Route::get('/admin/propertise',[DashboardController::class,'propertise'])->name('dashboard-propertise');
    Route::get('/admin/addproperty',[DashboardController::class,'addProperty'])->name('add-property');
    Route::post('/admin/createProperty',[DashboardController::class,'createProperty'])->name('create-property');
    Route::get('/admin/edit-property/{id}',[DashboardController::class,'editProperty'])->name('edit-property');
    Route::get('/admin/delete-media/{id}',[DashboardController::class,'deleteMedia'])->name('delete-media');
});
require __DIR__.'/auth.php';
