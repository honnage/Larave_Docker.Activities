<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityModel extends Model
{
    protected $table="Activity";
    protected $fillable = [
        'activity',
        'description',
        'number',
        'EventDate',
        'StartTime',
        'Endtime',
        'status',
        'id_TopicType',
        'id_Participants',
    ];
}
