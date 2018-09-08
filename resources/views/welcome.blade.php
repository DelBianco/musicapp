@extends('layouts.app')
@section('sidemenu-top')
    <h1 class="jumbotron-heading">MusicApp</h1>
    <p class="lead text-muted">[Laravel Demo for RunWeb]</p>
@endsection
@section('content')
    <div class="album py-5">
        <div class="container">
            <h2>Artistas</h2>
            <div class="row">
                <div class="card-columns">
                    @foreach ($artists as $artist)
                        <div class="card border-dark" >
                            <img class="card-img" src="{{ $artist->image }}" alt="Card image">
                            <div class="card-img-overlay mt-auto mb-0" style="background-color: rgba(0,0,0,0.9); height: 60px;">
                                <a class="font-weight-bold text-light" href="{{route('artist.show', ['artist' => $artist])}}"><h5 class="card-title text-light">{{ $artist->name }}  + </h5> </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $artists->links() }}
            </div>
        </div>
    </div>
@endsection