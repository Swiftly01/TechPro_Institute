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

      static public function genRefNo($year, $type){
    
        $uniq = substr(hexdec(uniqid()), -4);
        $num =   strval(rand(1000, 9999));   // Generate a random 4-digit number
        $str =  str_shuffle($num . $uniq);
    

      return   $type . '/' . $year . '/' . $str;

    }
    



}
