@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Music</h2>
            {{ $music }}
            @guest
                @else
                    @if (in_array('admin',json_decode(Auth::user()->roles)))
                        Admin actions: <br>
                        <a href="{{route('music.edit',['music' => $music])}}" class="btn btn-secondary">Edit</a>

                        <form action="/music/{{ $music->id }}" method="post">
                            {!! csrf_field() !!}
                            {{ method_field('delete') }}
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form>

                    @endif
                    @endguest
        </div>
    </div>
@endsection
