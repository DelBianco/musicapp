<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-white">Search</h4>
                <p class="text-muted">
                <form action="{{ route('search') }}" method="post" class="form-inline my-2 my-lg-0 ml-auto">
                    {!! csrf_field() !!}
                    <input name="query" id="query" class="form-control mx-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white">Menu</h4>
                <ul class="list-unstyled">
                    @guest
                    <li><a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @else
                    <li><a class="text-white" href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
                    <li><a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
            <h1>MusicApp</h1>
        </a>
        <button class="navbar-toggler border-0 ml-auto mr-2" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>
