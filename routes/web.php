<?php
 
 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\CustomAuthController;
 use App\Http\Controllers\PenumpangController;
 use App\Http\Controllers\PetugasController;
 use App\Http\Controllers\RuteController;
 use App\Http\Controllers\TransportasiController;
 use App\Http\Controllers\TipeTransportasiController;
 use App\Http\Controllers\PemesananController;
 use App\Http\Controllers\PembayaranController;
 use App\Http\Controllers\LaporanController;
 
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
 
Route::get('/', function(){
    // return "ok";
    return redirect()->route('dashboard');
});
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register.user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

//Master Data
Route::get('petugas', [PetugasController::class, 'index'])->name('petugas');;
Route::get('petugas-create', [PetugasController::class, 'create'])->name('petugas.create'); 
Route::post('petugas-store', [PetugasController::class, 'store'])->name('petugas.store'); 
Route::get('petugas-update', [PetugasController::class, 'update'])->name('petugas.update'); 
Route::post('petugas-updated', [PetugasController::class, 'updated'])->name('petugas.updated'); 
Route::get('petugas-delete', [PetugasController::class, 'delete'])->name('petugas.delete'); 
//
Route::get('penumpang', [PenumpangController::class, 'index'])->name('penumpang');
Route::get('penumpang-update', [PenumpangController::class, 'update'])->name('penumpang.update');
Route::post('penumpang-updated', [PenumpangController::class, 'updated'])->name('penumpang.updated');
Route::get('penumpang-delete', [PenumpangController::class, 'delete'])->name('penumpang.delete');
//
Route::get('rute', [RuteController::class, 'index'])->name('rute');
Route::get('rute-create', [RuteController::class, 'create'])->name('rute.create');
Route::post('rute-store', [RuteController::class, 'store'])->name('rute.store');
Route::get('rute-update', [RuteController::class, 'update'])->name('rute.update');
Route::post('rute-updated', [RuteController::class, 'updated'])->name('rute.updated');
Route::get('rute-delete', [RuteController::class, 'delete'])->name('rute.delete');
//
Route::get('transportasi', [TransportasiController::class, 'index'])->name('transportasi');
Route::get('transportasi-create', [TransportasiController::class, 'create'])->name('transportasi.create');
Route::post('transportasi-store', [TransportasiController::class, 'store'])->name('transportasi.store');
Route::get('transportasi-update', [TransportasiController::class, 'update'])->name('transportasi.update');
Route::post('transportasi-updated', [TransportasiController::class, 'updated'])->name('transportasi.updated');
Route::get('transportasi-delete', [TransportasiController::class, 'delete'])->name('transportasi.delete');
//
Route::get('tipe-transportasi', [TipeTransportasiController::class, 'index'])->name('tipe-transportasi');

//Transaksi
Route::get('pemesanan', [PemesananController::class, 'index'])->name('pemesanan');

//Laporan
Route::get('penumpang-report', [PenumpangController::class, 'report'])->name('report.penumpang');