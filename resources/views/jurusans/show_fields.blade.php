<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $jurusan->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $jurusan->name !!}</p>
</div>

<!-- Kode Jurusan Field -->
<div class="form-group">
    {!! Form::label('kode_jurusan', 'Kode Jurusan:') !!}
    <p>{!! $jurusan->kode_jurusan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $jurusan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $jurusan->updated_at !!}</p>
</div>

