@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>{{$artist->id}} -{{$artist->name}}</h2>
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{$artist->image}}" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <ul class="list-group">
                        <li class="list-group-item">Artist: {{$artist->name}}</li>
                        <li class="list-group-item">Description: {{$artist->description}}</li>
                        <li class="list-group-item">Genres: <span class="badge badge-primary">{!! implode('</span> <span class="badge badge-primary">',explode(',',$artist->genre))  !!} </span></li>
                        <li class="list-group-item">Created at: {{$artist->created_at}}</li>
                    </ul>
                </div>
            </div>
            <br><br>
            <div class="row">
                <h5>Albums</h5>
                <div class="card-columns">
                    @foreach ($artist->albums as $album)
                        <div class="card border-dark">
                            <img class="card-img" src="{{ $album->cover_foto }}" alt="Card image">
                            <div class="card-img-overlay mt-auto mb-0"
                                 style="background-color: rgba(0,0,0,0.9); height: 60px;">
                                <a class="font-weight-bold text-light" href="{{route('album.show', ['album' => $album])}}">
                                    <h5 class="card-title text-light">{{  $album->year }}
                                        <small class="text-muted">{{ $album->artist->name }}</small>
                                        +
                                    </h5>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
