<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin panel falcon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('js/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('js/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('css/admin/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/admin/style.default.css') }}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/admin/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/admin/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    @include('admin.layouts.header')

    @yield('admin_content')

    <!-- JavaScript files-->
    <script src="{{ asset('js/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('js/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('js/admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/admin/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('js/admin/front.js') }}"></script>
</body>
</html>
