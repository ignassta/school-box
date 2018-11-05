@extends('layouts/app')
@section('content')
@include('/lecturer/upload-file')

<h3>"{{$lecture->title}}" paskaitos failai</h3>
{{--<h3>Rodomi {{count($lecture)}} įrašai iš {{$lecture->total()}}</h3>--}}
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Pavadinimas</th>
        <th>Failas</th>
    </tr>

    @foreach($lecture->file as $file)

        <tr>
            <td>{{$file->id}}</td>
            <td>{{$file->title}}</td>
            <td><a href="{{ asset('storage/'.$file->file) }}">{{$file->title}}</a></td>
        </tr>

    @endforeach

</table>
<div class="d-flex justify-content-center">
    {{--{{ $lectures->links() }}--}}
</div>

@endsection
