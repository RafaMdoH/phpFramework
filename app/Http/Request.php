<?php

namespace App\Http;

class Request
{
    // propiedad que nos ayuda con los segmentos
    protected $segments = [];
    // para saber que controlador requiere el usuairo
    protected $controller;
    // con que metodo vamos a responder
    protected $method;

    // nuestro metodo magico constructor
    public function __construct() 
    {
        // basic.test/servicios/index

        // comvertimos un string a un array 
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        // comentar el llamado al metodo send() en el index
        // var_dump($_SERVER['REQUEST_URI']);
        // var_dump(explode('/',$_SERVER['REQUEST_URI']));

        $this->setController();
        $this->setMethod();
    }
    
    public function setController()
    {
        $this->controller = empty($this->segments[1])
            ? 'home'
            : $this->segments[1];
    }

    public function setMethod()
    {
        $this->method = empty($this->segments[2])
            ? 'index'
            : $this->segments[2];
    }

}