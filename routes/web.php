<?php

use App\Http\Controllers\{UserController, MataPelajaranController, GuruController, MuridController, NilaiController};

Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user', [UserController::class, 'store'])->name('user.store');
Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('mata-pelajaran', [MataPelajaranController::class, 'index'])->name('mata-pelajaran.index');
Route::get('mata-pelajaran/create', [MataPelajaranController::class, 'create'])->name('mata-pelajaran.create');
Route::post('mata-pelajaran', [MataPelajaranController::class, 'store'])->name('mata-pelajaran.store');
Route::get('mata-pelajaran/{mata_pelajaran}', [MataPelajaranController::class, 'show'])->name('mata-pelajaran.show');
Route::get('mata-pelajaran/{mata_pelajaran}/edit', [MataPelajaranController::class, 'edit'])->name('mata-pelajaran.edit');
Route::put('mata-pelajaran/{mata_pelajaran}', [MataPelajaranController::class, 'update'])->name('mata-pelajaran.update');
Route::delete('mata-pelajaran/{mata_pelajaran}', [MataPelajaranController::class, 'destroy'])->name('mata-pelajaran.destroy');

Route::get('guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('guru/{guru}', [GuruController::class, 'show'])->name('guru.show');
Route::get('guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

Route::get('murid', [MuridController::class, 'index'])->name('murid.index');
Route::get('murid/create', [MuridController::class, 'create'])->name('murid.create');
Route::post('murid', [MuridController::class, 'store'])->name('murid.store');
Route::get('murid/{murid}', [MuridController::class, 'show'])->name('murid.show');
Route::get('murid/{murid}/edit', [MuridController::class, 'edit'])->name('murid.edit');
Route::put('murid/{murid}', [MuridController::class, 'update'])->name('murid.update');
Route::delete('murid/{murid}', [MuridController::class, 'destroy'])->name('murid.destroy');

Route::get('nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('nilai/create', [NilaiController::class, 'create'])->name('nilai.create');
Route::post('nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::get('nilai/{nilai}', [NilaiController::class, 'show'])->name('nilai.show');
Route::get('nilai/{nilai}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');
Route::put('nilai/{nilai}', [NilaiController::class, 'update'])->name('nilai.update');
Route::delete('nilai/{nilai}', [NilaiController::class, 'destroy'])->name('nilai.destroy');
