<?php

namespace App\Controllers;

class ServiciosController extends BaseController
{
    # GET /servicios
    public function index()
    {
        // Por ahora los servicios van en un arreglo (más adelante vendrán de la tabla "servicios").
        $servicios = [
            [
                'nombre'      => 'Velación',
                'imagen'      => 'velacion',
                'descripcion' => 'Contamos con capillas de velación diseñadas para brindar un entorno cálido y sereno, donde las familias pueden reunirse para honrar la vida de sus seres queridos. Nuestro equipo le acompaña en cada detalle con atención personalizada.',
            ],
            [
                'nombre'      => 'Cremación',
                'imagen'      => 'cremacion',
                'descripcion' => 'Ofrecemos el servicio de cremación con total respeto y dignidad. Le orientamos en los trámites y le entregamos las cenizas en una urna, para que pueda despedirse en el momento y lugar que usted decida.',
            ],
            [
                'nombre'      => 'Inhumación',
                'imagen'      => 'inhumacion',
                'descripcion' => 'Nos encargamos del traslado, la ceremonia y la inhumación en el panteón de su elección. Coordinamos cada paso para que su familia solo se ocupe de acompañar a su ser querido.',
            ],
            [
                'nombre'      => 'Previsión',
                'imagen'      => 'prevision',
                'descripcion' => 'Planee con anticipación y evite decisiones difíciles en un momento de dolor. Nuestros planes de previsión dan tranquilidad a su familia y dejan todo resuelto con respeto a sus deseos.',
            ],
        ];

        $data = [
            'titulo'      => 'Servicios',
            'heroTitulo'  => 'Servicios',
            'servicios'   => $servicios,
        ];

        return view('servicios/servicios_index', $data);
    }
}
