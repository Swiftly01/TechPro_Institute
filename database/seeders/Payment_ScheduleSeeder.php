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
              'amount'=>200000.00,
              'purpose' =>'sch_fee',
              'type' => 'course',
              'desc' => 'School fees payment for front-end development',
            ],
            [
             'course_id'=>2,
             'amount' => 250000.00,
              'purpose' => 'sch_fee',
              'type' => 'course',
              'desc' => 'School fees payment for Back-end Development',
            ],
            [
             'course_id'=>3,
              'amount'=>480000.00,
              'purpose' => 'sch_fee',
              'type' => 'course',
              'desc' => 'School fees payment for full stack development',
            ],
            [
             'course_id'=>4,
              'amount' => 280000.00,
              'purpose' => 'sch_fee',
              'type' => 'course',
              'desc' => 'School fees payment for Data Analytics',
            ],
            [
             'course_id'=>5,
              'amount' => 160000.00,
              'purpose' => 'sch_fee',
              'type' => 'course',
              'desc' =>  'School fees payment for UI/UX',
            ],
            [
              'course_id'=>6,
              'amount'=>220000.00,
              'purpose' => 'sch_fee',
              'type' => 'course',
               'desc' => 'School fees payment for Cyber Security',
            ],
            [
             'course_id'=>7,
              'amount' => 180000.00,
              'purpose' => 'sch_fee',
              'type' => 'course',
               'desc' => 'School fees payment for Graphics Design',
            ],

            [
              'course_id'=>8,
               'amount' => 20000.00,
               'purpose' => 'sch_fee',
               'type' => 'course',
              'desc' => 'School fees payment for Tech A Teen',
             ],
             [
              'course_id'=>9,
               'amount' => 15000.00,
               'purpose' => 'sch_fee',
               'type' => 'course',
              'desc' => 'School fees payment for Digital marketing',
             ],

             [
               'course_id'=>0,
               'amount' => 2000.00,
               'type' => 'work_space',
               'purpose' => 'services',
               'desc' => 'payment for work station',
             ],
             
            
            
        ]);

      
    }
}
