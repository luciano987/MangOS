<?php

namespace App\Controllers;

class TestController
{
    public function __construct()
    {
        // Inicialización del controlador

        echo "TestController initialized";
    }

    public function index()
    {
        // Acción por defecto
        echo "TestController index method called";
    }
}

