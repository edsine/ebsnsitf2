<!-- unit name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_name', 'Unit Name:') !!}
    {!! Form::text('unit_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Users:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control custom-select']) !!}
</div>
