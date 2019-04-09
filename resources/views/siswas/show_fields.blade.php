<!-- Id Field -->
@if (Auth::user()->is('super_admin') || Auth::user()->is('admin'))
    <div class="form-group">
        {!! Form::label('id', 'Id:') !!}
        <p>{!! $siswa->id !!}</p>
    </div>
@endif
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $siswa->name !!}</p>
</div>

<!-- Class Field -->
<div class="form-group">
    {!! Form::label('class', 'Class:') !!}
    <p>{!! $siswa->class !!}</p>
</div>

<!-- Nis Field -->
<div class="form-group">
    {!! Form::label('nis', 'Nis:') !!}
    <p>{!! $siswa->nis !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $siswa->status == 1 ? "Nama Perusahaan" : "Belum Mendaftar" !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $siswa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $siswa->updated_at !!}</p>
</div>

