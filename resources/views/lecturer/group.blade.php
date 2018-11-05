@extends('layouts/app')
@section('content')
    @include('/lecturer/create-group')

    <h3>Rodomi {{count($groups)}} įrašai iš {{$groups->total()}}</h3>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Kursas</th>
            <th>Dėstytojas</th>
            <th>Grupė</th>
            <th>Pradžia</th>
            <th>Pabaiga</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        @foreach($groups as $group)

            <tr>
                <td>{{$group->id}}</td>
                <td>{{$group->course->title}}</td>
                <td>{{$group->lecturer->name}}</td>
                <td>{{$group->title}}</td>
                <td>{{$group->starts}}</td>
                <td>{{$group->ends}}</td>
                <td><a class="btn btn-primary" href="{{route('update-group-view-lecturer', $group->id)}}">Taisyti</a></td>
                <td><a class="btn btn-primary" href="{{route('student-list-lecturer', $group->id)}}">Studentai</a></td>
                <td><a class="btn btn-primary" href="{{route('lecture-view-lecturer', $group->id)}}">Paskaitos</a></td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{ $groups->links() }}
    </div>

@endsection
