<?php

namespace Modules\Inspection\Http\Controllers\API;

use Modules\Inspection\Http\Requests\API\CreateDataRecoveryReportAPIRequest;
use Modules\Inspection\Http\Requests\API\UpdateDataRecoveryReportAPIRequest;
use Modules\Inspection\Models\DataRecoveryReport;
use Modules\Inspection\Repositories\DataRecoveryReportRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Modules\Inspection\Http\Resources\DataRecoveryReportResource;

/**
 * Class DataRecoveryReportController
 */

class DataRecoveryReportAPIController extends AppBaseController
{
    /** @var  DataRecoveryReportRepository */
    private $dataRecoveryReportRepository;

    public function __construct(DataRecoveryReportRepository $dataRecoveryReportRepo)
    {
        $this->dataRecoveryReportRepository = $dataRecoveryReportRepo;
    }

    /**
     * @OA\Get(
     *      path="/data-recovery-reports",
     *      summary="getDataRecoveryReportList",
     *      tags={"DataRecoveryReport"},
     *      description="Get all DataRecoveryReports",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(ref="#/components/schemas/DataRecoveryReport")
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request): JsonResponse
    {
        $dataRecoveryReports = $this->dataRecoveryReportRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(DataRecoveryReportResource::collection($dataRecoveryReports), 'Data Recovery Reports retrieved successfully');
    }

    /**
     * @OA\Post(
     *      path="/data-recovery-reports",
     *      summary="createDataRecoveryReport",
     *      tags={"DataRecoveryReport"},
     *      description="Create DataRecoveryReport",
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/DataRecoveryReport")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/DataRecoveryReport"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateDataRecoveryReportAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $dataRecoveryReport = $this->dataRecoveryReportRepository->create($input);

        return $this->sendResponse(new DataRecoveryReportResource($dataRecoveryReport), 'Data Recovery Report saved successfully');
    }

    /**
     * @OA\Get(
     *      path="/data-recovery-reports/{id}",
     *      summary="getDataRecoveryReportItem",
     *      tags={"DataRecoveryReport"},
     *      description="Get DataRecoveryReport",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of DataRecoveryReport",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/DataRecoveryReport"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id): JsonResponse
    {
        /** @var DataRecoveryReport $dataRecoveryReport */
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            return $this->sendError('Data Recovery Report not found');
        }

        return $this->sendResponse(new DataRecoveryReportResource($dataRecoveryReport), 'Data Recovery Report retrieved successfully');
    }

    /**
     * @OA\Put(
     *      path="/data-recovery-reports/{id}",
     *      summary="updateDataRecoveryReport",
     *      tags={"DataRecoveryReport"},
     *      description="Update DataRecoveryReport",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of DataRecoveryReport",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(ref="#/components/schemas/DataRecoveryReport")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  ref="#/components/schemas/DataRecoveryReport"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateDataRecoveryReportAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var DataRecoveryReport $dataRecoveryReport */
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            return $this->sendError('Data Recovery Report not found');
        }

        $dataRecoveryReport = $this->dataRecoveryReportRepository->update($input, $id);

        return $this->sendResponse(new DataRecoveryReportResource($dataRecoveryReport), 'DataRecoveryReport updated successfully');
    }

    /**
     * @OA\Delete(
     *      path="/data-recovery-reports/{id}",
     *      summary="deleteDataRecoveryReport",
     *      tags={"DataRecoveryReport"},
     *      description="Delete DataRecoveryReport",
     *      @OA\Parameter(
     *          name="id",
     *          description="id of DataRecoveryReport",
     *           @OA\Schema(
     *             type="integer"
     *          ),
     *          required=true,
     *          in="path"
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\JsonContent(
     *              type="object",
     *              @OA\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @OA\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @OA\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id): JsonResponse
    {
        /** @var DataRecoveryReport $dataRecoveryReport */
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            return $this->sendError('Data Recovery Report not found');
        }

        $dataRecoveryReport->delete();

        return $this->sendSuccess('Data Recovery Report deleted successfully');
    }
}
