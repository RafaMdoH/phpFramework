<?php
// Cargar todo lo necesario
require __DIR__ . '/../vendor/autoload.php';

// var_dump(__DIR__ . '/../vendor/autoload.php');

// Creamos una instacia de nuestra clase request
$request = new App\Http\Request;
// Ejecutamos el metodo enviar de dicha clase 
$request->send();