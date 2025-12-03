<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAtraccion extends Model
{
    protected $table = 'TipoAtraccion';
    protected $primaryKey = 'id_tipo_atraccion';
    public $timestamps = false;

    protected $fillable = ['nombre_tipo_atraccion'];
}
