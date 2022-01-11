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
            }

            .title {
                font-size: 84px;
                margin-top:320px;
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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title content">Foodie trip へようこそ！</div>
                </div>
                    <div class="col-md-6 content">
                        @if (Route::has('login'))
                            <div class="center links">
                            @auth
                                <a href="{{ url('/home') }}" style="font-size:30px;">Home</a>
                        @else
                                <a href="{{ route('login') }}" style="font-size:30px;">ログインはこちら</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" style="font-size:30px;">新規登録はこちら</a>
                            @endif
                            @endauth
                    </div>
                        @endif
            </div>   
        </div>    
        
    </body>
</html>
