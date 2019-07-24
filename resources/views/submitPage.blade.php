<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


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
            }
        </style>


        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Submit new articals</title>

    </head>
    <body>
    	<form action="/home/test/articalList" method="post">
    		<p>Title: <input type="text" name="title" value=""></p>
    		<p>Artical: <input type="text" name="article" value=""></p>
    		{{ csrf_field() }}

    		<input type="submit" value="保存">
    	</form>


    </body>

</html>