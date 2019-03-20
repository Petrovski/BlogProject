<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Scripts --}}

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <style>


            html {
                height: 100%;
                box-sizing: border-box;
            }

            *,
            *:before,
            *:after {
                box-sizing: inherit;
            }

            body {
                position: relative;
                margin: 0;
                padding-bottom: 6rem;
                min-height: 100%;
            }

            .card {
                margin: 30px 0px 30px 0px;
            }

            .posts-heading {
                text-align: center;
                font-size: 50px;
                margin: 30px 0px 30px 0px;
            }

            hr {
                border: 0;
                height: 2px;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            }

            .jumbotron {
                margin-top: 30px;
            }

            .btn-info {
                margin: 20px 0px 20px 0px;
            }

            .post-heading {
                font-size: 30px;
                text-decoration: underline;
                margin: 10px 0px 10px 0px;
            }

            .alert {
                margin: 20px 0px 20px 0px;
                text-align: center;
            }

            .table td {
                font-size: 16px;
                font-weight: bold; 
            }

            .table th {
                font-size: 22px;
                text-decoration: underline;
            }

            .jumbo-heading {
                font-size: 60px;
                margin: 10px 0px 10px 0px;
            }

            .jumbo-text {
                font-size: 20px;
                margin: 20px 0px 20px 0px;
            }

            #footer {
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 1rem;
                background-color: #efefef;
                text-align: center;
            }

            .nav-item:hover {
                border-bottom: 0.5px solid lightgray;
            }
            
    </style>

    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
        <footer id="footer">This application was made and designed by Alexander Petroski</footer>
    </div>
    

    <!-- Scripts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
</body>
</html>
