<?php

class MonitoresModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerMonitores()
    {
        $this->db->query('SELECT * from monitores');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function contarMonitores()
    {
        $this->db->query('SELECT count(*) from monitores');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function mostrarUnMonitor()
    {
        $this->db->query('SELECT * from monitores where id = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearMonitores($datos)
    {
        $this->db->query('INSERT INTO monitores 
        (origen_propiedad, 
        stock_estado, 
        uso_tipoUnidad, 
        ubicacion_ciudad, 
        ubicacion_sede, 
        ce_placa, 
        ce_marca, 
        ce_tecnologia, 
        ce_modelo, 
        ce_serial, 
        usuario_cedula, 
        usuario_responsable, 
        usuario_cargo, 
        usuario_dependencia, 
        usuario_ubicacion) 
        VALUES 
        (:origen_propiedad, 
        :stock_estado, 
        :uso_tipoUnidad, 
        :ubicacion_ciudad, 
        :ubicacion_sede, 
        :ce_placa, 
        :ce_marca, 
        :ce_tecnologia, 
        :ce_modelo, 
        :ce_serial, 
        :usuario_cedula, 
        :usuario_responsable, 
        :usuario_cargo, 
        :usuario_dependencia, 
        :usuario_ubicacion);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':origen_propiedad', $datos['origen_propiedad']);
        $this->db->bind(':stock_estado', $datos['stock_estado']);
        $this->db->bind(':uso_tipoUnidad', $datos['uso_tipoUnidad']);
        $this->db->bind(':ubicacion_ciudad', $datos['ubicacion_ciudad']);
        $this->db->bind(':ubicacion_sede', $datos['ubicacion_sede']);
        $this->db->bind(':ce_placa', $datos['ce_placa']);
        $this->db->bind(':ce_marca', $datos['ce_marca']);
        $this->db->bind(':ce_tecnologia', $datos['ce_tecnologia']);
        $this->db->bind(':ce_modelo', $datos['ce_modelo']);
        $this->db->bind(':ce_serial', $datos['ce_serial']);
        $this->db->bind(':usuario_cedula', $datos['usuario_cedula']);
        $this->db->bind(':usuario_responsable', $datos['usuario_responsable']);
        $this->db->bind(':usuario_cargo', $datos['usuario_cargo']);
        $this->db->bind(':usuario_dependencia', $datos['usuario_dependencia']);
        $this->db->bind(':usuario_ubicacion', $datos['usuario_ubicacion']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarMonitores($datos)
    {
        $this->db->query('UPDATE monitores SET 
        origen_propiedad = :origen_propiedad, 
        stock_estado = :stock_estado, 
        uso_tipoUnidad = :uso_tipoUnidad, 
        ubicacion_ciudad = :ubicacion_ciudad, 
        ubicacion_sede = :ubicacion_sede, 
        ce_placa = :ce_placa, 
        ce_marca = :ce_marca, 
        ce_tecnologia = :ce_tecnologia, 
        ce_modelo = :ce_modelo,
        ce_serial = :ce_serial, 
        usuario_cedula = :usuario_cedula, 
        usuario_responsable = :usuario_responsable, 
        usuario_cargo = :usuario_cargo, 
        usuario_dependencia = :usuario_dependencia, 
        usuario_ubicacion = :usuario_ubicacion 
        WHERE id = :id');
        // Vinculamos los valores
        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':origen_propiedad', $datos['origen_propiedad']);
        $this->db->bind(':stock_estado', $datos['stock_estado']);
        $this->db->bind(':uso_tipoUnidad', $datos['uso_tipoUnidad']);
        $this->db->bind(':ubicacion_ciudad', $datos['ubicacion_ciudad']);
        $this->db->bind(':ubicacion_sede', $datos['ubicacion_sede']);
        $this->db->bind(':ce_placa', $datos['ce_placa']);
        $this->db->bind(':ce_marca', $datos['ce_marca']);
        $this->db->bind(':ce_tecnologia', $datos['ce_tecnologia']);
        $this->db->bind(':ce_modelo', $datos['ce_modelo']);
        $this->db->bind(':ce_serial', $datos['ce_serial']);
        $this->db->bind(':usuario_cedula', $datos['usuario_cedula']);
        $this->db->bind(':usuario_responsable', $datos['usuario_responsable']);
        $this->db->bind(':usuario_cargo', $datos['usuario_cargo']);
        $this->db->bind(':usuario_dependencia', $datos['usuario_dependencia']);
        $this->db->bind(':usuario_ubicacion', $datos['usuario_ubicacion']);
        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarMonitores($datos) 
    {
        $this->db->query('DELETE FROM monitores WHERE id = :id');
        $this->db->bind(':id', $datos['id']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}