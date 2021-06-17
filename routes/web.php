<?php

use App\Http\Controllers\controladorRegistro;

Route::get('/','controladorNotificaciones@solo_categorias')->name('inicio');

Route::get('/registro','controladorUsuarios@index');
Route::post('/registro','controladorUsuarios@store');

Route::get('/citas', 'ControladorCitas@index');
Route::post('/citas', 'ControladorCitas@store');

Route::view('/contacto','contacto')->name('contacto');

Route::get('/login', 'controladorLogin')->name('login');
Route::view('/nosotros','nosotros')->name('nosotros');

Route::get('/notificaciones', 'controladorNotificaciones@notificaciones_generales')->name('notificaciones');

