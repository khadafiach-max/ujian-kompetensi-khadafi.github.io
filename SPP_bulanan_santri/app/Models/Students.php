<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
     protected $fillable = [
        'NISN',
        'names_students',
        'students_class',
        'students_status',
    ];
}
