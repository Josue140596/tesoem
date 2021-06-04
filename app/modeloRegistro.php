<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloRegistro extends Model
{
    protected $table = 'registro';
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $guarded = ['id'];
}
