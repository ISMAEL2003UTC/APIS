<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'Provincia';
    protected $primaryKey = 'id_provincia';
    public $timestamps = false;
    
    protected $fillable = ['nombre_provincia'];

}
