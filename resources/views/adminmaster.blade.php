<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,500,500i,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">

    <title>@yield('title')</title>
</head>
<body>
    
<div class="bgi-p text-grey-lightest">
    <div class="container mx-auto flex justify-center py-12 text-center">
        <h1 class="">
        O'Mahony Meats <br> <br>Admin Area
        </h1>
    </div>
</div>
        
<div class="bgi-s text-grey-lightest py-4 px-4 flex justify-between">
    <li class="list-reset"><a class="no-underline text-grey-lightest hover:text-grey" href="/">Return to main site</a></li>
    @if(Auth::check())
    @if (!Request::is('admin'))
    <li class="list-reset"><a class="no-underline text-grey-lightest hover:text-grey" href="/admin">Return to Admin Page</a></li>
    @endif
    @if(Auth::check())
<li class="list-reset"><a class="no-underline text-grey-lightest hover:text-grey" href="{{route('logout')}}">Logout</a></li>
    @endif
    @endif
</div>
        
        @yield('content')

        @include('components.footer')


    @include('scripts')
    <script src="/js/app.js"></script>
    @show
</body>
</html>