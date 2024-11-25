<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Payment_ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('payment_schedules')->insert([
            [ 'course_id'=>1,
              'amount'=>130000.00,
              'purpose' =>'sch_fee',
              'type' => 0,
              'desc' => 'School fees payment for front-end development',
            ],
            [
             'course_id'=>2,
             'amount' => 150000.00,
              'course_id'=>2,
              'purpose' => 'sch_fee',
              'type' => 0,
              'desc' => 'School fees payment for Back-end Development',
            ],
            [
             'course_id'=>3,
              'amount'=>250000.00,
              'purpose' => 'sch_fee',
              'type' => 0,
              'desc' => 'School fees payment for full stack development',
            ],
            [
             'course_id'=>4,
              'amount' => 130000.00,
              'purpose' => 'sch_fee',
              'type' => 0,
              'desc' => 'School fees payment for Data Analytics',
            ],
            [
             'course_id'=>5,
              'amount' => 100000.00,
              'purpose' => 'sch_fee',
              'type' => 0,
              'desc' =>  'School fees payment for UI/UX',
            ],
            [
              'course_id'=>6,
              'amount'=>130000.00,
              'purpose' => 'sch_fee',
              'type' => 0,
               'desc' => 'School fees payment for Cyber Security',
            ],
            [
             'course_id'=>7,
              'amount' => 80000.00,
              'purpose' => 'sch_fee',
              'type' => 0,
               'desc' => 'School fees payment for Graphics Design',
            ],

            [
              'course_id'=>8,
               'amount' => 20000.00,
               'purpose' => 'sch_fee',
               'type' => 0,
              'desc' => 'School fees payment for Tech A Teen',
             ],

             [
               'course_id'=>0,
               'amount' => 2000.00,
               'type' => 'Work Station',
               'purpose' => 'services',
               'desc' => 'payment for work station',
             ],
             
            
            
        ]);

      
    }
}
