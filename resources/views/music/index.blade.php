@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Musics</h2>
            <div class="row">
                @foreach ($musics as $music)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-body">
                                <h3>{{ $music->name }}</h3>
                                <p class="card-text">
                                    <small> {{ $music->composer }}</small>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="badge badge-info">{{ $music->duration }}</small>
                                    <small class="badge badge-success">{{ $music->order_number }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
