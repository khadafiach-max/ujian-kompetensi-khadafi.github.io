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


    public function user()
    {
        return $this->belongsTo(user::class);
    }

   public function invoice()
    {
        return $this->belongTo(Invoice::class);
    }
    

   public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}