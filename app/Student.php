<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [
        'student_id', 'created_at', 'updated_at'
    ];
}
