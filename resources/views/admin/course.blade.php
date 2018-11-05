@extends('layouts/app')
@section('content')
@include('/admin/create-course')

    <h3>Rodomi {{count($courses)}} įrašai iš {{$courses->total()}}</h3>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Kurso Pavadinimas</th>
            <th></th>
            <th></th>
        </tr>

        @foreach($courses as $course)

            <tr>
                <td>{{$course->id}}</td>
                <td>{{$course->title}}</td>
                <td><a class="btn btn-primary" href="{{route('update-course-view-admin', $course->id)}}">Taisyti</a></td>
                <td>
                    <form action="{{route('delete-course-admin', $course->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">Trinti</button>
                    </form>
                </td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{ $courses->links() }}
    </div>

@endsection
