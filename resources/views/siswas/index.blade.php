@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Siswa</h1>
        @if (Auth::user()->is('super_admin') || Auth::user()->is('admin'))
            <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('siswas.create') !!}">Tambah Baru</a>
            </h1>
        @endif
        <br>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-solid box-primary">
            <div class="box-header">
                <h3 class="box-title">List Siswa</h3>
            </div>
            <div class="box-body">
                @include('siswas.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $('#siswas-table').DataTable();
    });
    </script>
@endsection

