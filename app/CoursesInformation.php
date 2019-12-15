<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursesInformation extends Model
{
    protected $fillable = [
        'courses_id',
        'course_time',
        'average_vote',
    ];
}
