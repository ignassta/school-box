@extends('layouts/app')
@section('content')
@include('/admin/create-user')

    <h3>Rodomi {{count($users)}} įrašai iš {{$users->total()}}</h3>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Vartotojo Tipas</th>
            <th>Vardas, Pavardė</th>
            <th>El. Paštas</th>
            <th>Telefonas</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->user_type}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td><a class="btn btn-primary" href="{{route('update-user-view-admin', $user->id)}}">Taisyti</a></td>
                <td>
                    <form action="{{route('delete-user-admin', $user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Trinti</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>

@endsection
