<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'SIM SARPRAS')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- AdminLTE + Bootstrap + FontAwesome --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    {{-- Navbar --}}
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item d-flex align-items-center mr-3">
                    <div class="text-right">
                        <strong>{{ Auth::user()->name }}</strong><br>
                        <small class="text-muted">{{ ucfirst(Auth::user()->role) }}</small>
                    </div>
                    <i class="fas fa-user-circle fa-2x text-secondary ml-2"></i>
                </li>
                <li class="nav-item">
                    <a class="btn btn-sm btn-outline-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endauth
        </ul>
    </nav>

    {{-- Sidebar --}}
    @auth
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        {{-- Logo --}}
        <a href="{{ route('dashboard') }}" class="brand-link text-center">
            <img src="{{ asset('vendor\adminlte\dist\img\AMIKLogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .9; width: 35px; height: 35px;">
            <span class="brand-text font-weight-light ml-2">SIM SARPRAS</span>
        </a>

        {{-- Sidebar Menu --}}
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    @if(in_array(Auth::user()->role, ['humas', 'layanan']))
                    <li class="nav-item">
                        <a href="{{ route('kode-barang.index') }}" class="nav-link {{ request()->is('kode-barang*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Kode Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kode-ruang.index') }}" class="nav-link {{ request()->is('kode-ruang*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-door-open"></i>
                            <p>Kode Ruang</p>
                        </a>
                    </li>
                    @endif

                    @if(Auth::user()->role === 'humas')
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link {{ request()->is('users*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Manajemen User</p>
                        </a>
                    </li>
                    @endif

                </ul>
            </nav>
        </div>
    </aside>
    @endauth

    {{-- Content --}}
    <div class="content-wrapper pt-3">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer class="main-footer text-sm text-center">
        &copy; {{ date('Y') }} SIM SARPRAS - AMIK Taruna Probolinggo
    </footer>

</div>

{{-- JS --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
@yield('js')
</body>
</html>
