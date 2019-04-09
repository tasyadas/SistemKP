<table class="table table-responsive" id="siswas-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Class</th>
            <th>Nis</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($siswas as $siswa)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{!! $siswa->name !!}</td>
            <td>{!! $siswa->class !!}</td>
            <td>{!! $siswa->nis !!}</td>
            <td>{!! $siswa->status == 1 ? "Nama Perusahaan" : "Belum Mendaftar" !!}</td>
            <td>
            @if (Auth::user()->is('super_admin') || Auth::user()->is('admin'))
                {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('siswas.show', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('siswas.edit', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
            @elseif(Auth::user()->is('siswa'))
                <div class='btn-group'>
                    <a href="{!! route('siswas.show', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                </div>
            @endif
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>