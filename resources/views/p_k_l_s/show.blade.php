@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pendaftaran PKL
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('p_k_l_s.show_fields')
                    <a href="{!! route('pKLS.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
