<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mozzi's blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="public/css/base.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffe6e6;
                background: linear-gradient(#ffe6e6, 80%,white);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
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
            }

            .links > a {
                font-family: 'Darker Grotesque', sans-serif;
                color: #636b6f;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                /*
                background-color: #f2ffe5;
                background: linear-gradient(to bottom,#ffe6e6, 50%,#f2ffe5);
                */
                font-family: 'Shadows Into Light', cursive;
            }

            .friend{
                float: right;
                margin-top: 90px;
                margin-right: 60px;
                
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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


            <div class="content">
                <div class="title m-b-md">
                    Welcome to Mozzi's blog
                </div>

                <div class="links">
                    <a href="{{ route('articals') }}">Blog</a>
                    <a href="{{ url('home/test/submitPage') }}">New article</a>
                    <a href="{{ url('home/test/myself') }}">About</a>
                    <a href="https://github.com/Mozzi97/blog">GitHub</a>
                </div>
                <br />
            <!-- 友链部分 -->
            <div class="friend">
            <div class="row float-right">
            <div class="col-sm-3 col-md-6 pull-right">
                <h3>友链:</h3>
                <ul>
                <li><a class="text-right" href="https://starlite.me/">太一</a></li>
                <li><a class="text-right" href="https://glyphicons.com/">Glyphicons</a></li>
                </ul>
            </div>
            </div>
            </div>
            <!-- 友链部分结束 -->

            </div>

            </div>  
            
        </div>

    </body>
</html>
