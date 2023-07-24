<?php

namespace Modules\UnitManager\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\UnitManager\Http\Requests\CreateUnitRequest;
use Modules\UnitManager\Http\Requests\UpdateUnitRequest;
use App\Http\Controllers\AppBaseController;
use Modules\UnitManager\Repositories\UnitRepository;
use Modules\UnitManager\Repositories\UnitHeadRepository;
use Flash;
use App\Http\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Modules\Shared\Repositories\DepartmentRepository;


class UnitController extends AppBaseController
{

    /** @var DepartmentRepository $departmentRepository*/
    private $departmentRepository;

    /** @var UnitHeadRepository $unitheadRepository*/
    private $unitheadRepository;

    /** @var UnitRepository $unitRepository*/
    private $unitRepository;


    public function __construct(DepartmentRepository $departmentRepo, UnitHeadRepository $unitHeadRepo, UnitRepository $unitRepo)
    {
        $this->departmentRepository = $departmentRepo;
        $this->unitheadRepository = $unitHeadRepo;
        $this->unitRepository = $unitRepo;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $units = $this->unitRepository->paginate(10);

        return view('unitmanager::units.index')->with('units', $units);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $departments = $this->departmentRepository->all()->pluck('department_unit', 'id');
        $departments->prepend('Select department', '');
        $unitheads = $this->unitheadRepository->all()->pluck('name', 'id');
        $unitheads->prepend('Select Unit Head', '');
        return view('unitmanager::units.create')->with(['unitheads'=> $unitheads,'departments'=> $departments]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateUnitRequest $request)
    {
        $input = $request->all();
        //$input['user_id'] = Auth::id();

        

        $unit = $this->unitRepository->create($input);

        Flash::success('Unit saved successfully.');

        return redirect(route('units.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $unit = $this->unitRepository->find($id);
        
        if (empty($unit)) {
            Flash::error('Unit not found');

            return redirect(route('units.index'));
        }

        return view('unitmanager::units.show')->with('unit', $unit);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $unit = $this->unitRepository->find($id);

        if (empty($unit)) {
            Flash::error('Unit not found');

            return redirect(route('units.index'));
        }
        
        $departments = $this->departmentRepository->all()->pluck('department_unit', 'id');
        $departments->prepend('Select Department', '');
        $unithead = $this->unitheadRepository->all()->pluck('name', 'id');
        $unithead->prepend('Select Unit Head', '');
        return view('unitmanager::units.edit')->with(['unitheads' => $unithead, 'unit' => $unit, 'departments' => $departments]);
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update($id, UpdateUnitRequest $request)
    {
        $unit = $this->unitRepository->find($id);

        if (empty($unit)) {
            Flash::error('Unit not found');

            return redirect(route('units.index'));
        }

        $input = $request->all();

        //$input['user_id'] = Auth::id();

        $unit = $this->unitRepository->update($input, $id);

        Flash::success('Unit updated successfully.');

        return redirect(route('units.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $unit = $this->unitRepository->find($id);

        if (empty($unit)) {
            Flash::error('Unit not found');

            return redirect(route('units.index'));
        }

        $this->unitRepository->delete($id);

        Flash::success('unit deleted successfully.');

        return redirect(route('units.index'));
    }
}
