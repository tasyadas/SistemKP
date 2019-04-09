<table class="table table-responsive" id="pKLS-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Perusahaan</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @php
        $no = 1;   
    @endphp
    @foreach($pKLS as $pKL)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{!! $pKL->name !!}</td>
            <td>{!! $pKL->class !!}</td>
            <td>{!! $pKL->company !!}</td>
            <td>{!! $pKL->start_date !!}</td>
            <td>{!! $pKL->end_date !!}</td>
            <td>
                {!! Form::open(['route' => ['pKLS.destroy', $pKL->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pKLS.show', [$pKL->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pKLS.edit', [$pKL->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>