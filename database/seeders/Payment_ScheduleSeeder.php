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

              'amount'=>120000.00,
              'purpose' => 'sch_fee',
              'description' => 'School fees payment for graphic design',
            ],
            [
              'course_id'=>2,
             'amount' => 120000.00,
              'course_id'=>2,
              'purpose' => 'sch_fee',
              'description' => 'School fees payment for mobile app development',
            ],
            [
            'course_id'=>3,

              'amount'=>120000.00,
              'purpose' => 'sch_fee',
              'description' => 'School fees payment for UI/UX',
            ],
            [
            'course_id'=>4,

              'amount' => 120000.00,
              'purpose' => 'sch_fee',
              'description' => 'School fees payment for 3D modelling',
            ],
            [
            'course_id'=>5,

             'amount' => 120000.00,
              'purpose' => 'sch_fee',
              'description' =>  'School fees payment for 3D Animation',
            ],
            [
            'course_id'=>6,

              'amount'=>120000.00,
              'purpose' => 'sch_fee',
               'description' => 'School fees payment for Digital marketing',
            ],
            [
            'course_id'=>7,

              'amount' => 120000.00,
              'purpose' => 'sch_fee',
               'description' => 'School fees payment for Website development',
              

            ],
            [
            'course_id'=>8,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for Cyber security',
            ],
            [
            'course_id'=>9,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for motion graphics',
            ],
            [
            'course_id'=>10,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for Blockchain technology',
            ],
            [
            'course_id'=>11,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for sage',
            ],

            [
            'course_id'=>12,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for Networking',
            ],

            [
            'course_id'=>13,
            'amount'=>600000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for Artificial intelligence',
            ],

            [
            'course_id'=>14,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for Forex Trading',
            ],
           

            [
            'course_id'=>15,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for Advanced Backend programming',
            ],

            [
            'course_id'=>16,
            'amount' => 120000.00,
            'purpose' => ' Sch Fee',
            'description' =>  'School fees payment for Advanced frontend programming',
            ],

            [
            'course_id'=>17,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for cloud computing',
            ],

            [
            'course_id'=>18,
            'amount' => 120000.00,
            'purpose' => ' Sch Fee',
            'description' =>  'School fees payment for Data science/analysis',
            ],

            [
            'course_id'=>19,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master microsoft excel',
            ],

            [
            'course_id'=>20,
            'amount'=>80000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for for copywriting',
            ],

            [
            'course_id'=>21,
            'amount'=>550000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for Software engineering',
            ],

            [
            'course_id'=>22,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for R programming',
            ],

            [
            'course_id'=>23,
            'amount'=>80000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for Data_visualization',
            ],

            [
            'course_id'=>24,
            'amount'=>60000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for word press web design',
            ],

            [
            'course_id'=>25,
            'amount'=>80000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for Adobe illustrator',
            ],

            [
            'course_id'=>26,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for for autocad',
            

            ],

            [
            'course_id'=>27,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
             'description' => 'School fees payment for interior design',
            ],

            [
            'course_id'=>28,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for It auditing',
            ],

            [
            'course_id'=>29,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master python',
            ],

            [
            'course_id'=>30,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master javascript',
            ],

            [
            'course_id'=>31,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for data processing',
            ],

            [
            'course_id'=>32,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master react',
            ],

            [
            'course_id'=>33,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>   'School fees payment for master jquery',
            ],

            [
              'course_id'=>34,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master ajax',
            ],

            [
            'course_id'=>35,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for for master php',
            ],

            [
            'course_id'=>36,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master C++',
            ],

            [
            'course_id'=>37,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master C#',
            ],

            [
            'course_id'=>38,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master node js',
            ],

            [
            'course_id'=>39,
            'amount'=>120000.00,
            'purpose' => 'sch_fee',
            'description' =>   'School fees payment for master bootstrap',
            ],

            [
            'course_id'=>40,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for master CSS',
            ],

            [
            'course_id'=>41,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for skill monetization',
            ],

            [
            'course_id'=>42,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for technical writing',
            ],

            [
            'course_id'=>43,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>   'School fees payment for video editing',
            ],

            [
            'course_id'=>44,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for linux',
            ],
            [
            'course_id'=>45,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for for canva',
            ],
            [
            'course_id'=>46,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for cryptocurrency',
            ],
            [
            'course_id'=>47,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for agile methodology',
            ],
            [
            'course_id'=>48,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for scrum',
            ],
            [
            'course_id'=>49,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for kanban',
            ],
            [
            'course_id'=>50,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for gira',
            ],
            [
            'course_id'=>51,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for microsoft project',
            ],
            [
            'course_id'=>52,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for trello',
            ],
            [
            'course_id'=>53,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for asana',
            ],
            [
            'course_id'=>54,
            'amount'=>120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for version control',
            ],
            [
            'course_id'=>55,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for communication tools ',
            ],
            [
            'course_id'=>56,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for time management',
            ],
            [
            'course_id'=>57,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for linux administration',
            ],
            [
            'course_id'=>58,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for window server administration',
            ],
            [
            'course_id'=>59,
            'amount'=>130000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for MacOS proficiency ',
            ],
            [
            'course_id'=>60,
            'amount'=>120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for shell scripting',
            ],
            [
            'course_id'=>61,
            'amount'=>130000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for virtualization',
            ],
            [
            'course_id'=>62,
            'amount'=>130000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for containerization',
            ],
            [
            'course_id'=>63,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for  system monitoring',
            ],
            [
            'course_id'=>64,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for patch management',
            ],
            [
            'course_id'=>65,
            'amount'=>80000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for active directory',
            ],
            [
            'course_id'=>66,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for file system management',
            ],
            [
            'course_id'=>67,
            'amount'=>120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for hardware diagonistics',
            ],
            [
            'course_id'=>68,
            'amount'=>60000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for software installation',
            ],
            [
            'course_id'=>69,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for remote desktop support',
            ],
            [
            'course_id'=>70,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for end-user training',
            ],
            [
            'course_id'=>71,
            'amount'=>130000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for troubleshooting networks',
            ],
            [
            'course_id'=>72,
            'amount'=>120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for system optimization',
            ],
            [
            'course_id'=>73,
            'amount'=>120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for data recovery',
            ],
            [
            'course_id'=>74,
            'amount'=>50000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for malware removal',
            ],
            [
            'course_id'=>75,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for peripheral setup',
            ],
            [
            'course_id'=>76,
            'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for disaster removal',
            ],
            [
            'course_id'=>77,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for geographic information',
            ],
            [
            'course_id'=>78,
            'amount'=>100000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for web mapping',
            ],
            [
            'course_id'=>79,
            'amount'=>130000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for remote sensing',
            ],
            [
            'course_id'=>80,
           'amount' => 120000.00,
            'purpose' => 'sch_fee',
            'description' =>  'School fees payment for quantum computing',
            ],











        ]);
    }
}
