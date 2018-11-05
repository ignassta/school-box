<h3>Sukurti Naują Kursą</h3>
<form class="form-inline" method="POST" action="{{route('create-course-lecturer')}}">
    @csrf
    <input type="text" class="form-control" placeholder="Kurso Pavadinimas" name="title" value="{{ old('title') }}" required>
    <button type="submit" class="btn btn-primary">Išsaugoti</button>
</form>
