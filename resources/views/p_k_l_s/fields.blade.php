    <!-- Nis Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('nis', 'NIS:') !!}
        {!! Form::select('nis', $nis, null, ['class' => 'form-control']) !!}
    </div>

    <!-- Name Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('name', 'Nama:') !!}
        {!! Form::text('name', null,['class' => 'form-control', 'readonly'=>true, 'id' => 'name']) !!}
    </div>

    <!-- Academic Year Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('academic_year', 'Tahun Akademik:') !!}
        {!! Form::text('academic_year', null, ['class' => 'form-control', 'readonly'=>true, 'id' => 'angkatan']) !!} 
    </div>

    <!-- Major Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('major', 'Jurusan:') !!}
        {!! Form::text('major', null, ['class' => 'form-control', 'readonly'=>true, 'id' => 'jurusan']) !!}
    </div>

    <!-- Class Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('class', 'Kelas:') !!}
        {!! Form::text('class', null,['class' => 'form-control', 'readonly'=>true, 'id' => 'class']) !!}
    </div>

    <!-- Company Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('company', 'Nama Instansi/Perusahaan:') !!}
        {!! Form::select('company', $bengkel, null, ['class' => 'form-control']) !!}
    </div>

    <!-- Start Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('start_date', 'Tanggal Mulai:') !!}
        {!! Form::text('start_date', null, ['class' => 'form-control datetimepicker']) !!}
    </div>

    <!-- End Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('end_date', 'Tanggal Selesai:') !!}
        {!! Form::text('end_date', null, ['class' => 'form-control datetimepicker']) !!}
    </div>
  
    <!-- Field -->
    <div class="form-group col-sm-6" style="visibility: hidden;">
        {!! Form::text('siswa_id', null, ['class' => 'form-control', 'readonly'=>true, 'id' => 'siswa_id']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Ajukan PKL', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('pKLS.index') !!}" class="btn btn-default">Cancel</a>
    </div>
{{-- @endfor --}}
