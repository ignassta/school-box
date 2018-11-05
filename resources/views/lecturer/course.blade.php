@extends('layouts/app')
@section('content')
@include('/lecturer/create-course')

    <h3>Rodomi {{count($courses)}} įrašai iš {{$courses->total()}}</h3>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Kurso Pavadinimas</th>
            <th></th>
        </tr>

        @foreach($courses as $course)

            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->title}}</td>
                <td><a class="btn btn-primary" href="{{route('update-course-view-lecturer', $course->id)}}">Taisyti</a></td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{ $courses->links() }}
    </div>

@endsection
