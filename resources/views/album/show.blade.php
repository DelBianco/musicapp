@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>{{$album->id}} -
                <small class="text-muted">{{$album->artist->name}}</small> - {{$album->year}}</h2>
            <div class="row">
            <div class="col-sm-6">
                <img src="{{$album->cover_foto}}" class="img-fluid">
            </div>
            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item">Artist: {{count($album->artist->name)}}</li>
                    <li class="list-group-item">Year: {{count($album->year)}}</li>
                    <li class="list-group-item">Tracks: {{count($album->musics)}}</li>
                    <li class="list-group-item">Total time: {{$album->duration()}}</li>
                </ul>
                <hr>
                @guest
                    @else
                        @if (in_array('admin',json_decode(Auth::user()->roles)))
                            Admin actions: <br>
                            <a href="{{route('album.edit',['album' => $album])}}" class="btn btn-warning">Edit</a>
                            <form action="/album/{{ $album->id }}" method="post">
                                {!! csrf_field() !!}
                                {{ method_field('delete') }}
                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>

                        @endif
                        @endguest
            </div>
        </div>
            <br><br>
        <div class="row">
            <h5>Tracks</h5>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Music</th>
                    <th scope="col">Order</th>
                    <th scope="col">Duration</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($album->musics as $music)
                    <tr>
                        <th scope="row">{{ $music->id }}</th>
                        <td>{{$music->name}}</td>
                        <td>{{$music->order_number}}</td>
                        <td>{{$music->duration}}</td>
                        <td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
