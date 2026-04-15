<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
         //[
      //      'name'=>'Front-End Development',
      //      'course_code'=>'FD',
      //      'duration'=>'12 weeks',
      //      'frequency'=>'Twice a week', 
      //   ],
      //   [
      //       'name'=>'Back-End Development',
      //       'course_code'=>'BD',
      //       'duration'=>'12 weeks',
      //       'frequency'=>'Thrice a week'
          
      //   ],
      //    [
      //       'name'=>'Full Stack Development',
      //       'course_code'=>'FUD',
      //       'duration'=>'24 weeks',
      //       'frequency'=>'Twice a week'
          
      //    ],
      //    [
      //       'name'=>'Data Analytics',
      //       'course_code'=>'DA',
      //       'duration'=>'12 weeks', 
      //       'frequency'=>'Twice weekly'
          
      //    ],
      //    [
      //       'name'=>'UI/UX Design',
      //       'course_code'=>'UI/UX',
      //       'duration'=>'12 weeks',
      //       'frequency'=>'Thrice a week'
          
      //    ],
      //    [
      //       'name'=>'Cyber Security ',
      //       'course_code'=>'CS',
      //       'duration'=>'12 weeks', 
      //       'frequency'=>'Twice a week'
          
      //    ],
      //    [
      //       'name'=>'Graphics Design',
      //       'course_code'=>'GD',
      //       'duration'=>'12 weeks', 
      //       'frequency'=>'Thrice a week'
          
      //    ], 
      //    [
      //       'name'=>'Tech A Teen',
      //       'course_code'=>'TT',
      //       'duration'=>'Monthly', 
      //       'frequency'=>'Once a week', 
      //    ], 
        //  [
        //     'name'=>'Digital marketing',
        //     'course_code'=>'DM',
        //     'duration'=>'Monthly', 
        //     'frequency'=>'Once a week', 
        //  ], 
           [
            'name'=>'AI & Machine learning',
            'course_code'=>'AM',
            'duration'=>'Monthly', 
            'frequency'=>'Thrice a week', 
         ],
          [
            'name'=>'Product Managemet',
            'course_code'=>'PM',
            'duration'=>'Monthly', 
            'frequency'=>'Thrice a week', 
         ],
          [
            'name'=>'Business Analysis',
            'course_code'=>'BA',
            'duration'=>'Monthly', 
            'frequency'=>'Once a week', 
         ],
        ]);
    }
}
