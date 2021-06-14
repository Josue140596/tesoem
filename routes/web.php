<?php

use App\Http\Controllers\controladorRegistro;


Route::view('/','inicio')->name('inicio');

//Route::get('/registro','controladorUsuarios@index');
//Route::post('/registro','controladorUsuarios@store');

Route::get('/registro','controladorUsuarios2@index');
Route::post('/registro','controladorUsuarios2@store');

Route::get('/contacto', 'controladorContacto')->name('contacto');
Route::get('/login', 'controladorLogin')->name('login');
Route::get('/nosotros', 'controladorNosotros')->name('nosotros');
Route::get('/notificaciones', 'controladorNotificaciones')->name('notificaciones');

