@extends('layouts.app')

@section('content')
    <div class="album py-5">
        <div class="container">
            <h2>Albums</h2>
            <div class="card-columns">
                @foreach ($albums as $album)
                    <div class="card border-dark" >
                        <img class="card-img" src="{{ $album->cover_foto }}" alt="Card image">
                        <div class="card-img-overlay mt-auto mb-0" style="background-color: rgba(0,0,0,0.9); height: 60px;">
                            <a class="font-weight-bold text-light" href="{{route('album.show', ['album' => $album->id])}}">
                                <h5 class="card-title text-light">{{  $album->year }} <small class="text-muted">
                                        {{ $album->artist->name }}</small> + </h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $albums->links() }}
        </div>
    </div>
@endsection
