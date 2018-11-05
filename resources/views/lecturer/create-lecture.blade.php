<h3>Sukurti Naują Paskaitą</h3>
<form class="form-inline" method="POST" action="{{route('create-lecture-lecturer', $id)}}">
    @csrf
    <input class="form-control" placeholder="Paskaitos data" type="text" value="{{ old('date') }}" name="date" id="date" required>
    <input class="form-control" placeholder="Pavadinimas" type="text" value="{{ old('title') }}" name="title" id="title" required>
    <input class="form-control" placeholder="Aprašymas" type="text" value="{{ old('about') }}" name="about" id="about" required>
    <button type="submit" class="btn btn-primary">Išsaugoti</button>
    <a href="/lecturer/group" class="btn btn-primary">Grižti</a>
</form>
