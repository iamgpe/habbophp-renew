<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\ConfigController;

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

$config = [
    'config' => ConfigController::getConfig(),
];

Route::middleware(['auth', 'maintenance', 'guest'])->group(function () {
    Route::post('/', 'IndexController@login')->name('login')->withoutMiddleware('auth');
    Route::get('/', 'IndexController@show')->name('index')->withoutMiddleware('auth');
    Route::get('/?error=invalidcreds', 'IndexController@show')->name('idxinvalid')->withoutMiddleware('auth');
    
    Route::get('/me', 'Me\MeController@show')->name('me')->withoutMiddleware('guest');
});

Route::get('/maintenance', function() {
	return view('maintenance', $config);
})->name('maintenance');

Route::post('/maintenance', 'IndexController@login');

Route::get('/maintenance?error=invalidcreds', function() {
	return view('maintenance', $config);
})->name('maintenanceinvalid');

Route::get('/maintenance?error=invalidfields', function() {
	return view('maintenance', $config);
})->name('maintenanceinv2');

Route::get('/disconnect', 'IndexController@logout');