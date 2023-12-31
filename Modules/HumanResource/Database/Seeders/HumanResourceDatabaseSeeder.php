<?php

namespace Modules\HumanResource\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class HumanResourceDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Model::unguard();
        
        $this->call(LeaveTypeTableSeeder::class);
       $this->call(RankingTableSeeder::class);
    }
}
