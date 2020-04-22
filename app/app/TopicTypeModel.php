<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicTypeModel extends Model
{
    protected $table="TopicType";
    protected $fillable = [
        'name',

    ];
}
