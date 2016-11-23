<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <title>Laravel - @yield('page_title')</title>

        <!-- Fonts -->
<!--        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->
        <!-- Bootstrap Core CSS -->
         <link rel="stylesheet" type="text/css" href="{{asset('./vendor/twbs/bootstrap/dist/css/bootstrap.min.css')}}"/> 
        {!! Html::style('./vendor/twbs/bootstrap/dist/css/bootstrap.min.css') !!}
        {!! Html::style('./vendor/fortawesome/font-awesome/css/font-awesome.min.css') !!}       
        <!--        <link href="../../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                <link href="css/bootstrap.min.css" rel="stylesheet">
                 Custom Fonts 
                <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
                font-weight: 100;
                /*                height: 100vh;*/
                margin: 0;
                padding-top: 70px;
            }

            /*            .full-height {
                            height: 100vh;
                        }*/

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            /*            .top-right {
                            position: absolute;
                            right: 10px;
                            top: 18px;
                        }*/

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 5px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                /*                margin-bottom: 30px;*/
            }
        </style>
    </head>
    <body>
        @include('layouts.navbar')

        <div class="container-fluid">
            <div class="flex-center position-ref full-height">
                <!--                @if (Route::has('login'))
                                <div class="top-right links">
                                    @if (Auth::check())
                                    <a href="{{ url('/home') }}">Home</a>
                                    @else
                                    <a href="{{ url('/login') }}">Login</a>
                                    <a href="{{ url('/register') }}">Register</a>
                                    @endif
                                </div>
                                @endif-->

                <div class="content">
                    <div class="title m-b-md">
                        @yield('title')
                    </div>
                    <div class="jumbotron">
                        @yield('content')
                    </div>
                    <div class="links">
                        <a href="https://laravel.com/docs"><i class="fa fa-file"></i> Documentation</a>
                        <a href="https://laracasts.com"><i class="fa fa-wifi"></i> Laracasts</a>
                        <a href="https://laravel-news.com"><i class="fa fa-newspaper-o"></i> News</a>
                        <a href="https://forge.laravel.com"><i class="fa fa-bug"></i> Forge</a>
                        <a href="https://github.com/laravel/laravel"><i class="fa fa-github"></i> GitHub</a>
                    </div>              
                </div>
            </div>
        </div>
        {!! Html::script('./vendor/frameworks/jquery/jquery.min.js') !!}
        {!! Html::script('./vendor/twbs/bootstrap/dist/js/bootstrap.min.js') !!}
        {!! Html::script('./vendor/bootstrap-validator/dist/validator.min.js') !!}

    </body>
</html>

