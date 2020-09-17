<?php
/*
Controlador de la interaccion con el cliente de la tienda
@author Walter Arias
@version 0.1
*/
class Usuario extends Controlador
{
    public function __construct()
    {
        $this->usuariomodelo = $this->modelo('UsuarioModelo');
    }

    /*
     Método que muestra la VISTA correspondiente
     @param N/A
     @return /views/ClienteVista
     @throws Respuesta Negativa renderizando la vista
     */
    public function index()
    {
        $this->vista('Usuario/UsuarioVista');
    }
    
    
    /*
    Método que consulta la BD para poder llenar el DATATABLE
    @param N/A
    @return Archivo Json con todos los clientes
    @throws Respuesta Negativa de la base de datos
    */
    public function llenarUsuario()
    {
        $datos = $this->usuariomodelo->obtenerUsuario();
        echo json_encode($datos);
    }


    /*
    Método que Crea o inserta un cliente en la base de datos, usando el modelo correspondiente
    @param los datos que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function crearUsuario()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'cedula' => $_POST['cedula'],
                'responsable' => $_POST['responsable'],
                'dependencia' => $_POST['dependencia'],
                'cargo' => $_POST['cargo'],
                'sede' => $_POST['sede'],
                'ubicacion' => $_POST['ubicacion'],
                'tipo_unidad' => $_POST['tipo_unidad'],
                'ciudad' => $_POST['ciudad'],
                'celular' => $_POST['celular'],
                'mdi_acdj' => $_POST['mdi_acdj'],
                'mdy_acdj' => $_POST['mdy_acdj'],
                'itmd_acdj' => $_POST['itmd_acdj'],
                'dms_acdj' => $_POST['dms_acdj']
        ];
            $datos = $this->usuariomodelo->crearUsuario($datos);
            echo json_encode($datos);
        } else { //opcion para la actualizacion de los datos
            $datos = [
                'id' => $_POST['id'],
                'cedula' => $_POST['cedula'],
                'responsable' => $_POST['responsable'],
                'dependencia' => $_POST['dependencia'],
                'cargo' => $_POST['cargo'],
                'sede' => $_POST['sede'],
                'ubicacion' => $_POST['ubicacion'],
                'tipo_unidad' => $_POST['tipo_unidad'],
                'ciudad' => $_POST['ciudad'],
                'celular' => $_POST['celular'],
                'mdi_acdj' => $_POST['mdi_acdj'],
                'mdy_acdj' => $_POST['mdy_acdj'],
                'itmd_acdj' => $_POST['itmd_acdj'],
                'dms_acdj' => $_POST['dms_acdj']
                
        ];
            $datos = $this->usuariomodelo->actualizarUsuario($datos);
            echo json_encode($datos);
        }
    }
   


    /*
    Método que Elimina un cliente en la base de datos, usando el modelo correspondiente
    @param El id del cliente que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function eliminarUsuario()
    {
        $datos =[
            'id' => $_POST['id']
        ];

        $datos = $this->usuariomodelo->eliminarUsuario($datos);
        echo json_encode($datos);
    }

    public function listarUsuario()
    {
        $datos = $this->usuariomodelo->obtenerUsuario();
        $this->vista('Usuario/UsuarioVista.php');
    }
}