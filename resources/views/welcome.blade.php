<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
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
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            center;
            bottom: 35%;
        }

        .top-bot {
            position: absolute;
            right: 18px;
            top: 26px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            Coba letter-spacing: .1rem;
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
        <div class="top-right links">
            <a href="{{ route('home')}}">Belanja</a>
            <a href="https://twitter.com/nugrohofurqon">Twitter</a>
            <a href="https://facebook.com">Facebook</a>
            <a href="https://instagram.com/nugrohofurqon">Instagram</a>
        </div>
        @if (Route::has('login'))
        <div class="top-bot links">
            @auth
            <h2></h2>
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
                <a style="color:rgb(131, 162, 163) ;text-decoration: none" href="{{ route('authlogin')}}">
                    Furqon's Ticket Sale
                </a>
            </div>

        </div>
    </div>

</body>

</html>
