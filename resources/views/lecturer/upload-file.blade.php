{{--<form class="form-inline" action="{{url('store')}}" method="POST" enctype="multipart/form-data">--}}
<form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('upload-file-lecturer', $id)}}">
    @csrf
    <input type="file" id="lecture_file" name="lecture_file" required>
    <input type="text" class="form-control" name="file_title" placeholder="Failo Pavadinimas" required>
    <button type="submit" class="btn btn-primary">Įkelti</button>
    <a class="btn btn-primary" href="javascript:history.back()">Grįžti</a>
</form>
