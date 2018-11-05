@extends('layouts/app')
@section('content')

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Studentas</th>
        </tr>

        @foreach($groups->student as $student)

            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
            </tr>

        @endforeach

    </table>

@endsection
