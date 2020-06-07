<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog | MadThrone</title>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/floating-social-share/jquery.floating-social-share.min.js') }}"></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/website.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/floating-social-share/jquery.floating-social-share.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="icon" href="{{asset('assets/images/static/favicon.ico')}}" type="image/gif" sizes="16x16">
</head>
<body>
    <div id="app">
        <div class="main-section">
            <div class="card border-0 main-card">
                <div class="d-lg-flex">
                    <!-- Side Menu -->
                    <div class="side-menu">
                        <div class="logo-box text-center p-3 p-lg-0">
                            <a href="">
                                <img src="{{asset('assets/images/static/logo.png')}}" class="img-fluid logo">
                            </a>
                        </div>
                        <div class="bar-box d-lg-none">
                            <button type="button" class="btn rounded-0 shadow-none btn-block" id="menuBarToggle">
                                <img src="{{asset('assets/images/static/bar.png')}}" alt="">
                            </button>
                        </div>
                        <!-- Menu items -->
                        <div class="menu-items">
                            <a href="https://madthrone.com/" class="btn shadow-none">
                                <img src="{{asset('assets/images/static/home.png')}}" class="mr-3">Home
                            </a>
                            <a href="{{route('welcome')}}" class="btn shadow-none active">
                                <img src="{{asset('assets/images/static/pen.png')}}" class="mr-3">Blogs
                            </a>
                        </div>
                    </div>

                    <!-- Main Menu -->
                    <div class="main-menu flex-grow-1">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <script>
        $('#menuBarToggle').click(function(){
            $('.menu-items').toggle('slow')
        })
        $("body").floatingSocialShare({
            buttons: [
            "facebook", "linkedin", "pinterest", "telegram", "twitter",
            ],
            text: "share with: ",
            url: window.location.href
        });
    </script>
    
</body>
</html>
