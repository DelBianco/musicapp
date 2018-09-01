@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Criando novo Artista</h1>
            <hr>
            <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        O formulario possui erros, favor verificar
                    </div>
                @endif
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="title">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url">Descrição</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descrição" value="{{ old('description') }}">
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection
