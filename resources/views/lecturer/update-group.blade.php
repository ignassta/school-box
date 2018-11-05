@extends('layouts/app')
@section('content')

    <form class="form-inline" method="POST" action="{{route('update-group-lecturer', $id)}}">
        @csrf
        @method('PUT')

        <select class="form-control" name="group_course_id" >
            <option selected disabled>Pasirinkite Kursą</option>

            @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->title}}</option>
            @endforeach

        </select>
        <input class="form-control" type="text" placeholder="Grupės Pavadinimas" value="{{$group->title}}" name="group_title" required>
        <input class="form-control" type="text" placeholder="Kursų Pradžia" value="{{$group->starts}}" name="group_starts" required>
        <input class="form-control" type="text" placeholder="Kursų Pabaiga" value="{{$group->ends}}" name="group_ends" required>
        <button class="btn btn-primary" type="submit">Taisyti</button>
        <a href="/lecturer/group/" class="btn btn-primary">Grižti</a>
    </form>

@endsection
