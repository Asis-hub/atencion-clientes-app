<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getNombre()
    {
        return $this->attributes['nombre'];
    }
    public function setNombre($nombre)
    {
        $this->attributes['nombre'] = $nombre;
    }
    public function getPrimerApellido()
    {
        return $this->attributes['primer_apellido'];
    }
    public function setPrimerApellido($primer_apellido)
    {
        $this->attributes['primer_apellido'] = $primer_apellido;
    }
    public function getSegundoApellido()
    {
        return $this->attributes['segundo_apellido'];
    }
    public function setSegundoApellido($segundo_apellido)
    {
        $this->attributes['segundo_apellido'] = $segundo_apellido;
    }
    public function getEmail()
    {
        return $this->attributes['email'];
    }
    public function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }
    public function getDireccion()
    {
        return $this->attributes['direccion'];
    }
    public function setDireccion($direccion)
    {
        $this->attributes['direccion'] = $direccion;
    }
    public function getTelefono()
    {
        return $this->attributes['telefono'];
    }
    public function setTelefono($telefono)
    {
        $this->attributes['telefono'] = $telefono;
    }
    public function getSolicitudAtencion()
    {
        return $this->attributes['solicitud_atencion'];
    }
    public function setSolicitudAtencion($solicitud_atencion)
    {
        $this->attributes['solicitud_atencion'] = $solicitud_atencion;
    }
    public function getObservaciones()
    {
        return $this->attributes['observaciones'];
    }
    public function setObservaciones($observaciones)
    {
        $this->attributes['observaciones'] = $observaciones;
    }
}
