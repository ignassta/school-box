<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
{
    public function indexLecturer()
    {
        $groups = Group::where('user_id', auth()->id())->paginate(5);
        $courses = Course::all();
        $users = User::all();
        return view('lecturer/group', ['groups' => $groups, 'courses' => $courses, 'users' => $users]);
    }

    public function indexStudent()
    {
        $groups = Group::all();
        return view('student/group', ['groups' => $groups]);
    }

    public function createLecturer()
    {
        return view('lecturer/create-group');
    }

    public function storeLecturer(Request $request)
    {
        $group = new Group;
        $group->course_id = request('course_id');
        $group->user_id = Auth::id();
        $group->title = request('title');
        $group->starts = request('starts');
        $group->ends = request('ends');
        $group->save();

        return redirect('lecturer/group');
    }

    public function editLecturer($id)
    {
        $courses = Course::all();
        $users = User::all();
        $group = Group::find($id);
        return view('lecturer/update-group', ['group' => $group, 'id' => $id, 'courses' => $courses, 'users' => $users]);
    }

    public function updateLecturer(Request $request, $id)
    {
        $group = Group::find($id);
        $group->course_id=$request->get('group_course_id');
        $group->title=$request->get('group_title');
        $group->starts=$request->get('group_starts');
        $group->ends=$request->get('group_ends');
        $group->save();

        return redirect('lecturer/group');
    }

    public function studentListLecturer($id)
    {
        $groups = Group::find($id);
        $users = User::all()->where('user_type', '==', 'student' );

        return view('lecturer/student', ['groups' => $groups, 'id' => $id, 'users' => $users]);
    }

    public function studentListStudent($id)
    {
        $groups = Group::find($id);
        $users = User::all()->where('user_type', '==', 'student' );

        return view('student/student', ['groups' => $groups, 'id' => $id, 'users' => $users]);
    }

    public function ShowAddStudentLecturer($id)
    {
        $group = Group::find($id);
        $users = User::all()->where('user_type', '==', 'student' );

        return view('lecturer/add-student', ['group' => $group, 'id' => $id, 'users' => $users]);
    }

    public function addStudentLecturer(Request $request, $id)
    {
        $group = Group::find($id);
        $user = $request->get('group_user_id');
        $group->student()->attach($user);

        return back();
    }
}
