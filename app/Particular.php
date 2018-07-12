<?php

namespace analisis;

use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    public $table = 'particular';
    public $timestamps = false;
    
    protected $fillable = [
        'codigoParticular', 'rutParticular', 'passwordParticular','nombreParticular','direccionParticular','emailParticular','Activo',
    ];
}
