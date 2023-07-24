<!-- unit name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_name', 'Unit Name:') !!}
    {!! Form::text('unit_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::select('department_id', $departments, null, ['class' => 'form-control custom-select']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('unit_head_id', 'Unit Head:') !!}
    {!! Form::select('unit_head_id', $unitheads, null, ['class' => 'form-control custom-select']) !!}
</div>