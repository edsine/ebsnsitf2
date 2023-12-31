<?php

namespace Modules\ClaimsCompensation\Http\Controllers;

use Modules\ClaimsCompensation\Http\Requests\StoreDeathClaimRequest;
use Modules\ClaimsCompensation\Http\Requests\UpdateDeathClaimRequest;
use Modules\ClaimsCompensation\Models\DeathClaim;
use App\Http\Controllers\AppBaseController;
use Modules\EmployerManager\Models\Employee;

class DeathClaimController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $claims = DeathClaim::with('employee')->get(); //auth()->user()->death_claims;
        return view('claimscompensation::death_claims.index', compact('claims'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        $employees = auth()->user()->employees;
        return view('claimscompensation::death_claims.create', compact('employees'));
    } */

    /**
     * Store a newly created resource in storage.
     */
    /* public function store(StoreDeathClaimRequest $request)
    {
        $validated = $request->validated();
        $validated['document'] = request()->file('document')->store('claims_documents', 'public');

        auth()->user()->death_claims()->create($validated);

        return redirect()->route('death.index')->with('success', 'Death claim created successfully!');
    } */

    /**
     * Display the specified resource.
     */
    public function show(DeathClaim $deathClaim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeathClaim $deathClaim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /* public function update(UpdateDeathClaimRequest $request, DeathClaim $deathClaim)
    {
        //
    }
 */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeathClaim $deathClaim)
    {
        //
    }
}
