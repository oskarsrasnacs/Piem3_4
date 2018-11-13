<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
            <!-- @foreach ($viesi as $viesis) -->
            <html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</head>
<body>

<h2>Guest comments</h2>
<p>Table</p>

<table style="width:100%">
  <caption>Guest list</caption>
  <tr>
    <th>Username</th>
    <th>E-mail</th>
  </tr>
  <tr>
  @foreach ($viesi as $viesis)
    <td>{{$viesis->username}}</td>
    <td>{{$viesis->email}}</td>
    @endforeach
  </tr>
  <tr>
    <td>def</td>
    <td>def@def.lv</td>
  </tr>
</table>

</body>
</html>
                <!-- {{$viesis->username}} <br><br> {{$viesis->email}} -->
                <!-- {{$viesis->email}} <br><br> -->
            <!-- @endforeach -->
        <!-- <div class="flex-center position-ref full-height">
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
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Bikarmints</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
        <!-- <div><form action="add" method="post">
        @csrf
        <fieldset><legend>Lūdzu ievadiet norādīto informāciju</legend>
        <div class="input_group"><input type="text" name="username"><label for="username"> Lietotāja vārds</label></div><br>
        <div class="input_group"><input type="text" name="email"><label for="email"> E-pasts</label></div><br>
        <div class="input_group"><input type="text" name="link"><label for="link"> Saite uz vietni</label></div><br>
		<div class="input_group"><input type="text" name="message"><label for="message"> Ziņojuma teksts</label></div><br>	
        <div class="input_group center"><button type="submit" name="act" value="new_row">Pievienot ierakstu</button></div><br>
        <div class="input_group center2"><button type="open" name="act2" value="table">Skatīt ierakstu tabulu</button></div><br>
						</fieldset></form></div>; -->
    </body>
</html>
