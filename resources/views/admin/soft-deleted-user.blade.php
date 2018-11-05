@extends('layouts.app')
@section('content')

    <h3>Ištrinti įrašai</h3>
    <h3>Rodomi {{count($users)}} įrašai iš {{$users->total()}}</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
        </tr>

        @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->user_type}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <form action="{{route('restore-user-admin', $user->id)}}" method="post">

                        @csrf

                        <button type="submit" class="btn btn-primary">Atstatyti</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>

@endsection
