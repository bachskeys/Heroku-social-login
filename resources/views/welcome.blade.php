<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testing Heroku</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ url('css/bootstrap-social.css') }}" type="text/css" >
        <!-- Styles --> 
        <style>
            html, body {
                background-color: #fff;
                color:#070707;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 30vh;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

       
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content"  >
               <div class="media" style="position:absolute;
                                         right:400px;
                                         padding-bottom:100px;
               ">
              <img class="mr-3" src="https://images.pexels.com/photos/32239/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=200&w=1000" alt="Generic placeholder image" >
              <div class="media-body " >
                <h5 class="mt-0 ">Testing Heroku</h5>
                <p class='text-dark'>
                Cras sit amet nibh libero, in gravida nulla.<br>
                 Nulla vel metus scelerisque ante sollicitudin.<br> Cras purus odio, 
                 vestibulum in vulputate at, tempus viverra<br> turpis. Fusce condimentum nunc a
                 c nisi vulputate fringilla.<br> Donec lacinia congue felis in faucibus.
             </p>
              </div>
            </div>
            </div>
        </div>
    </body>
</html>
