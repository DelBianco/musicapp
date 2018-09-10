<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MusicApp</a>
    <form action="{{ route('search') }}" method="post" class="form-inline w-100">
        {!! csrf_field() !!}
        {{--<input  class="form-control mx-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
        <input name="query" id="query" class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
    </form>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @else
                <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </a>
        @endguest
        </li>
    </ul>
</nav>