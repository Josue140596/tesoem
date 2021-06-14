<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorCitas extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $citas = ['citas' => 'Hola desde el controlador notificaciones'];
        return view('citas', compact('citas'));
    }
}
