<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LugarTuristico extends Model
{
    protected $table = 'LugarTuristico';
    protected $primaryKey = 'id_lugar';
    public $timestamps = false;

    protected $fillable = [
        'nombre_lugar',
        'id_provincia',
        'id_tipo_atraccion',
        'coordenadas',
        'descripcion',
        'anio_creacion',
        'accesibilidad'
    ];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }

    public function tipoAtraccion()
    {
        return $this->belongsTo(TipoAtraccion::class, 'id_tipo_atraccion');
    }
}
