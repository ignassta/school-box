@extends('layouts/app')
@section('content')

    <form class="form-inline" method="POST" action="{{route('update-course-lecturer', $id)}}">
        @csrf
        @method('PUT')

        <input class="form-control" type="text" placeholder="Pavadinimas" name="course_title" value="{{$course->title}}" required>
        <button type="submit" class="btn btn-primary">Taisyti</button>
        <a href="/lecturer/course/" class="btn btn-primary">Grižti</a>
    </form>

@endsection
