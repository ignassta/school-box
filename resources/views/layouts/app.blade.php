<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                {{--<a class="navbar-brand" href="{{ route('home') }}">--}}
                    {{--SchoolBox--}}
                {{--</a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        @if ( Auth::check() && Auth::user()->user_type == 'admin')

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('user-view-admin')}}">Vartotojai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('soft-deleted-users-admin')}}">Ištrinti Vartotojai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('course-view-admin')}}">Kursai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('soft-deleted-course-admin')}}">Ištrinti Kursai</a>
                            </li>

                        @elseif(Auth::check() && Auth::user()->user_type == 'lecturer')

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('course-view-lecturer')}}">Kursai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('group-view-lecturer')}}">Grupės</a>
                            </li>

                        @elseif(Auth::check() && Auth::user()->user_type == 'student')

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('student-group-view-student')}}">Grupės</a>
                            </li>

                        @endif

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Prisijungti</a>
                            </li>

                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->user_type . ' ' }}{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{--{{ __('Logout') }}--}}
                                        Atsijungti
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                        @csrf

                                    </form>
                                </div>
                            </li>

                        @endguest

                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        @yield('content')

                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
