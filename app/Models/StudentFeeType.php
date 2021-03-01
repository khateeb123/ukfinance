<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFeeType extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function ftudentFees()
    {
        return $this->hasMany(StudenstFee::Class);
    }
}
