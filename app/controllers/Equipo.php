<?php
/*
Controlador de la interaccion con el equipos del inventario
@author Jhon David Valencia Montoya
@version 3.0
*/
class Equipo extends Controlador
{
    public function __construct()
    {
        $this->equipomodelo = $this->modelo('EquipoModelo');
    }

    /*
     Método que muestra la VISTA correspondiente
     @param N/A
     @return /views/ClienteVista
     @throws Respuesta Negativa renderizando la vista
     */
    public function index()
    {
        $this->vista('Equipo/EquipoVista');
    }
    
    
    /*
    Método que consulta la BD para poder llenar el DATATABLE
    @param N/A
    @return Archivo Json con todos los clientes
    @throws Respuesta Negativa de la base de datos
    */
    public function llenarEquipo()
    {
        $datos = $this->equipomodelo->obtenerEquipo();
        echo json_encode($datos);
    }


    /*
    Método que Crea o inserta un cliente en la base de datos, usando el modelo correspondiente
    @param los datos que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function crearmodificarEquipo()
    {
        $id=$_POST['id'];
        
        if (empty($id)) {
            $datos = [
                'item'=> $_POST['item'],
                'origen_propiedad' => $_POST['origen_propiedad'],
                'origen_estado' => $_POST['origen_estado'],
                'uso_tipoUnidad' => $_POST['uso_tipoUnidad'],
                'ubicacion_ciudad' => $_POST['ubicacion_ciudad'],
                'ubicacion_sede' => $_POST['ubicacion_sede'],
                'ce_placa' => $_POST['ce_placa'],
                'ce_serie' => $_POST['ce_serie'],
                'ce_tipo' => $_POST['ce_tipo'],
                'ce_marca' => $_POST['ce_marca'],
                'ce_modelo' => $_POST['ce_modelo'],
                'ce_marcaProcesador' => $_POST['ce_marcaProcesador'],
                'ce_tipoProcesador' => $_POST['ce_tipoProcesador'],
                'ce_velocidadProcesador' => $_POST['ce_velocidadProcesador'],
                'ce_memoria' => $_POST['ce_memoria'],
                'ce_dd' => $_POST['ce_dd'],
                'ce_nombrePc' => $_POST['ce_nombrePc'],
                'ce_macAdreesEthernet' => $_POST['ce_macAdreesEthernet'],
                'ce_macAdreesWifi' => $_POST['ce_macAdreesWifi'],
                'ce_hojaDeVida' => $_POST['ce_hojaDeVida'],
                'ce_sistemaOperativo' => $_POST['ce_sistemaOperativo'],
                'usuario_cedula' => $_POST['usuario_cedula'],
                'usuario_responsable' => $_POST['usuario_responsable'],
                'usuario_cargo' => $_POST['usuario_cargo'],
                'usuario_dependencia' => $_POST['usuario_dependencia'],
                'usuario_ubicacion' => $_POST['usuario_ubicacion'],
                'da_fecha' => $_POST['da_fecha'],
                'da_estado' => $_POST['da_estado'],
                'da_agenteDeRed' => $_POST['da_agenteDeRed'],
                'ad_antivirus' => $_POST['ad_antivirus'],
                'monitor_item' => $_POST['monitor_item'],
                'monitor_placa' => $_POST['monitor_placa'],
                'monitor_marca' => $_POST['monitor_marca'],
                'monitor_modelo' => $_POST['monitor_modelo'],
                'monitor_serie' => $_POST['monitor_serie'],
                'telefono_item' => $_POST['telefono_item'],
                'telefono_ext' => $_POST['telefono_ext'],
                'telefono_modelo' => $_POST['telefono_modelo'],
                'telefono_serie' => $_POST['telefono_serie'],
                'telefono_numeroPlaca' => $_POST['telefono_numeroPlaca'],
                'oh_item' => $_POST['oh_item'],
                'oh_otros' => $_POST['oh_otros'],
                'maribel_observaciones' => $_POST['maribel_observaciones'],
                'maribel_factura' => $_POST['maribel_factura'],
                'maribel_proveedor' => $_POST['maribel_proveedor'],
                'maribel_fechaInicio' => $_POST['maribel_fechaInicio'],
                'maribel_fechaFinal' => $_POST['maribel_fechaFinal'],
                'maribel_garantia' => $_POST['maribel_garantia']
        ];
            $datos = $this->equipomodelo->crearEquipo($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'id' => $_POST['id'],
                'item' => $_POST['item'],
                'origen_propiedad' => $_POST['origen_propiedad'],
                'origen_estado' => $_POST['origen_estado'],
                'uso_tipoUnidad' => $_POST['uso_tipoUnidad'],
                'ubicacion_ciudad' => $_POST['ubicacion_ciudad'],
                'ubicacion_sede' => $_POST['ubicacion_sede'],
                'ce_placa' => $_POST['ce_placa'],
                'ce_serie' => $_POST['ce_serie'],
                'ce_tipo' => $_POST['ce_tipo'],
                'ce_marca' => $_POST['ce_marca'],
                'ce_modelo' => $_POST['ce_modelo'],
                'ce_marcaProcesador' => $_POST['ce_marcaProcesador'],
                'ce_velocidadProcesador' => $_POST['ce_velocidadProcesador'],
                'ce_memoria' => $_POST['ce_memoria'],
                'ce_dd' => $_POST['ce_dd'],
                'ce_nombrePc' => $_POST['ce_nombrePc'],
                'ce_macAdreesEthernet' => $_POST['ce_macAdreesEthernet'],
                'ce_macAdreesWifi' => $_POST['ce_macAdreesWifi'],
                'ce_hojaDeVida' => $_POST['ce_hojaDeVida'],
                'ce_sistemaOperativo' => $_POST['ce_sistemaOperativo'],
                'usuario_cedula' => $_POST['usuario_cedula'],
                'usuario_responsable' => $_POST['usuario_responsable'],
                'usuario_cargo' => $_POST['usuario_cargo'],
                'usuario_dependencia' => $_POST['usuario_dependencia'],
                'usuario_ubicacion' => $_POST['usuario_ubicacion'],
                'da_fecha' => $_POST['da_fecha'],
                'da_estado' => $_POST['da_estado'],
                'da_agenteDeRed' => $_POST['da_agenteDeRed'],
                'ad_antivirus' => $_POST['ad_antivirus'],
                'monitor_item' => $_POST['monitor_item'],
                'monitor_placa' => $_POST['monitor_placa'],
                'monitor_marca' => $_POST['monitor_marca'],
                'monitor_modelo' => $_POST['monitor_modelo'],
                'monitor_serie' => $_POST['monitor_serie'],
                'telefono_item' => $_POST['telefono_item'],
                'telefono_ext' => $_POST['telefono_ext'],
                'telefono_modelo' => $_POST['telefono_modelo'],
                'telefono_serie' => $_POST['telefono_serie'],
                'telefono_numeroPlaca' => $_POST['telefono_numeroPlaca'],
                'oh_item' => $_POST['oh_item'],
                'oh_otros' => $_POST['oh_otros'],
                'maribel_observaciones' => $_POST['maribel_observaciones'],
                'maribel_factura' => $_POST['maribel_factura'],
                'maribel_proveedor' => $_POST['maribel_proveedor'],
                'maribel_fechaInicio' => $_POST['maribel_fechaInicio'],
                'maribel_fechaFinal' => $_POST['maribel_fechaFinal'],
                'maribel_garantia' => $_POST['maribel_garantia']
        ];
            $datos = $this->equipomodelo->actualizarEquipo($datos);
            echo json_encode($datos);
        }
    }
   
    /*
    Método que Elimina un cliente en la base de datos, usando el modelo correspondiente
    @param El id del cliente que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function eliminarEquipo()
    {
        $datos =[
            'id' => $_POST['id']
        ];

        $datos = $this->equipomodelo->eliminarequipo($datos);
        echo json_encode($datos);
    }

    public function listarEquipo()
    {
        $datos = $this->equipomodelo->obtenerEquipo();
        $this->vista('Equipo/EquipoVista.php');
    }
}

