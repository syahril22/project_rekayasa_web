
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

        body {
            margin: 0;
            background: var(--admin-background);
            color: #212529;
        }
        .admin-topbar {
            position: sticky;
            top: 0;
            z-index: 1040;

            min-height: 78px;
            padding: 12px 24px;

            background: var(--admin-yellow);
        }

        .admin-brand {
            color: var(--admin-primary);
            font-weight: 800;
            text-decoration: none;
            line-height: 1.1;
        }

        .admin-brand small {
            display: block;
            font-size: 0.8rem;
            letter-spacing: 0.04em;
        }

        .admin-top-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            margin-left: 18px;
        }

        .admin-top-links a:hover {
            color: var(--admin-primary);
        }
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


        .admin-footer {
            margin-left: 230px;
            padding: 20px;

            background: #fff;
            text-align: center;
            color: #6c757d;
        }

        @media (max-width: 768px) {

            .admin-topbar {
                padding: 12px 16px;
            }

            .admin-brand {
                font-size: 0.9rem;
            }

            .admin-top-links a {
                margin-left: 10px;
                font-size: 0.85rem;
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

    <header class="admin-topbar d-flex justify-content-between align-items-center">

        <a href="{{ route('admin.home') }}" class="admin-brand">
            <span>UNIVERSITAS PAMULANG</span>
            <small>SISTEM INFORMASI</small>
        </a>

        <div class="admin-top-links">
            <a href="{{ route('admin.home') }}">Dashboard</a>
            <a href="{{ route('project.index') }}">Logout</a>
        </div>

    </header>


    <aside class="admin-sidebar">

        <div class="admin-sidebar-heading">
            Admin Menu
        </div>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a
                    class="nav-link {{ request()->routeIs('admin.home') ? 'active' : '' }}"
                    href="{{ route('admin.home') }}"
                >
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a
                    class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}"
                    href="{{ route('admin.projects.index') }}"
                >
                    Data Project
                </a>
            </li>

        </ul>

    </aside>


    <main class="admin-content">


        <div class="admin-page-heading d-flex flex-wrap justify-content-between align-items-center gap-2">

            <h1 class="h4 fw-bold mb-0">
                @yield('page-heading', 'Dashboard')
            </h1>

            <span class="text-muted">
                Halo, Administrator
            </span>

        </div>



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


        @yield('content')

    </main>


    <footer class="admin-footer">

        &copy; {{ date('Y') }} MyProfile. All rights reserved.

    </footer>



    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')

</body>
</html>
