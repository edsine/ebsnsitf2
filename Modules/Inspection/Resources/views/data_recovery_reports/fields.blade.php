<!-- Branch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    {!! Form::number('branch_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Employer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employer_id', 'Employer Id:') !!}
    {!! Form::number('employer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Inspection Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_inspection', 'Date Of Inspection:') !!}
    {!! Form::text('date_of_inspection', null, ['class' => 'form-control','id'=>'date_of_inspection']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_of_inspection').datepicker()
    </script>
@endpush

<!-- Debt Established Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debt_established', 'Debt Established:') !!}
    {!! Form::number('debt_established', null, ['class' => 'form-control']) !!}
</div>

<!-- Debt Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('debt_paid', 'Debt Paid:') !!}
    {!! Form::number('debt_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Debt Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_debt_paid', 'Total Debt Paid:') !!}
    {!! Form::number('total_debt_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_payment', 'Date Of Payment:') !!}
    {!! Form::text('date_of_payment', null, ['class' => 'form-control','id'=>'date_of_payment']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_of_payment').datepicker()
    </script>
@endpush

<!-- Rrr Receipt Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrr_receipt_number', 'Rrr Receipt Number:') !!}
    {!! Form::text('rrr_receipt_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Nsitf Receipt Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nsitf_receipt_number', 'Nsitf Receipt Number:') !!}
    {!! Form::text('nsitf_receipt_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Remark Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remark', 'Remark:') !!}
    {!! Form::text('remark', null, ['class' => 'form-control']) !!}
</div>