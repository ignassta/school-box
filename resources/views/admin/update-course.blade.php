@extends('layouts/app')
@section('content')

    <form class="form-inline" method="POST" action="{{route('update-course-admin', $id)}}">
        @csrf
        @method('PUT')

        <input class="form-control" type="text" placeholder="Pavadinimas" name="course_title" value="{{$course->title}}" required>
        <button type="submit" class="btn btn-primary">Taisyti</button>
        <a href="/admin/course/" class="btn btn-primary">Grižti</a>
    </form>

@endsection
