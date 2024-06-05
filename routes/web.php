<?php
use App\Http\Controllers\ControladorClient;
use App\Http\Controllers\ControladorUsers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorTreballador;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControladorVols;
use App\Http\Controllers\ControladorReserva;

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

Route::get('/', function () {
return view('inici');
});

Route::post('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'adminAuth'], function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })-> name('dashboard-basic'); 

    Route::get('clients/crear', [ControladorClient::class, 'create'])->name('clients.create');
    Route::get('clients/esborraTot', [ControladorClient::class, 'esborraTot'])->name('clients.esborraTot');
    Route::get('users/esborraTreballadors', [ControladorUsers::class, 'esborraTreballadors'])->name('users.esborraTreballadors');
    
    Route::get('vols/crear', [ControladorVols::class, 'create'])->name('vols.create');
    Route::get('users/crear', [ControladorUsers::class, 'create'])->name('users.create');
    Route::get('reserva/crear', [ControladorReserva::class, 'create'])->name('reserva.create');
    Route::get('/users', 'App\Http\Controllers\ControladorUsers@index');
    
    Route::resource('clients', 'App\Http\Controllers\ControladorClient');
    Route::resource('vols', 'App\Http\Controllers\ControladorVols');
    Route::resource('reserva', 'App\Http\Controllers\ControladorReserva');
    Route::resource('users', 'App\Http\Controllers\ControladorUsers');
    Route::get('/pdf/reserva/{Passaport_client}/{Codi_vol}', 'PDFController@generateReservaPDF')->name('pdf.reserva');
    Route::put('/user/{id}', 'ControladorUsers@update')->name('user.update');
    Route::get('/users', [App\Http\Controllers\ControladorUsers::class, 'index']);


    Route::get('/pdf/Clients/{Passaport_client}', [PDFController::class, 'generateUnicClientPDF'])->name('pdf.client');
    Route::get('/pdf/vols/{Codi_vol}', [PDFController::class, 'generateUnicVolsPDF'])->name('pdf.vols');
    Route::get('/pdf/users/{id}', [PDFController::class, 'generateUnicUserPDF'])->name('pdf.user');
    Route::get('/pdf/reserva/{Passaport_client}/{Codi_vol}', [PDFController::class, 'generateUnicReservaPDF'])->name('pdf.reserva');

    Route::delete('reserva/{Passaport_client}/{Codi_vol}', [ControladorReserva::class, 'destroy'])->name('reserva.destroy');
    Route::get('reserva/{Passaport_client}/{Codi_vol}', [ControladorReserva::class, 'show'])->name('reserva.show');
    Route::get('reserva/{Passaport_client}/{Codi_vol}/edit', [ControladorReserva::class, 'edit'])->name('reserva.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';