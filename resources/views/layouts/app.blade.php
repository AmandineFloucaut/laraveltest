<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les sources</title>

    {{-- Bootstrap core CSS --}}
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

    {{-- Custom styles for this template --}}
    <link href = {{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />

    {{-- Optional theme --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
</head>
<body>

    {{-- //DOC - Includes - https://laravel.com/docs/8.x/blade#including-subviews --}}
    @include('partials.navbar')

    <div class="container-fluid">
        {{-- //DOC - Template Inheritance - https://laravel.com/docs/8.x/blade#layouts-using-template-inheritance --}}
        @yield('content')
    </div>
</body>
</html>