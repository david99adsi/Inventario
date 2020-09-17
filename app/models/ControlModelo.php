<?php

class ControlModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerControl()
    {
        $this->db->query('SELECT * from controles');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function contarControl()
    {
        $this->db->query('SELECT count(*) from controles');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function mostrarUnControl()
    {
        $this->db->query('SELECT * from controles where id = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearControl($datos)
    {
        $this->db->query('INSERT INTO controles (identificacion, fecha_i, hora_e, hora_s) VALUES (:identificacion, :fechai,
        :horae, :horas);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':identificacion', $datos['identificacion']);
        $this->db->bind(':fechai', $datos['fechai']);
        $this->db->bind(':horae', $datos['horae']);
        $this->db->bind(':horas', $datos['horas']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarControl($datos)
    {
        $this->db->query('UPDATE controles SET identificacion = :identificacion, fecha_i = :fechai,
        hora_e = :horae, hora_s = :horas WHERE id = :id');
        // Vinculamos los valores
        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':identificacion', $datos['identificacion']);
        $this->db->bind(':fechai', $datos['fechai']);
        $this->db->bind(':horae', $datos['horae']);
        $this->db->bind(':horas', $datos['horas']);
        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarControl($datos)
    {
        $this->db->query('DELETE FROM controles WHERE id = :id');
        $this->db->bind(':id', $datos['id']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

