<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    protected $table="Registers";
    protected $fillable = [
        'status',
        'id_activity',
        'id_Participants',


    ];
}
