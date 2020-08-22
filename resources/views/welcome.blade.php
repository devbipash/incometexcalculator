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
    <body style="background-color: #d8d7d7">
        <div class="flex-center  full-height">
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
<form class="form-horizontal" method="POST" action="/calculator">
    @csrf
    
            <div class="row text text-center">
                
                    <div class="col-md-3">
                        <select class="form-control" name="operator" required="">
                            
                            <option value="select">--select operator--</option>
                            <option value="plus"> + </option>
                            <option value="minus"> - </option>
                            <option value="multiply"> * </option>
                            <option value="divide"> / </option>
                        </select>
                    </div>

                    <div class="col-md-3">
                       <input class="form-control" type="number" name="first" placeholder="Enter first number"> 

                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="number" name="second" placeholder="Enter Second number"> 

                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </body>
</html>
