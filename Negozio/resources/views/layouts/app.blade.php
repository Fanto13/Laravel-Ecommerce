<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Negozio elettronica - Ecommerce</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="css/custom.css"> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}

    {{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="/resource/1358914798000/bootstrap/bootstrap/js/bootstrap.js"></script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"> 
    </script>--}}

    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}




    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <style>
        #titolo {
            width: 50%;
            padding: 20px;
            background: linear-gradient(to bottom, #ccffff 0%, #ccffcc 100%);
        }

        #centrale {}

        #video {
            background: linear-gradient(to bottom, #ccffff 0%, #ccffcc 100%);
        }

        #footer {
            background-color: #98ddde;
        }

        .creditCardForm {
            max-width: 700px;
            background-color: #fff;
            margin: 100px auto;
            overflow: hidden;
            padding: 25px;
            color: #4c4e56;
        }

        .creditCardForm label {
            width: 100%;
            margin-bottom: 10px;
        }

        .creditCardForm .heading h1 {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            color: #4c4e56;
        }

        .creditCardForm .payment {
            float: left;
            font-size: 18px;
            padding: 10px 25px;
            margin-top: 20px;
            position: relative;
        }

        .creditCardForm .payment .form-group {
            float: left;
            margin-bottom: 15px;
        }

        .creditCardForm .payment .form-control {
            line-height: 40px;
            height: auto;
            padding: 0 16px;
        }

        .creditCardForm .owner {
            width: 63%;
            margin-right: 10px;
        }

        .creditCardForm .CVV {
            width: 35%;
        }

        .creditCardForm #card-number-field {
            width: 100%;
        }

        .creditCardForm #expiration-date {
            width: 49%;
        }

        .creditCardForm #credit_cards {
            width: 50%;
            margin-top: 25px;
            text-align: right;
        }

        .creditCardForm #pay-now {
            width: 100%;
            margin-top: 25px;
        }

        .creditCardForm .payment .btn {
            width: 100%;
            margin-top: 3px;
            font-size: 24px;
            background-color: #2ec4a5;
            color: white;
        }

        .creditCardForm .payment select {
            padding: 10px;
            margin-right: 15px;
        }

        .transparent {
            opacity: 0.2;
        }

        @media(max-width: 650px) {

            .creditCardForm .owner,
            .creditCardForm .CVV,
            .creditCardForm #expiration-date,
            .creditCardForm #credit_cards {
                width: 100%;
            }

            .creditCardForm #credit_cards {
                text-align: left;
            }
        }


        /*  Examples Section */

        .examples {
            max-width: 700px;
            background-color: #fff;
            margin: 0 auto 75px;
            padding: 30px 50px;
            color: #4c4e56;
        }

        .examples-note {
            text-align: center;
            font-size: 14px;
            max-width: 370px;
            margin: 0 auto 40px;
            line-height: 1.7;
            color: #7a7a7a;
        }

        .examples table {
            margin: 5px 0 0 0;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Nuovo Negozio Elettronica
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                        </li>
                        {{-- @endguest --}}

                        {{-- @else (Route::has('register')) --}}
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        {{-- @endif --}}

                    </ul>
                </div>

            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

    </div>


   


    @yield('script')
</body>

</html>