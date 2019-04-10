@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pendaftaran PKL
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'pKLS.store']) !!}

                        @include('p_k_l_s.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>

    $('#nis').change(function (){
        console.log(this);
        
        $.getJSON( "/api/siswas/"+$(this).val(), function( data ) {
            $('#name').val(data.data.name);
            $('#angkatan').val(data.data.angkatan);
            $('#jurusan').val(data.data.jurusan.name);
            $('#class').val(data.data.class);
            $('#siswa_id').val(data.data.id);
        });
        
    });

</script>
@endsection


