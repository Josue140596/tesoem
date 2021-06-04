<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloRegistro;

class controladorRegistro extends Controller{
    public function index(){
        return view('registro');
    }
    
    public function store(Request $request){
        $registro=request()->all();
        if($request->hasFile('foto')){
            
            $file=$request->file('foto');
            $nombre_imagen = time().$file->getClientOriginalName();
            $file->move(public_path().'/perfiles/',$nombre_imagen);
        }
        modeloRegistro::create([
            'nombre'=> $registro['nombre'],
            'a_pat'=> $registro['a_pat'],
            'a_mat'=> $registro['a_mat'],
            'fecha_nacimiento'=> $registro['fecha_nacimiento'],
            'tipo_usuario'=> $registro['tipo_usuario'],
            'direccion'=> $registro['direccion'],
            'cod_postal'=> $registro['cod_postal'],
            'localidad'=> $registro['localidad'],
            'pais'=> $registro['pais'],
            'telefono'=> $registro['telefono'],
            'email'=> $registro['email'],
            'password'=> bcrypt($registro['password']),
            'semestre'=> $registro['semestre'],
            'foto'=> $nombre_imagen
        ]);
        return back();

    }


}
