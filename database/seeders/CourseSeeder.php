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
        DB::table('courses')->insert([[
           'name'=>'Graphic Design',
           'course_code'=>'GD',
           'duration'=>'10 weeks',
           'frequency'=>'Twice a week'
         
        ],
        [
            'name'=>'Mobile App Development',
            'course_code'=>'MD',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week'
          
        ],
         [
            'name'=>'User Interface/User Experience',
            'course_code'=>'UI/UX',
            'duration'=>'8 weeks',
            
            'frequency'=>'Twice a week'
          
         ],
         [
            'name'=>'3D Modelling',
            'course_code'=>'3DM',
            'duration'=>'8 weeks',
            
            'frequency'=>'Four class weekly'
          
         ],
         [
            'name'=>'3D Animation',
            'course_code'=>'3DA',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week'
          
         ],
         [
            'name'=>'Digital Marketing',
            'course_code'=>'DM',
            'duration'=>'8 weeks',
            
            'frequency'=>'Twice a week'
          
         ],
         [
            'name'=>'Website Development',
            'course_code'=>'Web/dev',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week'
          
         ],
         [
            'name'=>'Cyber Security',
            'course_code'=>'CS',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Motion Graphics',
            'course_code'=>'MG',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Blockchain Technology',
            'course_code'=>'BT',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Sage',
            'course_code'=>'sage',
            'duration'=>'3 days',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Networking',
            'course_code'=>'NET',
            'duration'=>'8 weeks',
            
            'frequency'=>'Twice a week',
          
         ],
         [
            'name'=>'Artificial Intelligence',
            'course_code'=>'AI',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Forex Trading',
            'course_code'=>'FT',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Advance Backend Programming',
            'course_code'=>'BP',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Advance Front-end Programming',
            'course_code'=>'FP',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
            
          
         ],
         [
            'name'=>'Cloud Computing',
            'course_code'=>'CC',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Data Science/Analytics',
            'course_code'=>'DSA',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Microsoft Excel',
            'course_code'=>'MME',
            'duration'=>'4 weeks',
            
            'frequency'=>'Twice a week',
          
         ],
         [
            'name'=>'Copywriting',
            'course_code'=>'CW',
            'duration'=>'4 weeks',
            
            'frequency'=>'Twice a week',
          
         ],
         [
            'name'=>'Software Engineering',
            'course_code'=>'SE',
            'duration'=>'7 month',
            
            'frequency'=>'Four class weekly',
          
         ],
         [
            'name'=>'R-Programmig',
            'course_code'=>'RP',
            'duration'=>'8 weeks',
            
            'frequency'=>'Twice a week',
          
         ],
         [
            'name'=>'Data Visualization Using Microsoft Power BI',
            'course_code'=>'DVMP',
            'duration'=>'6 weeks',
            
            'frequency'=>'Twice a week',
          
         ],
         [
            'name'=>'Wordpress Web Design',
            'course_code'=>'WWD',
            'duration'=>'4 weeks',
            
            'frequency'=>'Thrice a week',
         ],
         [
            'name'=>'Adobe Illustrator',
            'course_code'=>'ADI',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>' AutoCad',
            'course_code'=>'AC',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Interior Designing',
            'course_code'=>'ID',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'IT Auditing',
            'course_code'=>'ITA',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Python',
            'course_code'=>'MP',
            'duration'=>'4 months',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Javascript',
            'course_code'=>'JS',
            'duration'=>'4 months',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Data Processing',
            'course_code'=>'DP',
            'duration'=>'2 months',
            
            'frequency'=>'Twice a week',
          
         ],
         [
            'name'=>'Master React',
            'course_code'=>'MR',
            'duration'=>'3 months',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Jquery',
            'course_code'=>'MJ',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Ajax',
            'course_code'=>'MA',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Php',
            'course_code'=>'MP',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
            
          
         ],
         [
            'name'=>'Master C++',
            'course_code'=>'MC',
            'duration'=>'15 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master C#',
            'course_code'=>'MC#',
            'duration'=>'15 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Node.Js',
            'course_code'=>'MA',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master Boostrap',
            'course_code'=>'MB',
            'duration'=>'4 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Master CSS',
            'course_code'=>'MC',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Skill Monetizatiom',
            'course_code'=>'SM',
            'duration'=>'3 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Technical Writing',
            'course_code'=>'TW',
            'duration'=>'4 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Video Editing',
            'course_code'=>'VE',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'LINUX',
            'course_code'=>'LN',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Canva',
            'course_code'=>'CV',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Cryptocurrency Trading',
            'course_code'=>'CT',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Agile Methodology',
            'course_code'=>'AM',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Scrum',
            'course_code'=>'SM',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Kanban',
            'course_code'=>'KB',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'JIRA',
            'course_code'=>'JR',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Microsoft Project',
            'course_code'=>'MP',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Trello',
            'course_code'=>'TO',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Asana',
            'course_code'=>'CT',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Version Control (e.g, Git)',
            'course_code'=>'VC',
            'duration'=>'6 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Communication Tools',
            'course_code'=>'CTs',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Time Management Skills',
            'course_code'=>'TMS',
            'duration'=>'8 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Linux Administration',
            'course_code'=>'LA',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Window Server Administration',
            'course_code'=>'WSA',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'MacOS Proficiency',
            'course_code'=>'MCP',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Shell Scripting',
            'course_code'=>'CT',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Virtualization (e.g, firmware)',
            'course_code'=>'VL',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Containerization',
            'course_code'=>'CN',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'System Monitoring',
            'course_code'=>'SM',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Patch Management',
            'course_code'=>'PM',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Active Directory',
            'course_code'=>'AD',
            'duration'=>'6 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'File System Management',
            'course_code'=>'FSM',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Hardware Diagonistics',
            'course_code'=>'HD',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Software Installation/Configuration',
            'course_code'=>'SIC',
            'duration'=>'4 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Remote Desktop Support',
            'course_code'=>'RDS',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'End-User Training',
            'course_code'=>'EUT',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'TroubleShooting Networks',
            'course_code'=>'TSN',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'System Optimization',
            'course_code'=>'SO',
            'duration'=>'6 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Data Recovery',
            'course_code'=>'DR',
            'duration'=>'6 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Malware Removal',
            'course_code'=>'MR',
            'duration'=>'3 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Peripheral Setup',
            'course_code'=>'PS',
            'duration'=>'16 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Disaster Recovery Planning',
            'course_code'=>'DRP',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Geographic Information (GIS)',
            'course_code'=>'GIS',
            'duration'=>'14 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Web Mapping',
            'course_code'=>'WM',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Remote Sensing',
            'course_code'=>'RS',
            'duration'=>'10 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],
         [
            'name'=>'Quantum Computing',
            'course_code'=>'QC',
            'duration'=>'12 weeks',
            
            'frequency'=>'Thrice a week',
          
         ],

        
        
        
        
        
        
        ]);
    }
}
