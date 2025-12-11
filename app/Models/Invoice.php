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

    public function students()
    {
        return $this->belongTo(Students::class, 'student_id');
    }
    public function sppplan()
    {
        return $this->hasMany(SPPPlan::class, 'spp_id');
    }
}
