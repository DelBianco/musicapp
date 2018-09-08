<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MusicApp</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('layouts.menu')
    <main>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-2">
                    @yield('sidemenu-top')
                    List
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('artist.index') }}">Artists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('album.index') }}">Albums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('music.index') }}">Songs</a>
                        </li>
                    </ul>
                    @guest
                        @else
                            Create New
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('artist.create') }}">Artists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('album.create') }}">Albums</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('music.create') }}">Songs</a>
                                </li>
                            </ul>
                            Spotify
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('fetch') }}">Sync with Spotify</a>
                                </li>
                            </ul>
                            @endguest
                </div>
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="container-fluid py-5 bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md">
                        MusicApp
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Cool stuff</a></li>
                            <li><a class="text-muted" href="#">Random feature</a></li>
                            <li><a class="text-muted" href="#">Team feature</a></li>
                            <li><a class="text-muted" href="#">Stuff for developers</a></li>
                            <li><a class="text-muted" href="#">Another one</a></li>
                            <li><a class="text-muted" href="#">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Resource</a></li>
                            <li><a class="text-muted" href="#">Resource name</a></li>
                            <li><a class="text-muted" href="#">Another resource</a></li>
                            <li><a class="text-muted" href="#">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Business</a></li>
                            <li><a class="text-muted" href="#">Education</a></li>
                            <li><a class="text-muted" href="#">Government</a></li>
                            <li><a class="text-muted" href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="#">Team</a></li>
                            <li><a class="text-muted" href="#">Locations</a></li>
                            <li><a class="text-muted" href="#">Privacy</a></li>
                            <li><a class="text-muted" href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</div>
</body>
</html>
