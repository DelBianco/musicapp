@extends('layouts.app')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <h2>Musics</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Music</th>
                    <th scope="col">Order</th>
                    <th scope="col">Duration</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($musics as $music)
                    <tr>
                        <th scope="row">{{ $music->id }}</th>
                        <td>{{$music->name}}</td>
                        <td>{{$music->composer}}</td>
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
@endsection
