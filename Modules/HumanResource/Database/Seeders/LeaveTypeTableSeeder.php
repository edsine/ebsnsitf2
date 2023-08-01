<?php

namespace Modules\HumanResource\Database\Seeders;

use Illuminate\Database\Seeder;



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
        \DB::table('leavetype')->delete();
        $leave_types = [
            [
                'name' => 'SICK LEAVE',
                'duration' => 2
            ],
            [
                'name' => 'PERSONAL LEAVE',
                'duration' => 4
            ]
        ];
        \DB::table('leavetype')->insert($leave_types);
        // LeaveType::create('name','SICK LEAVE');
        // LeaveType::create('name','PERSONAL LEAVE');
        // LeaveType::create('name','PATERNITY LEAVE');
        // LeaveType::create('name','MATERNITY LEAVE');
        // LeaveType::create('name','FOOTBALL LEAVE');
        // LeaveType::create('name','PARTY LEAVE');
        // LeaveType::create('name','ANNUAL LEAVE');
        // LeaveType::create('name','REST LEAVE');
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // DB::table('leavetype')->truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // LeaveType::factory(10)->create();
        
    }
}
