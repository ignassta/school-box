<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Lecture;

class FileController extends Controller
{
    public function indexLecturer($id)
    {
        $lecture = Lecture::find($id);
        return view('lecturer/file', ['lecture' => $lecture, 'id' => $id]);
    }

    public function indexStudent($id)
    {
        $lecture = Lecture::find($id);
        return view('student/file', ['lecture' => $lecture, 'id' => $id]);
    }

    public function createLecturer()
    {
        return view('lecturer/upload-file');
    }

    public function storeLecturer(Request $request, $id)
    {
        $lecture = Lecture::find($id);
        $request->file('lecture_file')->store('public/'.$lecture->id); //file upload

        $file = new File;
        $file->lecture_id = $lecture->id;
        $file->file = $request->file('lecture_file')->hashName("".$lecture->id); //file download link
        $file->title = request('file_title');
        $file->save();

        return back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
