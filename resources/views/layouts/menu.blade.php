<li class="{{ Request::is('/') ? 'active' : '' }}">
    <a href="{!! url('/') !!}"><i class="fa fa-home"></i><span>Beranda</span></a>
</li>

<li class="header text-center">MENU</li>

<li class="{{ Request::is('bengkels*') ? 'active' : '' }}">
    <a href="{!! route('bengkels.index') !!}"><i class="fa fa-handshake-o"></i><span> Bengkel</span></a>
</li>

<li class="{{ Request::is('siswas*') ? 'active' : '' }}">
    <a href="{!! route('siswas.index') !!}"><i class="fa fa-child"></i><span> Siswa</span></a>
</li>

<li class="{{ Request::is('pKLS*') ? 'active' : '' }}">
    <a href="{!! route('pKLS.index') !!}"><i class="fa fa-edit"></i><span>Pendaftaran PKL</span></a>
</li>

<li class="{{ Request::is('jurusans*') ? 'active' : '' }}">
    <a href="{!! route('jurusans.index') !!}"><i class="fa fa-edit"></i><span>Jurusan</span></a>
</li>

@if (Auth::user()->is('super_admin'))
    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>User</span></a>
    </li>
@endif



