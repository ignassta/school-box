@extends('layouts.app')
@section('content')

    <h3>Ištrinti įrašai</h3>
    <h3>Rodomi {{count($courses)}} įrašai iš {{$courses->total()}}</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Pavadinimas</th>
        </tr>

        @foreach($courses as $course)

            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->title}}</td>
                <td>
                    <form action="{{route('restore-course-admin', $course->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Atstatyti</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{ $courses->links() }}
    </div>

@endsection
