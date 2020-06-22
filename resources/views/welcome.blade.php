<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Warehouse</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {

                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100%;
                margin: 0;
            }

            .full-height {
                height: 60vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                color: transparent;
                background: linear-gradient(to right, black, blue);
                background-clip: text;
                -webkit-background-clip: text;
                text-shadow: 0px 0px 10px #00000050;
                font-size: 84px;
            }

            .links {
                position: relative;
                top: 240px;
            }

            .links > a {
                color: black;
                text-shadow: 0px 0px 10px #81bce950;
                padding: 0 25px;
                font-size: 22px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if (Route::has('login'))
                    <div class="top-right links" style="text-align: right">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                            @if (Route::has('register') && request()->user()->hasRole('admin'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}">Login</a>
                        @endauth
                    </div>
                @endif

                <div class="title m-b-md">
                    Warehouse
                </div>

                <div class="links">
                    <a href="/products">Products</a>
                    <a href="/categories">Categories</a>
                    <a href="/suppliers">Suppliers</a>
                    <a href="/warehouses">Warehouses</a>
                    <a href="/employees">Employees</a>
                    <a href="/arrivals">Arrivals</a>
                </div>
            </div>
        </div>
    </body>
</html>
