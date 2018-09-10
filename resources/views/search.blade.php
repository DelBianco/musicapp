@extends('layouts.app')
@section('content')
    <ul class="list-unstyled">
    @forelse($search['albums'] as $album)
        <li class="media">
            <span class="badge badge-info mr-3">Album</span>
            <div class="media-body">
                <h5 class="mt-0">{{$album->year}} <small class="text-muted">{{$album->artist->name}}</small></h5>

            </div>
        </li>
    @empty
        <li class="media">
            :( Sorry, No Album found!
        </li>
    @endforelse

        <hr>
    @forelse($search['artists'] as $artist)
        <li class="media">
            <span class="badge badge-warning mr-3">Artist</span>
            <div class="media-body">
                <h5 class="mt-0">{{$artist->name}}</h5>
                Genres: <span class="badge badge-primary">{!! implode('</span> <span class="badge badge-primary">',explode(',',$artist->genre))  !!} </span>
            </div>
        </li>
        @empty
        <li class="media">
            :( Sorry, No Artist found!
        </li>
    @endforelse
    <hr>
    @forelse($search['musics'] as $music)
        <li class="media">
            <span class="badge badge-danger mr-3">Music</span>
            <div class="media-body">
                <h5 class="mt-0">{{$music->name}}</h5>
                <span class="text-muted">Albums:</span> {{$music->composer}}
                <span class="text-muted">Duration:</span> {{$music->duration}}s
            </div>
        </li>
    @empty
        <li class="media">
            :( Sorry, No Music found!
        </li>
    @endforelse
    </ul>
@endsection