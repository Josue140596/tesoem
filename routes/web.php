<?php



Route::get('/', 'controladorInicio')->name('inicio');
Route::get('/contacto', 'controladorContacto')->name('contacto');
Route::get('/login', 'controladorLogin')->name('login');
Route::get('/nosotros', 'controladorNosotros')->name('nosotros');
Route::get('/notificaciones', 'controladorNotificaciones')->name('notificaciones');
