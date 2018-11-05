@extends('layouts/app')
@section('content')

    <form class="form-inline" method="POST" action="{{route('update-user-admin', $id)}}">
        @csrf
        @method('PUT')

        <input class="form-control" type="text" name="user_type" value="{{$user->user_type}}" required>
        <input class="form-control" type="text" name="name" value="{{$user->name}}" required>
        <input class="form-control" type="text" name="email" value="{{$user->email}}" required>
        <input class="form-control" type="text" name="phone" value="{{$user->phone}}">
        <button type="submit" class="btn btn-primary">Taisyti</button>
        <a href="/admin/user/" class="btn btn-primary">Grižti</a>
    </form>

@endsection
