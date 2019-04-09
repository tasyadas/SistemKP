<table class="table table-responsive" id="jurusans-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Kode Jurusan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php
            $no=1;
        @endphp
        @foreach($jurusans as $jurusan)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{!! $jurusan->name !!}</td>
                <td>{!! $jurusan->kode_jurusan !!}</td>
                <td>
                    {!! Form::open(['route' => ['jurusans.destroy', $jurusan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('jurusans.show', [$jurusan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('jurusans.edit', [$jurusan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        
        @endforeach
    </tbody>
</table>