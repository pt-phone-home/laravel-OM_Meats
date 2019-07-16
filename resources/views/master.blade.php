<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125112334-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125112334-9');
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Welcome to O'Mahony Meats. We supply meat to both the catering trade and the general public. We sell over 600 products. We can prepare any cut to your own specificaiton. We specialise in customer-driven products">
    <meta name="keywords" content="Butcher, Meat Supplier, Beef, Lamb, Pork, Chicken, Poultry, Deals, Offers">
    <meta name="robots" content="index, follow">
    
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,500,500i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>


    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <link rel="stylesheet" href="/css/custom.css">

    <title>@yield('title')</title>
</head>
<body>
   
        @include('components.topheader')
        @yield('content')


        @include('components.footer')



    @section('scripts')
    <script src="/js/app.js"></script>
    <script src="/js/TweenMax.min.js"></script>
    <script src="/js/TimelineMax.min.js"></script>
    

    <script>

        
        const navAnimation = new TimelineMax({paused:true, reversed:true});
     
        navAnimation.to('#MobNav', 1, {opacity:1, display: 'flex', height: '11rem', minHeight: '10rem', ease: Back.easeOut});
        navAnimation.fromTo('#MobNav>div>div', .5, {opacity: 0, }, {opacity: 1});
    
    
    
        
        function showMenu() {
            navAnimation.reversed() ? navAnimation.play() : navAnimation.reverse();
        }

        const navBtn = document.getElementById('NavBtn');
        const mobNav = document.getElementById('MobNav');

        navBtn.addEventListener('click', showMenu);

    </script>
    @show
</body>
</html>