<?php

namespace App\Controllers;

class NosotrosController extends BaseController
{
    # GET /nosotros
    public function index()
    {
        $data = [
            'titulo'     => 'Nosotros',
            'heroTitulo' => 'Nosotros',
        ];

        return view('nosotros/nosotros_index', $data);
    }
}
