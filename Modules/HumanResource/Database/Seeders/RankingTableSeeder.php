<?php

namespace Modules\HumanResource\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Modules\HumanResource\Models\Ranking;

class RankingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Model::unguard();
       DB::table('ranking')->delete();
        $rank=[
            [
                'name'=>'General Manager'
            ],
            [
                'name'=>'Assitant General Manager'
            ],
            [
                'name'=>'Principal Manager'
            ],
            [
                'name'=>'Senior Manager'
            ],
            [
                'name'=>' Manager'
            ],
            [
                'name'=>'Assitant Manager'
            ],
            [
                'name'=>'Officer 1'
            ],
            [
                'name'=>'Officer 2'
            ],


        ];
        DB::table('ranking')->insert($rank);

        // Ranking::create('name','');
        // Ranking::create('name','Deputy General Manager');
        // Ranking::create('name','General Manager');
        // Ranking::create('name','Principal Manager');
        // Ranking::create('name',' Senior Manager');
        // Ranking::create('name','Manager');
        // Ranking::create('name','Assistant Manager');
        // Ranking::create('name','Officer 1');
        // Ranking::create('name','Officer 2');
        // $this->call("OthersTableSeeder");
       
    }
}
