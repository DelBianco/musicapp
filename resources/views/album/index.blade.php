@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Albums</h2>
            <div class="row">
                @foreach ($albums as $album)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 src="{{ $album->cover_foto }}"
                                 alt="Cover" style="height: 200px">
                            <div class="card-body">
                                <p class="card-text">
                                    Artista: {{ $album->artist->name }}<br>
                                    <small> {{ $album->year }}</small>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
