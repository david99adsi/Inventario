<?php

class Control extends Controlador
{
    public function __construct()
    {
        $this->controlmodelo = $this->modelo('ControlModelo');
    }
    /*llamo la vista donde tengo el formulario*/
    public function index()
    {
        $this->vista('Control/ControlVista');
    }

    public function llenarControl()
    {
        $datos = $this->controlmodelo->obtenerControl();
        echo json_encode($datos);
    }

    public function crearControl()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'identificacion' => $_POST['identificacion'],
                'fechai' => $_POST['fechai'],   
                'horae' => $_POST['horae'],
                'horas' => $_POST['horas'],
        ];
            $datos = $this->controlmodelo->crearControl($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'id' => $_POST['id'],
                'identificacion' => $_POST['identificacion'],
                'fechai' => $_POST['fechai'],
                'horae' => $_POST['horae'],
                'horas' => $_POST['horas'],
                    
        ];
            $datos = $this->controlmodelo->actualizarControl($datos);
            echo json_encode($datos);
        }
    }

    public function eliminarControl()
    {
        $datos =[
            'id' => $_POST['id']
        ];

        $datos = $this->controlmodelo->eliminarControl($datos);
        echo json_encode($datos);
    }
}