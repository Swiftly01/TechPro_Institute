<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function course() {
        return $this->belongsTo(Course::class);

    }


    static public function genAppNo($year){
        
        // COMMENT: more code added to make it more unique
        // $num = rand(10000, 99999); // Generate a random 5-digit number
        $uniq = substr(hexdec(uniqid()), -4);
        $num =   strval(rand(1000, 9999));   // Generate a random 4-digit number
        $str =  str_shuffle($num . $uniq);
        //  str_shuffle($str);

      return   'APP/' . $year . '/' . $str;

    }


}
