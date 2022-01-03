<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\admin\LocationController;
use App\Http\Controllers\admin\UserController;

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
    Route::get('/page/{slug}',[HomeController::class,'single'])->name('page');
    Route::post('/property-inquiry/{id}',[ContactController::class,'propertyInquiry'])->name('property-inquiry');
    Route::get('/currency/{code}',[HomeController::class,'currencyChange'])->name('currency');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[DashboardController::class,'Index'])->name('dashboard-index');
    Route::get('/admin/propertise',[DashboardController::class,'propertise'])->name('dashboard-propertise');
    Route::get('/admin/addproperty',[DashboardController::class,'addProperty'])->name('add-property');
    Route::post('/admin/createProperty',[DashboardController::class,'createProperty'])->name('create-property');
    Route::get('/admin/edit-property/{id}',[DashboardController::class,'editProperty'])->name('edit-property');
    Route::get('/admin/delete-media/{id}',[DashboardController::class,'deleteMedia'])->name('delete-media');
    Route::post('/admin/update-property/{id}',[DashboardController::class,'updateProperty'])->name('update-property');
    Route::get('/admin/delete-property/{id}',[DashboardController::class,'deleteProperty'])->name('delete-property');

    //Location Crud
   // Route::get('/admin/locaiton',[LocationController::class,'index'])->name('location');
    //Route::get('/admin/add-locaiton',[LocationController::class,'addLocation'])->name('add-location');
   // Route::post('/admin/create-locaiton',[LocationController::class,'createLocation'])->name('create-location');
   // Route::get('/admin/edit-locaiton/{id}',[LocationController::class,'editLocation'])->name('edit-location');
   // Route::post('/admin/update-location/{id}',[LocationController::class,'updateLocation'])->name('update-location');
   // Route::get('/admin/delete-location/{id}',[LocationController::class,'deleteLocation'])->name('delete-location');
    Route::resource('admin-location',LocationController::class);

    //Page
    //Route::get('admin/page',[HomeController::class,'index'])->name('admin-page');
    Route::resource('admin-page',PageController::class);

    //USER CRUD
    Route::resource('admin-user',UserController::class);
});
require __DIR__.'/auth.php';
