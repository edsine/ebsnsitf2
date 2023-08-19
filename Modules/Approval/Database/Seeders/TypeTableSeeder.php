<?php

namespace Modules\Approval\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $types = [
            [
                'name' => 'ESSP Registration',
                'cycle' => 'Once',
                'scopeable_type' => null,
                'scopeable_id' => null,
                'metric' => 'Days',
                'duration' => 7,
                'status' => true,
            ],
            [
                'name' => 'Claims Approval',
                'cycle' => 'Periodically',
                'scopeable_type' => null,
                'scopeable_id' => null,
                'metric' => 'Days',
                'duration' => 7,
                'status' => true,
            ],
            [
                'name' => 'Duty and Transport Allowance',
                'cycle' => 'Periodic',
                'scopeable_type' => 'Modules\\Approval\\Models\\Branch',
                'scopeable_id' => 1,
                'metric' => 'Days',
                'duration' => 7,
                'status' => true,
            ],
            [
                'name' => 'Annual Leave',
                'cycle' => 'Annual',
                'scopeable_type' => null,
                'scopeable_id' => null,
                'metric' => 'Months',
                'duration' => 2,
                'status' => true,
            ],
        ];

        DB::table('types')->insert($types);
    }
}
