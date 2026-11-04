
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel') - UNPAM SI</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">

    <style>
        :root {
            --admin-yellow: #ffc107;
            --admin-sidebar: #343a40;
            --admin-background: #f5f7fa;
            --admin-primary: #174a85;
        }

        /* General */
        body {
            margin: 0;
            background: var(--admin-background);
            color: #212529;
        }

        /* Navbar */
        .admin-topbar {
            position: sticky;
            top: 0;
            z-index: 1040;
            min-height: 78px;
            padding: 8px 24px;
            background: var(--admin-yellow);
        }

        /* Logo dan Identitas Kampus */
        .admin-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--admin-primary);
            text-decoration: none;
        }

        .admin-brand:hover {
            color: var(--admin-primary);
        }

        .admin-logo {
            width: 65px;
            height: 65px;
            object-fit: contain;
        }

        .admin-brand-text {
            display: flex;
            flex-direction: column;
            font-size: 1.1rem;
            font-weight: 800;
            line-height: 1.1;
        }

        .admin-brand-text small {
            margin-top: 4px;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
        }

        /* Navbar Menu */
        .admin-topbar .navbar-nav .nav-link {
            padding: 10px 14px;
            color: var(--admin-primary);
            font-weight: 600;
        }

        .admin-topbar .navbar-nav .nav-link:hover {
            color: #fff;
        }

        .admin-topbar .dropdown-menu {
            min-width: 200px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px #0000001a;
        }

        .admin-topbar .dropdown-item {
            padding: 9px 16px;
        }

        .admin-topbar .dropdown-item:active {
            background: var(--admin-primary);
        }

        .admin-topbar .navbar-toggler {
            border-color: var(--admin-primary);
        }

        .admin-topbar .navbar-toggler:focus {
            box-shadow: 0 0 0 0.15rem #174a8540;
        }

        /* Sidebar */
        .admin-sidebar {
            position: fixed;
            top: 78px;
            left: 0;
            bottom: 0;
            width: 230px;
            padding: 20px 0;
            background: var(--admin-sidebar);
            color: #fff;
            overflow-y: auto;
            z-index: 1030;
        }

        .admin-sidebar-heading {
            padding: 0 22px 16px;
            margin-bottom: 12px;
            font-size: 1.05rem;
            font-weight: 600;
            border-bottom: 1px solid #596168;
        }

        .admin-sidebar .nav-link {
            padding: 13px 22px;
            color: #e9ecef;
            border-left: 4px solid transparent;
            transition: all 0.2s ease;
        }

        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            background: #495057;
            color: #fff;
            border-left-color: var(--admin-yellow);
        }

        /* Main Content */
        .admin-content {
            margin-left: 230px;
            padding: 28px;
            min-height: calc(100vh - 78px);
        }

        .admin-page-heading {
            padding: 18px 22px;
            margin-bottom: 24px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px #0000000a;
        }

        .admin-panel {
            padding: 22px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 3px 12px #0000000a;
        }

        .project-thumb {
            width: 76px;
            height: 55px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #dee2e6;
        }

        /* Footer */
        .admin-footer {
            margin-left: 230px;
            padding: 20px;
            background: #fff;
            text-align: center;
            color: #6c757d;
        }

        /* Responsive */
        @media (max-width: 768px) {

            .admin-topbar {
                padding: 10px 16px;
                flex-wrap: wrap;
            }

            .admin-logo {
                width: 50px;
                height: 50px;
            }

            .admin-brand-text {
                font-size: 0.85rem;
            }

            .admin-brand-text small {
                font-size: 0.75rem;
            }

            .admin-topbar .navbar {
                margin-left: auto;
            }

            .admin-topbar .navbar-collapse {
                flex-basis: 100%;
                width: 100%;
            }

            .admin-topbar .navbar-nav {
                padding-top: 10px;
            }

            .admin-sidebar {
                position: static;
                width: 100%;
                height: auto;
                padding: 10px 0;
            }

            .admin-sidebar-heading {
                padding-bottom: 8px;
            }

            .admin-sidebar .nav {
                flex-direction: row !important;
            }

            .admin-sidebar .nav-link {
                padding: 10px 14px;
            }

            .admin-content,
            .admin-footer {
                margin-left: 0;
            }

            .admin-content {
                padding: 16px;
            }

            .admin-panel {
                padding: 14px;
            }
        }
    </style>

    @stack('styles')

</head>

<body>

    {{-- Navbar Admin --}}
    <header class="admin-topbar d-flex justify-content-between align-items-center">

        {{-- Logo dan Nama Universitas --}}
        <a href="{{ route('admin.home') }}" class="admin-brand">

            <img
                src="{{ asset('img/logounpam.png') }}"
                alt="Logo Universitas Pamulang"
                class="admin-logo"
            >

            <span class="admin-brand-text">
                UNIVERSITAS PAMULANG
                <small>SISTEM INFORMASI</small>
            </span>

        </a>

        {{-- Menu Navbar --}}
        <nav class="navbar navbar-expand-lg p-0">

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    {{-- Dashboard --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            Dashboard
                        </a>
                    </li>

                    {{-- Dropdown Admin --}}
                    <li class="nav-item dropdown">

                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="userDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">

                            <li class="dropdown-item-text text-muted">
                                <small>{{ Auth::user()->email }}</small>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            {{-- Logout --}}
                            <li>
                                <form action="{{ route('admin.logout') }}" method="POST">
                                    @csrf

                                    <button type="submit" class="dropdown-item">
                                        Logout
                                    </button>
                                </form>
                            </li>

                        </ul>

                    </li>

                </ul>

            </div>

        </nav>

    </header>


    {{-- Sidebar Admin --}}
    <aside class="admin-sidebar">

        <div class="admin-sidebar-heading">
            Admin Menu
        </div>

        <ul class="nav flex-column">

            {{-- Dashboard --}}
            <li class="nav-item">
                <a
                    href="{{ route('admin.home') }}"
                    class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}"
                >
                    Dashboard
                </a>
            </li>

            {{-- Data Project --}}
            <li class="nav-item">
                <a
                    href="{{ route('admin.projects.index') }}"
                    class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}"
                >
                    Data Project
                </a>
            </li>

        </ul>

    </aside>


    {{-- Konten Utama --}}
    <main class="admin-content">

        {{-- Judul Halaman --}}
        <div class="admin-page-heading d-flex flex-wrap justify-content-between align-items-center gap-2">

            <h1 class="h4 fw-bold mb-0">
                @yield('page-heading', 'Dashboard')
            </h1>

            <span class="text-muted">
                Halo, {{ Auth::user()->name }}
            </span>

        </div>


        {{-- Notifikasi Berhasil --}}
        @if (session('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{ session('success') }}

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="alert"
                    aria-label="Tutup"
                ></button>

            </div>

        @endif


        {{-- Pesan Kesalahan --}}
        @if ($errors->any())

            <div class="alert alert-danger" role="alert">

                <strong>Periksa kembali input berikut:</strong>

                <ul class="mb-0 mt-1">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>

        @endif


        {{-- Isi Halaman --}}
        @yield('content')

    </main>


    {{-- Footer --}}
    <footer class="admin-footer">

        &copy; {{ date('Y') }} MyProfile. All rights reserved.

    </footer>


    {{-- Bootstrap JavaScript --}}
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>

</html>

