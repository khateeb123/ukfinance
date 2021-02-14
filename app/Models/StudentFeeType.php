<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFeeType extends Model
{
    use HasFactory;

    public function feeses()
    {
        return $this->hasMany(StudenstFee::class);
    }
}
