<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Mozzi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />

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
                background-repeat:no-repeat;
            }

            .intro img{
                position:relative;
                left:-200px;
                top:100px;
                margin-left:-60px;
            }

            .intro h1{
                position:absolute;
                right:240px;
                top:150px;
                margin-right: -60px;
                font-family: 'Shadows Into Light', cursive;
            }

            .intro p{
                position:absolute;
                right:200px;
                top:210px;
                margin-right: -60px;
                font-family: 'Shadows+Into+Light',sans-serif;
                font-size: 20px;
            }
        </style>

        
    </head>
    <body>
        <div align="right">
            <button type="button" class="btn btn-info" onclick="window.location.href='/'">Back to Main Page</button>
        </div>

        <div class="container-fluid">

        <div class="row" style="margin-top:80px;">
        <div class="m-auto" align="middle">
            <picture>
                <img class="middle" src="{{ URL::asset('images/fish.png') }}" id="saltyfish" height="250" width="350" />
            </picture>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="m-auto" align="middle" style="margin-top: 30px;">
            <h1>Mozzi</h1>

            </br>

            <p>
                一条有梦想的咸鱼。现实是骨感的，但还是要拼搏！
            </p>
        </div>
        </div>
        </div>



    </body>

</html>