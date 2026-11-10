<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    # GET /
    public function index()
    {
        $data = [
            'titulo'     => 'Inicio',
            'heroTitulo' => 'Estamos con usted en cualquier momento.',
            'heroGrande' => true, // en el inicio el título del encabezado es más largo
            'pieCruce'   => true, // la tarjeta del formulario cruza hacia el pie oscuro
        ];

        return view('home/home_index', $data);
    }
}
