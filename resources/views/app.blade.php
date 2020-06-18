<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Pilotos</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                background: #f7f7f7;
                padding: 3em;
            }

            .title {
                font-size: 5em;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .navBar {
                padding: 1em;
                height: 6em;
                background: #484852;
                display: flex;
                align-items: center;
                border-bottom: solid .1em #fbb0b0;
                box-shadow: inset 0px 4px 21px -11px black;
            }
            .navBar span {
                color: white;
                font-size: 2vw;
            }
            .subBar span {
                color: white;
                font-size: 3vw;
            }
            .subBar {
                padding: 1em;
                height: 18em;
                background: #fd6969;
                display: flex;
                align-items: center;
                box-shadow: inset 0px -10px 20px 0px #00000059;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="navBar row">
                <span>Sistema de piloto</span>
            </div>
            <div class="subBar row">
                <span>Sistema de piloto</span>
            </div>
            <div class="content flex-center full-height row">
                <div class="title m-b-md row">
                    @yield('title')
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>
