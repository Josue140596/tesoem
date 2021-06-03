<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorNosotros extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $nosotros = ['nosotros' => 'Hola desde el controlador Nosotros'];
        return view('nosotros', compact('nosotros'));        
    }
}
