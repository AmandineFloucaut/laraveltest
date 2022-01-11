<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Les sources</title>
</head>
<body>

    {{-- //DOC - Includes - https://laravel.com/docs/8.x/blade#including-subviews --}}
    @include('partials.navbar')

    <div class="container-fluid">
        {{-- //DOC - Template Inheritance - https://laravel.com/docs/8.x/blade#layouts-using-template-inheritance --}}
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>