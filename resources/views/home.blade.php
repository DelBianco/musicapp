@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{Auth::user()->name}}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2 text-right">
                    <img src="{{ Auth::user()->image }}" class="rounded-circle" height="50"><br>
                    @if (in_array('admin',json_decode(Auth::user()->roles)))
                        <span class="badge badge-info">ADMIN</span>
                    @else
                        <span class="badge badge-success">USER</span>
                    @endif
                </div>
                <div class="col-sm-10">
                    Use the side menu to create new Artists, Albums or Songs Individually<br>
                    <br>
                    Use the Spotify section to sync your favorite top 10 spotify Artist to our database<br>
                    That will include also 10 Albuns and all the Songs inside them
                </div>
            </div>
            @if (in_array('admin',json_decode(Auth::user()->roles)))
                <hr>
            <div class="text-right">
                <a href="{{ route('register') }}" class="btn btn-sm btn-success ">+ Add User</a>
            </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row"><img src="{{ $user->image }}" class="rounded-circle" height="30"><br></th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><span class="badge badge-primary">{!! implode("</span> <span class='badge badge-primary'>",json_decode($user->roles)) !!}</span></td>
                            <td>
                                <a href="{{ route('user.edit', ['user' => $user]) }}" class="btn btn-sm btn-secondary">Edit</a>
                                <form action="/user/{{ $user->id }}" method="post">
                                    {!! csrf_field() !!}
                                    {{ method_field('delete') }}
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                You can't Add new users, ask the admins to do so
            @endif
        </div>
    </div>
@endsection
