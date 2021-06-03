<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorNotificaciones extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $notificaciones = ['notificaciones' => 'Hola desde el controlador notificaciones'];
        return view('notificaciones', compact('notificaciones'));        
    }
}
