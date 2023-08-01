<?php

namespace Modules\Inspection\Http\Controllers;

use Modules\Inspection\Http\Requests\CreateDataRecoveryReportRequest;
use Modules\Inspection\Http\Requests\UpdateDataRecoveryReportRequest;
use App\Http\Controllers\AppBaseController;
use Modules\Inspection\Repositories\DataRecoveryReportRepository;
use Illuminate\Http\Request;
use Flash;

class DataRecoveryReportController extends AppBaseController
{
    /** @var DataRecoveryReportRepository $dataRecoveryReportRepository*/
    private $dataRecoveryReportRepository;

    public function __construct(DataRecoveryReportRepository $dataRecoveryReportRepo)
    {
        $this->dataRecoveryReportRepository = $dataRecoveryReportRepo;
    }

    /**
     * Display a listing of the DataRecoveryReport.
     */
    public function index(Request $request)
    {
        $dataRecoveryReports = $this->dataRecoveryReportRepository->paginate(10);

        return view('data_recovery_reports.index')
            ->with('dataRecoveryReports', $dataRecoveryReports);
    }

    /**
     * Show the form for creating a new DataRecoveryReport.
     */
    public function create()
    {
        return view('data_recovery_reports.create');
    }

    /**
     * Store a newly created DataRecoveryReport in storage.
     */
    public function store(CreateDataRecoveryReportRequest $request)
    {
        $input = $request->all();

        $dataRecoveryReport = $this->dataRecoveryReportRepository->create($input);

        Flash::success('Data Recovery Report saved successfully.');

        return redirect(route('dataRecoveryReports.index'));
    }

    /**
     * Display the specified DataRecoveryReport.
     */
    public function show($id)
    {
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            Flash::error('Data Recovery Report not found');

            return redirect(route('dataRecoveryReports.index'));
        }

        return view('data_recovery_reports.show')->with('dataRecoveryReport', $dataRecoveryReport);
    }

    /**
     * Show the form for editing the specified DataRecoveryReport.
     */
    public function edit($id)
    {
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            Flash::error('Data Recovery Report not found');

            return redirect(route('dataRecoveryReports.index'));
        }

        return view('data_recovery_reports.edit')->with('dataRecoveryReport', $dataRecoveryReport);
    }

    /**
     * Update the specified DataRecoveryReport in storage.
     */
    public function update($id, UpdateDataRecoveryReportRequest $request)
    {
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            Flash::error('Data Recovery Report not found');

            return redirect(route('dataRecoveryReports.index'));
        }

        $dataRecoveryReport = $this->dataRecoveryReportRepository->update($request->all(), $id);

        Flash::success('Data Recovery Report updated successfully.');

        return redirect(route('dataRecoveryReports.index'));
    }

    /**
     * Remove the specified DataRecoveryReport from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dataRecoveryReport = $this->dataRecoveryReportRepository->find($id);

        if (empty($dataRecoveryReport)) {
            Flash::error('Data Recovery Report not found');

            return redirect(route('dataRecoveryReports.index'));
        }

        $this->dataRecoveryReportRepository->delete($id);

        Flash::success('Data Recovery Report deleted successfully.');

        return redirect(route('dataRecoveryReports.index'));
    }
}
