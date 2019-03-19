<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Blog')}}</title>
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


        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
