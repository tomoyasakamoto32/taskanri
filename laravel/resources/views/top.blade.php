<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>taskanri</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f8fafc;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin-top: 10vh;
            }

            .content {
                text-align: center;
                margin-top: 15vh;
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

            .col-6 {
              text-align: center;
              font-size:5vw;
            }

            .subtitle {
              font-size:2vw;
            }
        </style>
    </head>
    <body>
        <div class="container">

            <div class="content">
                <div class="title m-b-md">
                    taskanri
                </div>
                <div class="subtitle">taskanriは大学生向けの課題管理アプリケーションです</div>
            </div>

            @if (Route::has('login'))
                <div class="row">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                      <div class="col-6">
                        <a class="btn btn-primary btn-lg btn-block" href="{{ route('login') }}">ログイン</a>
                      </div>

                        @if (Route::has('register'))
                          <div class="col-6">
                            <a class="btn btn-primary btn-lg btn-block" href="{{ route('register') }}">新規登録</a>
                          </div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
