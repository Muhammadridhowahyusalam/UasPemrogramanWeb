<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pemilihan Rokok</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(135deg, #2e2e2e 0%, #4b4b4b 100%);
                color: #f5f5f5;
                font-family: 'Roboto', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container {
                text-align: center;
                padding: 20px;
                background-color: rgba(0, 0, 0, 0.5);
                border-radius: 15px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            }

            .title {
                font-size: 70px;
                font-weight: 700;
                margin-bottom: 40px;
            }

            .links {
                display: flex;
                justify-content: center;
                gap: 20px;
            }

            .links > a {
                color: #ffcc00;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: #444;
                border-radius: 5px;
                transition: background-color 0.3s, transform 0.3s;
            }

            .links > a:hover {
                background-color: #ffcc00;
                color: #2e2e2e;
                transform: translateY(-5px);
            }

            .top-right {
                position: absolute;
                right: 20px;
                top: 20px;
            }

            .top-right > a {
                color: #ffcc00;
                text-decoration: none;
                font-size: 16px;
                font-weight: 700;
                margin: 0 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right">
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

            <div class="content">
                <div class="title m-b-md">
                    Uas Laravel
                </div>

                <div class="links">
                    <a href="https://www.instagram.com/mhmdrid04._/">Instagram</a>
                    <a href="https://www.facebook.com/awkerad.awkerad.7">Facebook</a>
                    <a href="https://wa.link/cw3vrz">Whatsapp</a>
                </div>
            </div>
        </div>
    </body>
</html>
