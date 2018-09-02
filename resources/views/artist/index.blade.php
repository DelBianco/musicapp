@extends('layouts.app')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Artists</h2>
            <div class="row">
                @foreach ($artists as $artist)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"
                                 src="{{ $artist->image }}"
                                 alt="{{ $artist->name }}" >
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
                                    <small class="badge badge-info">{{ explode(',',$artist->genre)[0] }}</small><br>
                                    <small class="badge badge-success">{{ $artist->albums->count() }} Albums</small>
                                    <br>
                                    <small class="badge badge-warning">{{ $artist->getAmountOfTime() }}s</small><br>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
