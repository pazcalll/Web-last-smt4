<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $table='scores';
    protected $fillable = [
        'SCOREID', 'ID', 'SUB_ID', 'QUIZ1', 'QUIZ2', 'MID_EXAM', 'QUIZ3', 'LAST_EXAM', 'AVERAGE'
    ];
}
