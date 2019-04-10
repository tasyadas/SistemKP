<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_jurusan', 'Name:') !!}
    {!! Form::text('kode_jurusan', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Jurusan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Kode Jurusan:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jurusans.index') !!}" class="btn btn-default">Cancel</a>
</div>
