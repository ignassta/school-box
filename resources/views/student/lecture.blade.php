@extends('layouts.app')
@section('content')

    <h3>Grupės "{{$group->title}}" paskaitų sąrašas</h3>
    {{--<h3>Rodomi {{count($group)}} įrašai iš {{$group->total()}}</h3>--}}
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Pavadinimas</th>
            <th>Aprašymas</th>
            <th></th>
        </tr>

        @foreach($group->lecture as $lecture)

            <tr>
                <td>{{$lecture->id}}</td>
                <td>{{$lecture->date}}</td>
                <td>{{$lecture->title}}</td>
                <td>{{$lecture->about}}</td>
                <td><a class="btn btn-primary" href="{{route('file-view-student', $lecture->id)}}">Failai</a></td>
            </tr>

        @endforeach

    </table>
    <div class="d-flex justify-content-center">
        {{--{{ $group->lecture->links() }}--}}
    </div>

@endsection
