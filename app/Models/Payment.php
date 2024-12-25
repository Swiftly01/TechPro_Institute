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

    // public function client() {
    //     return $this->belongsTo(Client::class, 'client_id', 'id');
    // }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public static function generateTxn(){
        $bytes = openssl_random_pseudo_bytes(16);
        $m = strtoupper(substr(bin2hex($bytes), -10));
        $uniq = substr(hexdec(uniqid()), -5);
        $ran = mt_rand(10000, 99999);
        $txn = str_shuffle($m . $ran . $uniq);
    
        return $txn;
      }
}
