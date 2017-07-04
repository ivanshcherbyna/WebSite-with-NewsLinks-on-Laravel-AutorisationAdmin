<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>General News Links</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- scripts -->
        <script src='../js/toggle.js'>    </script>
        <!-- Styles -->
        <style>
            
           
            
            .startText:hover{
                -webkit-transition: .4s ease-out;
                -webkit-transition-delay: 0.5s;
                text-shadow: 2px 2px 6px white;
            }
            html, body {
               
               
                background-color: lightgrey;
                background:url(https://images.pexels.com/photos/404976/pexels-photo-404976.jpeg?w=940&h=650&auto=compress&cs=tinysrgb);
                background-size: cover;
                color:  rgba( 91, 110, 112, 0.73 );
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                color: darkgrey;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            a:hover{
                -webkit-transition: .4s ease-out;
                -webkit-transition-delay: 0.5s;
                text-shadow: 2px 2px 6px white;
                color: darkslategray;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/submit') }}">Add Links</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md startText">
                    General News Links
                </div>
                
                    <div class="links">
                     @foreach ($links as $link) 
                         <a  href="{{$link->url}}" target="_blank"  class="link_point"> <li>{{ $link->title }}</li>
                         <a style="display:none;"> {{$link->description}}</a></a>
                        
                        <!--хотел реализовать в 2 шага, раскрытие desription и потом по ссылке-->
                   <!--  <a  href="#"  class="link_point"> <li>{{ $link->title }}</li>
                         <div clas="desc" onclick="toggle(this)" style="display:none;"><a href="{{$link->url}}" target="_blanc"> {{$link->description}}</a></div></a>-->
                 @endforeach
                </div>

                
                
                   
                    
                    <!--<a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>-->
                
            </div>
        </div>
    </body>
</html>
