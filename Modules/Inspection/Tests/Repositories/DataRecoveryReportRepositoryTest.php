<?php

namespace Modules\Inspection\Tests\Repositories;

use Modules\Inspection\Models\DataRecoveryReport;
use Modules\Inspection\Repositories\DataRecoveryReportRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Modules\Inspection\Tests\TestCase;
use Modules\Inspection\Tests\ApiTestTrait;

class DataRecoveryReportRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    protected DataRecoveryReportRepository $dataRecoveryReportRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->dataRecoveryReportRepo = app(DataRecoveryReportRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->make()->toArray();

        $createdDataRecoveryReport = $this->dataRecoveryReportRepo->create($dataRecoveryReport);

        $createdDataRecoveryReport = $createdDataRecoveryReport->toArray();
        $this->assertArrayHasKey('id', $createdDataRecoveryReport);
        $this->assertNotNull($createdDataRecoveryReport['id'], 'Created DataRecoveryReport must have id specified');
        $this->assertNotNull(DataRecoveryReport::find($createdDataRecoveryReport['id']), 'DataRecoveryReport with given id must be in DB');
        $this->assertModelData($dataRecoveryReport, $createdDataRecoveryReport);
    }

    /**
     * @test read
     */
    public function test_read_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->create();

        $dbDataRecoveryReport = $this->dataRecoveryReportRepo->find($dataRecoveryReport->id);

        $dbDataRecoveryReport = $dbDataRecoveryReport->toArray();
        $this->assertModelData($dataRecoveryReport->toArray(), $dbDataRecoveryReport);
    }

    /**
     * @test update
     */
    public function test_update_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->create();
        $fakeDataRecoveryReport = DataRecoveryReport::factory()->make()->toArray();

        $updatedDataRecoveryReport = $this->dataRecoveryReportRepo->update($fakeDataRecoveryReport, $dataRecoveryReport->id);

        $this->assertModelData($fakeDataRecoveryReport, $updatedDataRecoveryReport->toArray());
        $dbDataRecoveryReport = $this->dataRecoveryReportRepo->find($dataRecoveryReport->id);
        $this->assertModelData($fakeDataRecoveryReport, $dbDataRecoveryReport->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_data_recovery_report()
    {
        $dataRecoveryReport = DataRecoveryReport::factory()->create();

        $resp = $this->dataRecoveryReportRepo->delete($dataRecoveryReport->id);

        $this->assertTrue($resp);
        $this->assertNull(DataRecoveryReport::find($dataRecoveryReport->id), 'DataRecoveryReport should not exist in DB');
    }
}
