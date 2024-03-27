<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\voyager\organizationsController;
use App\Http\Controllers\voyager\AssociateController;

use App\Http\Controllers\OrganizationRouteController;
use App\Http\Controllers\HomeController;

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

Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::post('search', [HomeController::class, 'search'])->name('search');

Route::get('maintenance', function () {
    return view('errors.maintenance');
})->name('errors.maintenance');

// Route::get('/associates/{associate}',[AssociateController::class, 'showDetails'] )->name('associates.showDetails');
    
Route::controller(AssociateController::class)->group(function(){
    Route::get('associates/{id}','showDetails')->name('associates.showDetails');
});

Route::group(['prefix' => 'admin', 'middleware' => 'desarrollo.creativo'], function () {
    Voyager::routes();

    Route::controller(organizationsController::class)->group(function(){
        Route::get('organizations/{organization}/toggle','toggleActive')->name('organizations.toggleActive');
    });
    
    Route::controller(OrganizationRouteController::class)->group(function(){
        Route::get('organizations/{organization}/routes','edit')->name('organizations.routes.edit')->middleware('auth');
        Route::put('organizations/{organization}/routes','update')->name('organizations.routes.update')->middleware('auth');
        Route::delete('organizations/{organization}/routes/{route}','destroy')->name('organizations.routes.destroy')->middleware('auth');
        // para decargar o ver el archivo
        Route::get('organizations/{organization}/routes/{route}/download','download')->name('organizations.routes.download')->middleware('auth');
    });

    Route::controller(AssociateController::class)->group(function(){
        Route::get('associates/{id}/qr','showQrCode')->name('associates.showQrCode')->middleware('auth');    
    });
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
