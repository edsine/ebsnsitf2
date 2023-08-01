<?php

namespace Modules\Inspection\Database\Factories;

use Modules\Inspection\Models\DataRecoveryReport;
use Illuminate\Database\Eloquent\Factories\Factory;

use Modules\Inspection\Models\Branch;
use Modules\Inspection\Models\Employer;

class DataRecoveryReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataRecoveryReport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $employer = Employer::first();
        if (!$employer) {
            $employer = Employer::factory()->create();
        }

        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'created_by' => $this->faker->randomDigitNotNull,
            'branch_id' => $branch->id,
            'employer_id' => $employer->id,
            'date_of_inspection' => $this->faker->date('Y-m-d'),
            'debt_established' => $this->faker->randomDigitNotNull,
            'debt_paid' => $this->faker->randomDigitNotNull,
            'total_debt_paid' => $this->faker->randomDigitNotNull,
            'balance' => $this->faker->randomDigitNotNull,
            'date_of_payment' => $this->faker->date('Y-m-d'),
            'rrr_receipt_number' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'nsitf_receipt_number' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'remark' => $this->faker->text(500)
        ];
    }
}
