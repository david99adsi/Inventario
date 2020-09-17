<?php

class UsuarioModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuario()
    {
        $this->db->query('SELECT * from n_usuario');
        $resultados = $this->db->registros();
        return $resultados;
    }

    public function mostrarUnUsuario()
    {
        $this->db->query('SELECT * from n_usuario where id = 10');
        $resultados = $this->db->registros();
        return $resultados;
    }

    
    public function crearUsuario($datos)
    {
        $this->db->query('INSERT INTO n_usuario 
        (cedula, 
        responsable, 
        dependencia, 
        cargo, 
        sede, 
        ubicacion, 
        tipo_unidad, 
        ciudad, 
        celular, 
        mdi_acdj, 
        mdy_acdj, 
        itmd_acdj, 
        dms_acdj) 
        VALUES 
        (:cedula, 
        :responsable, 
        :dependencia, 
        :cargo, 
        :sede, 
        :ubicacion, 
        :tipo_unidad, 
        :ciudad, 
        :celular, 
        :mdi_acdj, 
        :mdy_acdj, 
        :itmd_acdj, 
        :dms_acdj);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':cedula', $datos['cedula']);
        $this->db->bind(':responsable', $datos['responsable']);
        $this->db->bind(':dependencia', $datos['dependencia']);
        $this->db->bind(':cargo', $datos['cargo']);
        $this->db->bind(':sede', $datos['sede']);
        $this->db->bind(':ubicacion', $datos['ubicacion']);
        $this->db->bind(':tipo_unidad', $datos['tipo_unidad']);
        $this->db->bind(':ciudad', $datos['ciudad']);
        $this->db->bind(':celular', $datos['celular']);
        $this->db->bind(':mdi_acdj', $datos['mdi_acdj']);
        $this->db->bind(':mdy_acdj', $datos['mdy_acdj']);
        $this->db->bind(':itmd_acdj', $datos['itmd_acdj']);
        $this->db->bind(':dms_acdj', $datos['dms_acdj']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarUsuario($datos)
    {
        $this->db->query('UPDATE n_usuario SET 
        cedula = :cedula, 
        responsable = :responsable, 
        dependencia = :dependencia,
        cargo = :cargo, 
        sede =:sede, 
        ubicacion = :ubicacion, 
        tipo_unidad = :tipo_unidad, 
        ciudad = :ciudad,
        celular = :celular, 
        mdi_acdj =:mdi_acdj, 
        mdy_acdj = :mdy_acdj, 
        itmd_acdj = :itmd_acdj, 
        dms_acdj = :dms_acdj
        WHERE id = :id');
        // Vinculamos los valores
        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':cedula', $datos['cedula']);
        $this->db->bind(':responsable', $datos['responsable']);
        $this->db->bind(':dependencia', $datos['dependencia']);
        $this->db->bind(':cargo', $datos['cargo']);
        $this->db->bind(':sede', $datos['sede']);
        $this->db->bind(':ubicacion', $datos['ubicacion']);
        $this->db->bind(':tipo_unidad', $datos['tipo_unidad']); 
        $this->db->bind(':ciudad', $datos['ciudad']);
        $this->db->bind(':celular', $datos['celular']);
        $this->db->bind(':mdi_acdj', $datos['mdi_acdj']);
        $this->db->bind(':mdy_acdj', $datos['mdy_acdj']);
        $this->db->bind(':itmd_acdj', $datos['itmd_acdj']);
        $this->db->bind(':dms_acdj', $datos['dms_acdj']);

        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarUsuario($datos)
    {
        $this->db->query('DELETE FROM n_usuario WHERE id = :id');
        $this->db->bind(':id', $datos['id']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function contarUsuarioTotal()
    {
        $this->db->query('SELECT count(*) from n_usuario');
        $resultados = $this->db->registros();
        return $resultados;
    }
    /**
     * validarIngreso
     *
     * @param  mixed $datos
     * @return void
     */
    public function validarIngreso($datos)
    {
        $this->db->query('SELECT * FROM usuarios WHERE usuario_login = :usuario ');
        $this->db->bind(':usuario', $datos['usuario']);
        $resultados = $this->db->registros();
        if (count($resultados)<=0) {
            return false;
        } else {
            if (MD5($datos['password'], $resultados[0]->usuario_pass)) {
                return $resultados;
            } else {
                return false;
            }
        }
    }
}