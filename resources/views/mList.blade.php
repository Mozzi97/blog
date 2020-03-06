<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Mozzi's blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />

        <!-- Styles -->
        <style>
            body{
                background-color: #ffe6e6;
                background: linear-gradient(#ffe6e6, 80%,white);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;

                background-repeat:no-repeat;
                
            }
            html{
                height: 100%;
            }


            .box{
                background-color: rgba(255,255,255,0.4);
                border-radius:15px;
            }

            .page{
                background-color: rgba(255,255,255,0.4);
                margin-left:auto; 
                margin-right: auto;
                margin:0 auto;
                width:1px;
            }
        </style>

        
    </head>
    <body>
        <div align="right">
            <button type="button" class="btn btn-info" onclick="window.location.href='/'">Back to Main Page</button>
        </div>

        <div class="container container-fluid" id="content">
            <p>现在时间 {{$date}} </p> 
        </div>

        <div class="container container-fluid">
            @foreach ($data as $val)
                <div class="box">
                    <p style="text-align: right;margin-right:10px; "> 
                        创建于{{ $val -> created_at }} </p>
                    <h2 style="margin-left: 20px">{{ $val -> title }}</h2>
                   
                    <p style="margin-left: 40px">{{ $val -> article }}</p>
                    <br />
                    
                    <div class="container-fluid">
                    <div class="row pull-right">
                    <form action="{{url('home/test/mList')}}" method="post">
                        <p>id: {{ $val -> Artical_id }}</p>
                        @csrf
                        <input class="btn btn-primary" style="margin-right: 10px; float:right;" type="submit" value="修改">
                    </form>
                    <form action="{{url('home/test/deleteArtical',['id'=>$val->Artical_id])}}" method="post">
                        @csrf
                        <input class="btn btn-primary" style="margin-right: 10px; float:right;" type="submit" value="删除">

                    </form>
                    </div>
                    </div>
                </div>
                <br />
                <br />
                <br />
            @endforeach
            
        </div>
            <div class="page">      
                {{ $data -> links() }}
            </div>


    </body>

</html>