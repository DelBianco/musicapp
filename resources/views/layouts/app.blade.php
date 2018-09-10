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
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-secondary text-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('artist.index') }}">Artists</a>
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
                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Admin</span>
                                <a class="d-flex align-items-center text-muted" href="#">
                                    <span data-feather="plus-circle"></span>
                                </a>
                            </h6>
                            <ul class="nav flex-column mb-2">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('home') }}">
                                        <span data-feather="home"></span>
                                        {{ __('Dashboard') }}
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('artist.create') }}">New Artist</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('album.create') }}">New Album</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('music.create') }}">New Song</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('fetch') }}">Sync with Spotify</a>
                                </li>
                            </ul>
                            @endguest
                </div>
            </nav>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-5">
                @yield('content')
                <footer class="container-fluid py-5 bg-dark text-light border-top mt-4 border-light">
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
    </div>
</div>
</body>
</html>
