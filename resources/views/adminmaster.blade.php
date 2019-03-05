<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,500,500i,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="admin-header bgi-p c-g1">
            <h1 class="admin-header-title my-l">
                O'Mahony Meats <br> <br>Admin Area
            </h1>

        </div>
        <div class="admin-nav bgi-s c-g1 py-m px-s">
            <li class="admin-nav-item"><a class="admin-nav-item-link c-g1" href="/">Return to main site</a></li>
            @if (!Request::is('admin'))
            <li class="admin-nav-item"><a class="admin-nav-item-link c-g1" href="/admin">Return to Admin Page</a></li>
            @endif
        </div>
        @yield('content')


        @include('components.footer')

    </div>

    @yield('scripts')
    <script src="/js/app.js"></script>
</body>
</html>