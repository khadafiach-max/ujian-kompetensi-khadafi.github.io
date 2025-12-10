<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'student_id',
        'spp_id',
        'peroid',
        'amount',
        'status',
    ];
}
