<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function indexLecturer()
    {
        $courses = Course::paginate(5);
        return view('lecturer/course', ['courses' => $courses]);
    }

    public function indexAdmin()
    {
        $courses = Course::paginate(5);
        return view('admin/course', ['courses' => $courses]);
    }

    public function createLecturer()
    {
        return view('lecturer/create-course');
    }
    public function createAdmin()
    {
        return view('admin/create-course');
    }

    public function storeLecturer(Request $request)
    {
        $course = new Course;
        $course->user_id = Auth::id();
        $course->title = request('title');
        $course->save();

        return redirect('lecturer/course');
    }
    public function storeAdmin(Request $request)
    {
        $course = new Course;
        $course->user_id = Auth::id();
        $course->title = request('title');
        $course->save();

        return redirect('admin/course');
    }

    public function show($id)
    {
        //
    }

    public function editLecturer($id)
    {
        $course = Course::find($id);
        return view('lecturer/update-course', ['course' => $course, 'id' => $id]);
    }
    public function editAdmin($id)
    {
        $course = Course::find($id);
        return view('admin/update-course', ['course' => $course, 'id' => $id]);
    }

    public function updateLecturer(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title=$request->get('course_title');
        $course->save();
        return redirect('lecturer/course');
    }

    public function updateAdmin(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title=$request->get('course_title');
        $course->save();
        return redirect('admin/course');
    }

    public function destroyAdmin($id)
    {
        Course::find($id)->delete();
        return redirect('admin/course');
    }

    public function softDeletedCourseAdmin()
    {
        $courses = Course::onlyTrashed()->paginate(5);
        return view('admin/soft-deleted-course', ['courses' => $courses]);
    }

    public function restoreAdmin($id) {
        Course::onlyTrashed()->where('id', $id)->restore();
        return redirect('admin/soft-deleted-course');
    }
}
