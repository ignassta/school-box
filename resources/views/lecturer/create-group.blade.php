<h3>Sukurti Naują Grupę</h3>
<form class="form-inline" method="POST" action="{{route('create-group-lecturer')}}">
    @csrf
    <select class="form-control" name="course_id" >
        <option selected disabled>Pasirinkite Kursą</option>

        @foreach($courses as $course)
            <option value="{{$course->id}}">{{$course->title}}</option>
        @endforeach

    </select>
    <input class="form-control" type="text" placeholder="Grupės Pavadinimas" value="{{ old('title') }}" name="title" required>
    <input class="form-control" type="text" placeholder="Kursų Pradžia" value="{{ old('starts') }}" name="starts" required>
    <input class="form-control" type="text" placeholder="Kursų Pabaiga" value="{{ old('ends') }}" name="ends" required>
    <button type="submit" class="btn btn-primary">Išsaugoti</button>
</form>
