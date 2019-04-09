<table class="table table-responsive" id="bengkels-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Alamat</th>
            <th>Kuota</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @php
        $no=1;
    @endphp
    @foreach($bengkels as $bengkel)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{!! $bengkel->name !!}</td>
            <td>{!! $bengkel->alamat !!}</td>
            <td>{!! $bengkel->kuota !!}</td>
            <td>{!! $bengkel->status == 1 ? "Tersedia" : "Kuota Habis" !!}</td>
            <td>
            @if (Auth::user()->is('super_admin') || Auth::user()->is('admin'))
                {!! Form::open(['route' => ['bengkels.destroy', $bengkel->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bengkels.show', [$bengkel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bengkels.edit', [$bengkel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
            @endif
            @if (Auth::user()->is('siswa'))
                <div class='btn-group'>
                    <a href="{!! route('bengkels.show', [$bengkel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                </div>
                {!! Form::close() !!}
            @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>