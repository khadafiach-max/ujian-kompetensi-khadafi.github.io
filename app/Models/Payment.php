<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'invoice_id',
        'student_id',
        'amount',
        'payment_date',
        'method',
    ];

    public function students()
    {
        return $this->hasMany(Students::class, 'student_id');
    }

    public function invoice()
    {
        return $this->belongTo(Invoice::class, 'invoice_id');
    }
}
