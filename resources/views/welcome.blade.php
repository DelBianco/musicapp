@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">MusicApp</h1>
            <p class="lead text-muted">[Laravel Demo for RunWeb]</p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Artistas</h2>
            <div class="row">
                @foreach ($artists as $artist)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 src="{{ $artist->image }}"
                                 alt="Card image cap" style="height: 200px">
                            <div class="card-body">
                                <h3>{{ $artist->name }}</h3>
                                <p class="card-text">
                                    <small> {{ $artist->description }}</small>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="badge badge-info">{{ $artist->genre }}</small>
                                    <small class="badge badge-success">{{ $artist->albums->count() }} Albums</small>
                                    <small class="badge badge-warning">{{ $artist->getAmountOfTime() }}s</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection