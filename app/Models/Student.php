<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function studentClass()
    {
        return $this->belongsTo(StudentClass::Class);
    }

    public function studentFees()
    {
        return $this->hasMany(StudentFee::Class);
    }
}
