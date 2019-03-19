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

            .card {
                margin: 30px 0px 30px 0px;
            }

            .posts-heading {
                text-align: center;
                font-size: 50px;
                margin: 10px 0px 20px 0px;
            }

            hr {
                border: 0;
                height: 0.5px;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            }

            .jumbotron {
                margin-top: 20px;
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
            
    </style>

    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
    

    <!-- Scripts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    
</body>
</html>
