<?php

namespace Modules\Inspection\Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\Inspection\Tests\TestCase;
use Modules\Inspection\Tests\ApiTestTrait;
use Modules\Inspection\Models\DataRecoveryReport;

class DataRecoveryReportApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/data-recovery-reports', $dataRecoveryReport
        );

        $this->assertApiResponse($dataRecoveryReport);
    }

    /**
     * @test
     */
    public function test_read_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/data-recovery-reports/'.$dataRecoveryReport->id
        );

        $this->assertApiResponse($dataRecoveryReport->toArray());
    }

    /**
     * @test
     */
    public function test_update_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->create();
        $editedDataRecoveryReport = DataRecoveryReport::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/data-recovery-reports/'.$dataRecoveryReport->id,
            $editedDataRecoveryReport
        );

        $this->assertApiResponse($editedDataRecoveryReport);
    }

    /**
     * @test
     */
    public function test_delete_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/data-recovery-reports/'.$dataRecoveryReport->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/data-recovery-reports/'.$dataRecoveryReport->id
        );

        $this->response->assertStatus(404);
    }
}
