<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use App\Group;
class LectureController extends Controller
{
    public function indexLecturer($id)
    {
        $group = Group::find($id);
        return view('lecturer/lecture', ['group' => $group, 'id' => $id]);
    }

    public function indexStudent($id)
    {
        $group = Group::find($id);
        return view('student/lecture', ['group' => $group, 'id' => $id]);
    }

    public function createLecturer()
    {
        return view('lecturer/create-lecture');
    }

    public function storeLecturer(Request $request, $id)
    {
        $group = Group::find($id);
        $lecture = new Lecture;
        $lecture->group_id = $group->id;
        $lecture->date = request('date');
        $lecture->title = request('title');
        $lecture->about = request('about');
        $lecture->save();

        return back();
    }
}
