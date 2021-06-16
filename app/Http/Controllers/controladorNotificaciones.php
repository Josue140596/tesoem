<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeloNotificaciones;
use App\modeloCategoriasNotificaciones;
use Illuminate\Contracts\Cache\Store;

class controladorNotificaciones extends Controller
{

    public function index(){            //Creamos un metodo index que soló nos retornará la vista registro.
    
        
    }

    public function store(Request $request){            // Creacion del metodo Store (llenado de datos) con la variable request para recibir. quiza para añadir notificaciones
        $registro=request()->all();                 // todos los datos.
        //tbh copy paste
        if($request->hasFile('foto')){              // Creamos una comparación para hacer una validación para nuestra foto.
            
            $file=$request->file('foto');
            $nombre_imagen = time().$file->getClientOriginalName();  // Le asignamos la fecha de subida de nuestro archivo.
            $file->move(public_path().'/perfiles/',$nombre_imagen);  // Usamos el metodo move para darle un espacio de guardado de a nuestra imagen.
        }

    }

    public function categorias_slide(){             //Quiza para ordenar por modificaciones/buscar por categoria

    }

    public function notificaciones_generales(){                                         // metodo para llamar las notificaciones en general
        $notificaciones = modeloNotificaciones::all();                                  // todos los datos de notificaciones.
        $catnotificaciones = modeloCategoriasNotificaciones::all();                     // todos los datos de categorias de notificaciones.
        return view('notificaciones', compact('notificaciones','catnotificaciones'));   // regresamos los datos a la vista de notificaciones.

    }

    public function notificaciones_alumnos(){                                           // metodo para llamar las notificaciones de alumnos

    }

    public function notificaciones_profesores(){                                        // metodo para llamar las notificaciones de profesores
        
    }
}
