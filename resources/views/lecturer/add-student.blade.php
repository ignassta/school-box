<form class="form-inline" method="POST" action="{{route('add-student-lecturer', $id)}}">
    @csrf
    @method('PUT')

    <select class="form-control" name="group_user_id">
        <option selected disabled>Pasirinkite Studentą</option>

        @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach

    </select>
    <button class="btn btn-primary" type="submit">Įtraukti</button>
    <a href="/lecturer/group/" class="btn btn-primary">Grižti</a>
</form>


