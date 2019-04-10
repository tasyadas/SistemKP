<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Nis Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nis', 'NIS:') !!}
    {!! Form::text('nis', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Field -->
<div class="form-group col-sm-12">
    {!! Form::label('class', 'Class:') !!}
    {!! Form::text('class', null, ['class' => 'form-control']) !!}
</div>

<!-- Angkatan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('angkatan', 'Angkatan:') !!}
    {!! Form::text('angkatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Jurusan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jurusan_id', 'Jurusan:') !!}
    {!! Form::select('jurusan_id', $jurusan, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('siswas.index') !!}" class="btn btn-default">Cancel</a>
</div>
