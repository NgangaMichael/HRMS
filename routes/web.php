<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Patients;

Route::get('/', function () {
    return redirect('/names');
});

Route::resource("/names", Patients::class);

Route::get('/names/{id}/service', [Patients::class, 'service'])->name('names.service');
Route::post('/saveservice', [Patients::class, 'saveservice'])->name('saveservice');