<h3>Sukurti Naują Vartotoją</h3>
<form class="form-inline" method="POST" action="{{route('create-user-admin')}}">
    @csrf
    <select class="form-control" name="user_type" required>
        <option selected disabled>Pasirinkite Vartotoją</option>
        <option value="admin">Administratorius</option>
        <option value="lecturer">Dėstytojas</option>
        <option value="student">Studentas</option>
    </select>
    <input class="form-control" type="text" placeholder="Vardas, Pavardė" value="{{ old('name') }}" name="name" required>
    <input class="form-control" type="text" placeholder="El. Paštas" value="{{ old('email') }}" name="email" required>
    <input class="form-control" type="text" placeholder="Telefono Nr." value="{{ old('phone') }}" name="phone">
    <input class="form-control" type="text" placeholder="Slaptažodis" value="{{ old('password') }}" name="password" required>
    <button type="submit" class="btn btn-primary">Išsaugoti</button>
</form>
