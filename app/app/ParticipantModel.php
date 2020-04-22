<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantModel extends Model
{
    protected $table="Participants";
    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'phone',
        'email',
        'address',
        'zip',

    ];
}
