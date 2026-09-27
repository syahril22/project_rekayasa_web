<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

    <style>
        body {
            background: #f4f7fb;
            color: #212529;
        }

        .navbar-custom {
            background: #ffffff;
            border-bottom: 1px solid #e9ecef;
        }

        .navbar-brand {
            font-weight: 700;
            color: #0d6efd !important;
        }

        .profile-wrapper {
            max-width: 850px;
            margin: 60px auto;
        }

        .profile-card {
            background: #ffffff;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        .profile-header {
            background: linear-gradient(135deg, #0d6efd, #4f8dfd);
            padding: 45px 30px 35px;
            text-align: center;
            color: white;
        }

        .profile-image {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border: 5px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.18);
        }

        .profile-name {
            margin-top: 18px;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .profile-subtitle {
            opacity: 0.9;
            margin-bottom: 15px;
        }

        .status-badge {
            display: inline-block;
            padding: 7px 18px;
            border-radius: 30px;
            background: #198754;
            color: white;
            font-size: 14px;
            font-weight: 600;
        }

        .profile-body {
            padding: 35px;
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 25px;
        }

        .info-box {
            background: #f8f9fa;
            border: 1px solid #edf0f3;
            border-radius: 14px;
            padding: 18px 20px;
            margin-bottom: 15px;
        }

        .info-label {
            display: block;
            color: #6c757d;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .info-value {
            font-weight: 600;
            font-size: 16px;
        }

        footer {
            color: #6c757d;
            font-size: 14px;
        }

        @media (max-width: 576px) {
            .profile-wrapper {
                margin: 30px 15px;
            }

            .profile-body {
                padding: 25px 20px;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        @include('partials.header')
    </header>



   <main class="container mt-5">
    @yield('content')
    </main>



    @include('partials.footer')

</body>

</html>
