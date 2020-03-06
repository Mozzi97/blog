<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />


        <!-- Styles -->
        <style>
            html,body{
                background-color: #ffe6e6;
                background: linear-gradient(#ffe6e6, 80%,white);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-repeat: no-repeat;
            }

            .header{
                margin-top: 50px;
                background-color: rgba(255,255,255,0.6);

            }

            .container-fluid{
                background-color: rgba(255,255,255,0.6);
                border-radius:15px;
                size: 400px,900px;
                display: block;

            }

            .title{
                height: 50px;
            }

            .content{
                height:900px;
                word-break: break-all;
            }


            .container{
              margin-top: 30px;
            }

        </style>


        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Submit new articals</title>

    </head>
    <body>
        <div class="container container-header">
        <h1>创作自由 言论自由</h1>
        <hr />
        <div align="right">
            <button type="button" class="btn btn-info" onclick="window.location.href='/'">Back to Main Page</button>
        </div>
        </div>

        <div class="container" style="margin-top:10px;">
          <div class="row">
            <div class="col-sm-12">
              @if($errors->count() >0 )
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors -> all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
          </div>
        </div>

        <div class="header"></div>
        <div class="container container-fluid">

    	<form action="{{url('home/test/mList')}}" method="post">
    		<h3>Title: </h3><input class="form-control title" type="text" name="title" value="">
    		<h3>Artical: </h3>
            <textarea class="form-control content" type="text" name="article" value="" style="  height:400px;"></textarea>
    		    {{ csrf_field() }}
            <br/>
            <input class="btn btn-primary" type="submit" value="保存">
<!-- 
            @if (Auth::check()) 
    		      <input class="btn btn-primary" type="submit" value="保存">
            
            @else
              <div><b>登录才可以发布哦！</b></div>
            @endif -->

            <br/>
            <br/>

    	</form>
        </div>
    </body>

</html>