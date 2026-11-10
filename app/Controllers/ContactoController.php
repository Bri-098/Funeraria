<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    # GET /contacto
    public function index()
    {
        $data = [
            'titulo'     => 'Contacto',
            'heroTitulo' => 'Contáctanos',
            'pieCruce'   => true,
        ];

        return view('contacto/contacto_index', $data);
    }

    # POST /contacto/enviar
    public function store()
    {
        // Reglas de validación del formulario
        $reglas = [
            'nombre'   => 'required|min_length[3]|max_length[100]',
            'correo'   => 'required|valid_email|max_length[150]',
            'telefono' => 'required|regex_match[/^[0-9+\-\s()]{7,20}$/]',
            'mensaje'  => 'required|min_length[10]|max_length[1000]',
        ];

        // Mensajes de error en español
        $mensajes = [
            'nombre' => [
                'required'   => 'Escribe tu nombre completo.',
                'min_length' => 'El nombre debe tener al menos 3 letras.',
                'max_length' => 'El nombre es demasiado largo (máximo 100 caracteres).',
            ],
            'correo' => [
                'required'    => 'Escribe tu correo electrónico.',
                'valid_email' => 'Escribe un correo válido, por ejemplo nombre@correo.com.',
                'max_length'  => 'El correo es demasiado largo (máximo 150 caracteres).',
            ],
            'telefono' => [
                'required'    => 'Escribe tu número de teléfono.',
                'regex_match' => 'El teléfono solo puede llevar números, espacios, +, - y paréntesis (de 7 a 20 caracteres).',
            ],
            'mensaje' => [
                'required'   => 'Escribe tu mensaje.',
                'min_length' => 'El mensaje debe tener al menos 10 caracteres.',
                'max_length' => 'El mensaje es demasiado largo (máximo 1000 caracteres).',
            ],
        ];

        // Volvemos a la página desde donde se envió el formulario (inicio o contacto)
        $volver = previous_url() . '#formulario';

        if (! $this->validate($reglas, $mensajes)) {
            // Regresamos con los errores y lo que la persona ya había escrito
            return redirect()->to($volver)->withInput()->with('errores', $this->validator->getErrors());
        }

        // Por ahora NO se guarda nada ni se envía correo (se hará en la siguiente etapa).
        return redirect()->to($volver)->with('exito', 'Gracias. Tu mensaje pasó la validación. Por ahora es una versión de demostración y no se guardó ni se envió.');
    }
}
