<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded=[];


    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function schedule() {
         return $this->belongsTo(PaymentSchedule::class,'schedule_id','id');
    }
}
