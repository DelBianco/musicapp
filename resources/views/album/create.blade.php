@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>New Album</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('album.store') }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                        <label for="title">Year</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="Year" value="{{ old('year') }}">
                        @if($errors->has('year'))
                            <span class="help-block">{{ $errors->first('year') }}</span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('artist') ? ' has-error' : '' }}">
                        <label for="description">Artist</label>
                        <select id="artist" class="form-control" name="artist">
                            @foreach($artists as $artist)
                                <option value="{{$artist->id}}">{{$artist->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('artist'))
                            <span class="help-block">{{ $errors->first('artist') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('cover_foto') ? ' has-error' : '' }}">
                        <label for="image">Cover Foto</label>
                        <input id="cover_foto" type="file" class="form-control{{ $errors->has('cover_foto') ? ' is-invalid' : '' }}"  value="{{ old('cover_foto') }}"  name="cover_foto" accept="image/png, image/jpeg">
                        @if ($errors->has('cover_foto'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('cover_foto') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
