<?php

namespace App\Http;

class Response
{
    // trabajaremos con vistas pero puedes responder array, json, pdf
    protected $view;

    public function __construct($view)
    {
        // home, contactos
        $this->view = $view
    }

    public getView()
    {
        return $this->view;
    }

    public send()
    {
        $view = $thi->getView();

        // la funcion file_get_contents nos permite obtener el contenido de un archivo
        $content = file_get_contents(__DIR__."/../../views/$view.php");

        require __DIR__."/../../views/layout.php";
    }
}