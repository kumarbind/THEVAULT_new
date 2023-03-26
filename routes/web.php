<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\PropertiesCoontroller;
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
//     return view('vault');
// });

Route::get('/', function () {
    return view('vault');
})->name('vault');


Route::get('/addProperty', [PropertiesCoontroller::class, 'index'])->name('addProperty');
Route::post('/Submitproperty', [PropertiesCoontroller::class, 'store'])->name('Submitproperty');
Route::get('propertyDetails/{propertyname?}', [PropertiesCoontroller::class, 'findDetails'])->name('propertyDetails');
Route::get('/addpropertyform', function () {return view('admin.addpropertyform'); });
Route::post('searchfilter', [PropertiesCoontroller::class, 'searchfilter'])->name('searchfilter');


Route::get('/addDeveloper', [DeveloperController::class, 'index'])->name('addDeveloper');
Route::post('/editDeveloper', [DeveloperController::class, 'editDeveloper'])->name('editDeveloper');
Route::post('/sumintDeveloper', [DeveloperController::class, 'store'])->name('sumintDeveloper');
Route::get('/developers/{developername?}', [DeveloperController::class, 'finddeveloper'])->name('developers');
Route::get('/adddeveloperform', function () {return view('admin.adddeveloperform'); });
// Route::post('/check',   [DeveloperController::class, 'store'])->name('check');

Route::get('/admin', function () {return view('admin.dashboard'); });
Route::get('/search', [DeveloperController::class, 'search'])->name('search');
Route::post('/filterSearch', [DeveloperController::class, 'filterSearch'])->name('filterSearch');
Route::post('/searchProperty',[DeveloperController::class, 'searchProperty'])->name('searchProperty');
Route::get('/aboutus', function () {return view('aboutus'); });
Route::get('/news', function () {return view('news'); });
Route::get('/admin', function () {return view('admin.home'); });
Route::post('/loging', [App\Http\Controllers\HomeController::class, 'index'])->name('loging');
Route::post('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');


Route::get('/laguage/{lag?}', [App\Http\Controllers\HomeController::class, 'index'])->name('laguage');
Route::post('/personal', [App\Http\Controllers\PersonalConsultController::class, 'store'])->name('personal');
Route::post('/first_filter', [App\Http\Controllers\FilterSearchController::class, 'filtersearch'])->name('first_filter');