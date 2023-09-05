<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = ['solicitud_atencion', 'observaciones', 'cliente_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    
    public function getSolicitudAtention()
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
