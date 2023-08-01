<?php

namespace Modules\HumanResource\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class LeaveTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        DB::table('leavetype')->delete();
        $leave_types = [
            [
                'name'=> "SELECT LEAVE TYPE ",
                'duration' => 0
            ],
            [
                'name'=> 'PATERNITY LEAVE',
                'duration' => 2
            ],
            
            [
                'name' =>'SICK LEAVE',
                'duration' => 2
            ]
            ,[
                'name' => 'PARTERNITY',
                'duration' => 2
            ],
            [
                'name' => 'PERSONAL LEAVE',
                'duration' => 4
            ]
        ];
        DB::table('leavetype')->insert($leave_types);
        
        
    }
}
