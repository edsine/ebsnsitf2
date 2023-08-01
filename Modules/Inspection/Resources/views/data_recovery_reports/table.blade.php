<div class="card-body p-5">
    <div class="table-responsive">
        <table class="table align-middle gs-0 gy-4" id="data-recovery-reports-table">
            <thead>
                <tr class="fw-bold text-muted bg-light">
                    <th class="min-w-200px">Created By</th>
                    <th class="min-w-200px">Branch Id</th>
                    <th class="min-w-200px">Employer Id</th>
                    <th class="min-w-200px">Date Of Inspection</th>
                    <th class="min-w-200px">Debt Established</th>
                    <th class="min-w-200px">Debt Paid</th>
                    <th class="min-w-200px">Total Debt Paid</th>
                    <th class="min-w-200px">Balance</th>
                    <th class="min-w-200px">Date Of Payment</th>
                    <th class="min-w-200px">Rrr Receipt Number</th>
                    <th class="min-w-200px">Nsitf Receipt Number</th>
                    <th class="min-w-200px">Remark</th>
                    <th class="min-w-120px" colspan="1">Action</th>
                    <th class="min-w-200px text-end rounded-end"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataRecoveryReports as $dataRecoveryReport)
                    <tr class="fw-bold text-muted bg-light">
                        <td>{{ $dataRecoveryReport->created_by }}</td>
                        <td>{{ $dataRecoveryReport->branch_id }}</td>
                        <td>{{ $dataRecoveryReport->employer_id }}</td>
                        <td>{{ $dataRecoveryReport->date_of_inspection }}</td>
                        <td>{{ $dataRecoveryReport->debt_established }}</td>
                        <td>{{ $dataRecoveryReport->debt_paid }}</td>
                        <td>{{ $dataRecoveryReport->total_debt_paid }}</td>
                        <td>{{ $dataRecoveryReport->balance }}</td>
                        <td>{{ $dataRecoveryReport->date_of_payment }}</td>
                        <td>{{ $dataRecoveryReport->rrr_receipt_number }}</td>
                        <td>{{ $dataRecoveryReport->nsitf_receipt_number }}</td>
                        <td>{{ $dataRecoveryReport->remark }}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['dataRecoveryReports.destroy', $dataRecoveryReport->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('dataRecoveryReports.show', [$dataRecoveryReport->id]) }}"
                                    class='btn btn-default btn-xs'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('dataRecoveryReports.edit', [$dataRecoveryReport->id]) }}"
                                    class='btn btn-default btn-xs'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'onclick' => "return confirm('Are you sure?')",
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                        <th class="min-w-200px text-end rounded-end"></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $dataRecoveryReports])
        </div>
    </div>
</div>
