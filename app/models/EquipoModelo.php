<?php

class EquipoModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerEquipo()
    {
        $this->db->query('SELECT * from tbl_equipo');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function contarequipo()
    {
        $this->db->query('SELECT count(*) from tbl_equipo');
        $resultados = $this->db->registros();
        return $resultados;
    }


    public function mostrarUnEquipo()
    {
        $this->db->query('SELECT * from tbl_equipo where id = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearEquipo($datos)
    {
        $this->db->query('INSERT INTO tbl_equipo 
        item, 
        origen_propiedad, 
        origen_estado, 
        uso_tipoUnidad, 
        ubicacion_ciudad, 
        ubicacion_sede, 
        ce_placa, 
        ce_serie, 
        ce_tipo, 
        ce_marca, 
        ce_modelo, 
        ce_marcaProcesador, 
        ce_tipoProcesador, 
        ce_velocidadProcesador, 
        ce_memoria, 
        ce_dd, 
        ce_nombrePc, 
        ce_macAdreesEthernet, 
        ce_macAdreesWifi, 
        ce_hojaDeVida, 
        ce_sistemaOperativo, 
        usuario_cedula, 
        usuario_responsable, 
        usuario_cargo, 
        usuario_dependencia, 
        usuario_ubicacion, 
        da_fecha, 
        da_estado, 
        da_agenteDeRed, 
        ad_antivirus, 
        monitor_item, 
        monitor_placa, 
        monitor_marca, 
        monitor_modelo, 
        monitor_serie, 
        telefono_item, 
        telefono_ext, 
        telefono_modelo, 
        telefono_serie, 
        telefono_numeroPlaca, 
        oh_item, 
        oh_otros, 
        maribel_observaciones, 
        maribel_factura, 
        maribel_proveedor, 
        maribel_fechaInicio, 
        maribel_fechaFinal, 
        maribel_garantia) 
        VALUES 
        (:item, 
        :origen_propiedad, 
        :origen_estado, 
        :uso_tipoUnidad, 
        :ubicacion_ciudad, 
        :ubicacion_sede, 
        :ce_placa, 
        :ce_serie, 
        :ce_tipo, 
        :ce_marca, 
        :ce_modelo, 
        :ce_marcaProcesador, 
        :ce_tipoProcesador, 
        :ce_velocidadProcesador, 
        :ce_memoria, 
        :ce_dd, 
        :ce_nombrePc, 
        :ce_macAdreesEthernet, 
        :ce_macAdreesWifi, 
        :ce_hojaDeVida, 
        :ce_sistemaOperativo, 
        :usuario_cedula, 
        :usuario_responsable, 
        :usuario_cargo, 
        :usuario_dependencia, 
        :usuario_ubicacion, 
        :da_fecha, 
        :da_estado, 
        :da_agenteDeRed, 
        :ad_antivirus, 
        :monitor_item, 
        :monitor_placa, 
        :monitor_marca, 
        :monitor_modelo, 
        :monitor_serie, 
        :telefono_item, 
        :telefono_ext, 
        :telefono_modelo, 
        :telefono_serie, 
        :telefono_numeroPlaca, 
        :oh_item, 
        :oh_otros, 
        :maribel_observaciones, 
        :maribel_factura, 
        :maribel_proveedor, 
        :maribel_fechaInicio, 
        :maribel_fechaFinal, 
        :maribel_garantia);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':item', $datos['item']);
        $this->db->bind(':origen_propiedad', $datos['origen_propiedad']);
        $this->db->bind(':origen_estado', $datos['origen_estado']);
        $this->db->bind(':uso_tipoUnidad', $datos['uso_tipoUnidad']);
        $this->db->bind(':ubicacion_ciudad', $datos['ubicacion_ciudad']);
        $this->db->bind(':ubicacion_sede', $datos['ubicacion_sede']);
        $this->db->bind(':ce_placa', $datos['ce_placa']);
        $this->db->bind(':ce_serie', $datos['ce_serie']);
        $this->db->bind(':ce_tipo', $datos['ce_tipo']);
        $this->db->bind(':ce_marca', $datos['ce_marca']);
        $this->db->bind(':ce_modelo', $datos['ce_modelo']);
        $this->db->bind(':ce_marcaProcesador', $datos['ce_marcaProcesador']);
        $this->db->bind(':ce_tipoProcesador', $datos['ce_tipoProcesador']);
        $this->db->bind(':ce_velocidadProcesador', $datos['ce_velocidadProcesador']);
        $this->db->bind(':ce_memoria', $datos['ce_memoria']);
        $this->db->bind(':ce_dd', $datos['ce_dd']);
        $this->db->bind(':ce_nombrePc', $datos['ce_nombrePc']);
        $this->db->bind(':ce_macAdreesEthernet', $datos['ce_macAdreesEthernet']);
        $this->db->bind(':ce_macAdreesWifi', $datos['ce_macAdreesWifi']);
        $this->db->bind(':ce_hojaDeVida', $datos['ce_hojaDeVida']);
        $this->db->bind(':ce_sistemaOperativo', $datos['ce_sistemaOperativo']);
        $this->db->bind(':usuario_cedula', $datos['usuario_cedula']);
        $this->db->bind(':usuario_responsable', $datos['usuario_responsable']);
        $this->db->bind(':usuario_cargo', $datos['usuario_cargo']);
        $this->db->bind(':usuario_dependencia', $datos['usuario_dependencia']);
        $this->db->bind(':usuario_ubicacion', $datos['usuario_ubicacion']);
        $this->db->bind(':da_fecha', $datos['da_fecha']);
        $this->db->bind(':da_estado', $datos['da_estado']);
        $this->db->bind(':da_agenteDeRed', $datos['da_agenteDeRed']);
        $this->db->bind(':ad_antivirus', $datos['ad_antivirus']);
        $this->db->bind(':monitor_item', $datos['monitor_item']);
        $this->db->bind(':monitor_placa', $datos['monitor_placa']);
        $this->db->bind(':monitor_marca', $datos['monitor_marca']);
        $this->db->bind(':monitor_modelo', $datos['monitor_modelo']);
        $this->db->bind(':monitor_serie', $datos['monitor_serie']);
        $this->db->bind(':telefono_item', $datos['telefono_item']);
        $this->db->bind(':telefono_ext', $datos['telefono_ext']);
        $this->db->bind(':telefono_modelo', $datos['telefono_modelo']);
        $this->db->bind(':telefono_serie', $datos['telefono_serie']);
        $this->db->bind(':telefono_numeroPlaca', $datos['telefono_numeroPlaca']);
        $this->db->bind(':oh_item', $datos['oh_item']);
        $this->db->bind(':oh_otros', $datos['oh_otros']);
        $this->db->bind(':maribel_observaciones', $datos['maribel_observaciones']);
        $this->db->bind(':maribel_factura', $datos['maribel_factura']);
        $this->db->bind(':maribel_proveedor', $datos['maribel_proveedor']);
        $this->db->bind(':maribel_fechaInicio', $datos['maribel_fechaInicio']);
        $this->db->bind(':maribel_fechaFinal', $datos['maribel_fechaFinal']);
        $this->db->bind(':maribel_garantia', $datos['maribel_garantia']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarEquipo($datos)
    {
        $this->db->query('UPDATE tbl_equipo SET 
        id = :id, 
        item = :item, 
        origen_propiedad = :origen_propiedad, 
        origen_estado = :origen_estado, 
        uso_tipoUnidad = :uso_tipoUnidad, 
        ubicacion_ciudad = :ubicacion_ciudad, 
        ubicacion_sede = :ubicacion_sede, 
        ce_placa = :ce_placa, 
        ce_serie = :ce_serie, 
        ce_tipo = :ce_tipo, 
        ce_marca = :ce_marca, 
        ce_modelo = :ce_modelo, 
        ce_marcaProcesador = :ce_marcaProcesador, 
        ce_tipoProcesador = :ce_tipoProcesador, 
        ce_velocidadProcesador = :ce_velocidadProcesador, 
        ce_memoria = :ce_memoria, 
        ce_dd = :ce_dd, 
        ce_nombrePc = :ce_nombrePc, 
        ce_macAdreesEthernet = :ce_macAdreesEthernet, 
        ce_macAdreesWifi = :ce_macAdreesWifi, 
        ce_hojaDeVida = :ce_hojaDeVida, 
        ce_sistemaOperativo = :ce_sistemaOperativo, 
        usuario_cedula = :usuario_cedula, 
        usuario_responsable = :usuario_responsable, 
        usuario_cargo = :usuario_cargo, 
        usuario_dependencia = :usuario_dependencia, 
        usuario_ubicacion = :usuario_ubicacion, 
        da_fecha = :da_fecha, 
        da_estado = :da_estado, 
        da_agenteDeRed = :da_agenteDeRed, 
        ad_antivirus = :ad_antivirus, 
        monitor_item = :monitor_item, 
        monitor_placa = :monitor_placa, 
        monitor_marca = :monitor_marca, 
        monitor_modelo = :monitor_modelo, 
        monitor_serie = :monitor_serie, 
        telefono_item = :telefono_item, 
        telefono_ext = :telefono_ext, 
        telefono_modelo = :telefono_modelo, 
        telefono_serie = :telefono_serie, 
        telefono_numeroPlaca = :telefono_numeroPlaca, 
        oh_item = :oh_item, 
        oh_otros = :oh_otros, 
        maribel_observaciones = :maribel_observaciones, 
        maribel_factura = :maribel_factura, 
        maribel_proveedor = :maribel_proveedor, 
        maribel_fechaInicio = :maribel_fechaInicio, 
        maribel_fechaFinal = :maribel_fechaFinal,
        maribel_garantia = :maribel_garantia 
        WHERE  = :');
        // Vinculamos los valores

        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':item', $datos['item']);
        $this->db->bind(':origen_propiedad', $datos['origen_propiedad']);
        $this->db->bind(':origen_estado', $datos['origen_estado']);
        $this->db->bind(':uso_tipoUnidad', $datos['uso_tipoUnidad']);
        $this->db->bind(':ubicacion_ciudad', $datos['ubicacion_ciudad']);
        $this->db->bind(':ubicacion_sede', $datos['ubicacion_sede']);
        $this->db->bind(':ce_placa', $datos['ce_placa']);
        $this->db->bind(':ce_serie', $datos['ce_serie']);
        $this->db->bind(':ce_tipo', $datos['ce_tipo']);
        $this->db->bind(':ce_marca', $datos['ce_marca']);
        $this->db->bind(':ce_modelo', $datos['ce_modelo']);
        $this->db->bind(':ce_marcaProcesador', $datos['ce_marcaProcesador']);
        $this->db->bind(':ce_tipoProcesador', $datos['ce_tipoProcesador']);
        $this->db->bind(':ce_velocidadProcesador', $datos['ce_velocidadProcesador']);
        $this->db->bind(':ce_memoria', $datos['ce_memoria']);
        $this->db->bind(':ce_dd', $datos['ce_dd']);
        $this->db->bind(':ce_nombrePc', $datos['ce_nombrePc']);
        $this->db->bind(':ce_macAdreesEthernet', $datos['ce_macAdreesEthernet']);
        $this->db->bind(':ce_macAdreesWifi', $datos['ce_macAdreesWifi']);
        $this->db->bind(':ce_hojaDeVida', $datos['ce_hojaDeVida']);
        $this->db->bind(':ce_sistemaOperativo', $datos['ce_sistemaOperativo']);
        $this->db->bind(':usuario_cedula', $datos['usuario_cedula']);
        $this->db->bind(':usuario_responsable', $datos['usuario_responsable']);
        $this->db->bind(':usuario_cargo', $datos['usuario_cargo']);
        $this->db->bind(':usuario_dependencia', $datos['usuario_dependencia']);
        $this->db->bind(':usuario_ubicacion', $datos['usuario_ubicacion']);
        $this->db->bind(':da_fecha', $datos['da_fecha']);
        $this->db->bind(':da_estado', $datos['da_estado']);
        $this->db->bind(':da_agenteDeRed', $datos['da_agenteDeRed']);
        $this->db->bind(':ad_antivirus', $datos['ad_antivirus']);
        $this->db->bind(':monitor_item', $datos['monitor_item']);
        $this->db->bind(':monitor_placa', $datos['monitor_placa']);
        $this->db->bind(':monitor_marca', $datos['monitor_marca']);
        $this->db->bind(':monitor_modelo', $datos['monitor_modelo']);
        $this->db->bind(':monitor_serie', $datos['monitor_serie']);
        $this->db->bind(':telefono_item', $datos['telefono_item']);
        $this->db->bind(':telefono_ext', $datos['telefono_ext']);
        $this->db->bind(':telefono_modelo', $datos['telefono_modelo']);
        $this->db->bind(':telefono_serie', $datos['telefono_serie']);
        $this->db->bind(':telefono_numeroPlaca', $datos['telefono_numeroPlaca']);
        $this->db->bind(':oh_item', $datos['oh_item']);
        $this->db->bind(':oh_otros', $datos['oh_otros']);
        $this->db->bind(':maribel_observaciones', $datos['maribel_observaciones']);
        $this->db->bind(':maribel_factura', $datos['maribel_factura']);
        $this->db->bind(':maribel_proveedor', $datos['maribel_proveedor']);
        $this->db->bind(':maribel_fechaInicio', $datos['maribel_fechaInicio']);
        $this->db->bind(':maribel_fechaFinal', $datos['maribel_fechaFinal']);
        $this->db->bind(':maribel_garantia', $datos['maribel_garantia']);

        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito!!';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarEquipo($datos)
    {
        $this->db->query('DELETE FROM tbl_equipo WHERE id = :id');
        $this->db->bind(':id', $datos['id']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function contarEquipoTotal()
    {
        $this->db->query('SELECT count(*) from tbl_equipo');
        $resultados = $this->db->registros();
        return $resultados;
    }
}