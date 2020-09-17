<?php

class PersonalModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerPersonal()
    {
        $this->db->query('SELECT * from personal');
        $resultados = $this->db->registros();
        return $resultados;
    }


    public function mostrarUnPersonal()
    {
        $this->db->query('SELECT * from personal where id = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearPersonal($datos)
    {
        $this->db->query('INSERT INTO personal (identificacion, nombre, telefono, correo, f_formacion, rol) VALUES (:ident,  :nombre, :telefono,
         :correo, :ficha, :rol);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':ident', $datos['ident']);
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':correo', $datos['correo']);
        $this->db->bind(':ficha', $datos[':ficha']);
        $this->db->bind(':rol', $datos['rol']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarPersonal($datos)
    {
        $this->db->query('UPDATE personal SET identificacion = :ident, nombre = :nombre, telefono = :telefono,
        correo = :correo, F_formacion = :ficha, rol = :rol
        WHERE id = :id');

        // Vinculamos los valores
        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':ident', $datos['ident']);
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':correo', $datos['correo']);
        $this->db->bind(':ficha', $datos[':ficha']);
        $this->db->bind(':rol', $datos['rol']);

        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarPersonal($datos)
    {
        $this->db->query('DELETE FROM personal WHERE id = :id');
        $this->db->bind(':id', $datos['id']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function contarPersonalTotal()
    {
        $this->db->query('SELECT count(*) from personal');
        $resultados = $this->db->registros();
        return $resultados;
    }
}