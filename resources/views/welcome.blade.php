<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magacinko</title>

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
                            <a href="{{ url('/home') }}">Statistika</a>
                            @if (Route::has('register') && request()->user()->hasRole('admin'))
                                <a href="{{ route('register') }}">Registracija</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}">Prijava</a>
                        @endauth
                    </div>
                @endif

                <div class="title m-b-md">
                    {{ config('app.name', 'Magacinko') }}
                </div>

                <div class="links">
                    <a href="/products">Proizvodi</a>
                    <a href="/categories">Kategorije</a>
                    <a href="/suppliers">Dobavljači</a>
                    <a href="/warehouses">Skladišta</a>
                    <a href="/employees">Zaposleni</a>
                    <a href="/arrivals">Dostava Robe</a>
                </div>
            </div>
        </div>
    </body>
</html>
