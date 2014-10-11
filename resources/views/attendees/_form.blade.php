<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'form-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<div class="alert alert-danger" role="alert">:message</div>') !!}
</div>

<div class="form-group">
    {!! Form::label('experience', 'Experience:', ['class' => 'form-label']) !!}
    {!! Form::text('experience', null, ['class' => 'form-control']) !!}
</div>

<div class="form-grup">
    {!! Form::submit('Submit', ['class' => 'btn btn-success btn-block']) !!}
</div>