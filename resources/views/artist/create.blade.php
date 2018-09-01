@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>New Artist</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="/submit" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                        <label for="genre">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre" value="{{ old('genre') }}">
                        @if($errors->has('genre'))
                            <span class="help-block">{{ $errors->first('genre') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="{{ old('description') }}">
                        @if($errors->has('description'))
                            <span class="help-block">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image">Image</label>
                        <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"  value="{{ old('image') }}"  name="image" required>
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
