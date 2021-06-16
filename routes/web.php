<?php

use App\Http\Controllers\controladorRegistro;

Route::view('/','inicio')->name('inicio');

Route::get('/registro','controladorUsuarios@index');
Route::post('/registro','controladorUsuarios@store');

Route::view('/contacto','contacto')->name('contacto');
Route::get('/citas', 'ControladorCitas')->name('citas');
Route::get('/login', 'controladorLogin')->name('login');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::get('/notificaciones', 'controladorNotificaciones')->name('notificaciones');

