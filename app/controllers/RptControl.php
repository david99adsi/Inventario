<?php

class RptControl extends Controlador
{
    public function __construct()
    {
        $this->controlmodelo = $this->modelo('ControlModelo');
    }

    public function index()
    {
        $datos = $this->controlmodelo->obtenerControl();
        $this->vista('reportes/totalControl', $datos);
    }
}