@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>New Music</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('music.store') }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="title">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <span class="help-block">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('composer') ? ' has-error' : '' }}">
                        <label for="genre">Composer</label>
                        <input type="text" class="form-control" id="composer" name="composer" placeholder="Composer" value="{{ old('composer') }}">
                        @if($errors->has('composer'))
                            <span class="help-block">{{ $errors->first('composer') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('order_number') ? ' has-error' : '' }}">
                        <label for="description">Track Order</label>
                        <input type="number" class="form-control" id="order_number" name="order_number" placeholder="Track Order" value="{{ old('order_number') }}">
                        @if($errors->has('order_number'))
                            <span class="help-block">{{ $errors->first('order_number') }}</span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                        <label for="duration">Duration (seconds)</label>
                        <input id="duration" type="number" class="form-control{{ $errors->has('duration') ? ' is-invalid' : '' }}"  value="{{ old('duration') }}"  name="duration">
                        @if ($errors->has('duration'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('duration') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
