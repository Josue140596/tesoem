<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloContacto;

class controladorContacto extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $contacto = ['contacto' => 'Hola desde el controlador contacto'];
        return view('contacto', compact('contacto'));
    }
}
