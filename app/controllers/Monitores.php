<?php
/*
Controlador de la interaccion con el cliente de la tienda
@author Walter Arias
@version 0.1
*/
class Monitores extends Controlador
{
    public function __construct()
    {
        $this->monitoresmodelo = $this->modelo('MonitoresModelo');
    }

    /*
     Método que muestra la VISTA correspondiente
     @param N/A
     @return /views/ClienteVista
     @throws Respuesta Negativa renderizando la vista
     */
    public function index()
    {
        $this->vista('Monitores/MonitoresVista');
    }
    
    
    /*
    Método que consulta la BD para poder llenar el DATATABLE
    @param N/A
    @return Archivo Json con todos los clientes
    @throws Respuesta Negativa de la base de datos
    */
    public function llenarMonitores()
    {
        $datos = $this->monitoresmodelo->obtenerMonitores();
        echo json_encode($datos);
    }


    /*
    Método que Crea o inserta un cliente en la base de datos, usando el modelo correspondiente
    @param los datos que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function crearMonitores()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'origen_propiedad' => $_POST['origen_propiedad'],
                'stock_estado' => $_POST['stock_estado'],
                'uso_tipoUnidad' => $_POST['uso_tipoUnidad'],
                'ubicacion_ciudad' => $_POST['ubicacion_ciudad'],
                'ubicacion_sede' => $_POST['ubicacion_sede'],
                'ce_placa' => $_POST['ce_placa'],
                'ce_marca' => $_POST['ce_marca'],
                'ce_tecnologia' => $_POST['ce_tecnologia'],
                'ce_modelo' => $_POST['ce_modelo'],
                'ce_serial' => $_POST['ce_serial'],
                'usuario_cedula' => $_POST['usuario_cedula'],
                'usuario_responsable' => $_POST['usuario_responsable'],
                'usuario_cargo' => $_POST['usuario_cargo'],
                'usuario_dependencia' => $_POST['usuario_dependencia'],
                'usuario_ubicacion' => $_POST['usuario_ubicacion']
        ];
            $datos = $this->monitoresmodelo->crearMonitores($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'id' => $_POST['id'],
                'origen_propiedad' => $_POST['origen_propiedad'],
                'stock_estado' => $_POST['stock_estado'],
                'uso_tipoUnidad' => $_POST['uso_tipoUnidad'],
                'ubicacion_ciudad' => $_POST['ubicacion_ciudad'],
                'ubicacion_sede' => $_POST['ubicacion_sede'],
                'ce_placa' => $_POST['ce_placa'],
                'ce_marca' => $_POST['ce_marca'],
                'ce_tecnologia' => $_POST['ce_tecnologia'],
                'ce_modelo' => $_POST['ce_modelo'],
                'ce_serial' => $_POST['ce_serial'],
                'usuario_cedula' => $_POST['usuario_cedula'],
                'usuario_responsable' => $_POST['usuario_responsable'],
                'usuario_cargo' => $_POST['usuario_cargo'],
                'usuario_dependencia' => $_POST['usuario_dependencia'],
                'usuario_ubicacion' => $_POST['usuario_ubicacion']
                    
        ];
            $datos = $this->monitoresmodelo->actualizarMonitores($datos);
            echo json_encode($datos);
        }
    }
   


    /*
    Método que Elimina un monitor en la base de datos, usando el modelo correspondiente
    @param El id del cliente que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function eliminarMonitores()
    {
        $datos =[
            'id' => $_POST['id']
        ];

        $datos = $this->monitoresmodelo->eliminarMonitores($datos);
        echo json_encode($datos);
    }
    public function listarMonitores()
    {
        $datos = $this->equiposmodelo->obtenerMonitores();
        $this->vista('Monitores/MonitoresVista.php');
    }
}