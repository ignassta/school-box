<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//if ( Auth::check() && Auth::user()->user_type == 'admin')
//{
//    Route::get('/admin', 'HomeController@index')->name('home');
//}
//elseif (Auth::check() && Auth::user()->user_type == 'lecturer')
//{
//    Route::get('/lecturer', 'HomeController@index')->name('home');
//}
//elseif (Auth::check() && Auth::user()->user_type == 'student')
//{
//    Route::get('/student', 'HomeController@index')->name('home');
//}

//admin pages
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/admin/user', 'UserController@indexAdmin')->name('user-view-admin');
    Route::get('/admin/create-user', 'UserController@createAdmin')->name('create-user-view-admin');
    Route::post('/admin/user', 'UserController@storeAdmin')->name('create-user-admin');
    Route::get('/admin/update-user/{user}', 'UserController@editAdmin')->name('update-user-view-admin');
    Route::put('/admin/user/{id}', 'UserController@updateAdmin')->name('update-user-admin');
    Route::delete('/admin/user/{id}', 'UserController@destroyAdmin')->name('delete-user-admin');
    Route::get('/admin/soft-deleted-user', 'UserController@softDeletedUsersAdmin')->name('soft-deleted-users-admin');
    Route::post('/admin/soft-deleted-user/{id}', 'UserController@restoreAdmin')->name('restore-user-admin');

    Route::get('/admin/course', 'CourseController@indexAdmin')->name('course-view-admin');
    Route::get('/admin/create-course', 'CourseController@createAdmin')->name('create-course-view-admin');
    Route::post('/admin/course', 'CourseController@storeAdmin')->name('create-course-admin');
    Route::get('/admin/update-course/{course}', 'CourseController@editAdmin')->name('update-course-view-admin');
    Route::put('/admin/course/{id}', 'CourseController@updateAdmin')->name('update-course-admin');
    Route::get('/admin/soft-deleted-course', 'CourseController@softDeletedCourseAdmin')->name('soft-deleted-course-admin');
    Route::post('/admin/soft-deleted-course/{id}', 'CourseController@restoreAdmin')->name('restore-course-admin');
    Route::delete('/admin/course/{id}', 'CourseController@destroyAdmin')->name('delete-course-admin');
});

//lecturer pages
Route::group(['middleware' => 'App\Http\Middleware\LecturerMiddleware'], function()
{
    Route::get('/lecturer/course', 'CourseController@indexLecturer')->name('course-view-lecturer');
    Route::get('/lecturer/create-course', 'CourseController@createLecturer')->name('create-course-lecturer');
    Route::post('/lecturer/course', 'CourseController@storeLecturer')->name('create-course-lecturer');
    Route::get('/lecturer/update-course/{course}', 'CourseController@editLecturer')->name('update-course-view-lecturer');
    Route::put('/lecturer/course/{id}', 'CourseController@updateLecturer')->name('update-course-lecturer');

    Route::get('/lecturer/group', 'GroupController@indexLecturer')->name('group-view-lecturer');
    Route::get('/lecturer/create-group', 'GroupController@createLecturer')->name('create-group-view-lecturer');
    Route::post('/lecturer/group', 'GroupController@storeLecturer')->name('create-group-lecturer');
    Route::get('/lecturer/update-group/{group}', 'GroupController@editLecturer')->name('update-group-view-lecturer');
    Route::put('/lecturer/group/{id}', 'GroupController@updateLecturer')->name('update-group-lecturer');

    Route::get('/lecturer/student/{id}', 'GroupController@studentListLecturer')->name('student-list-lecturer');
    Route::get('/lecturer/add-student/{group}', 'GroupController@ShowAddStudentLecturer')->name('add-student-view-lecturer');
    Route::put('/lecturer/add-student/{id}', 'GroupController@addStudentLecturer')->name('add-student-lecturer');

    Route::get('/lecturer/lecture/{group}', 'LectureController@indexLecturer')->name('lecture-view-lecturer');
    Route::get('/lecturer/create-lecture', 'LectureController@createLecturer')->name('create-lecture-view-lecturer');
    Route::post('/lecturer/lecture/{id}', 'LectureController@storeLecturer')->name('create-lecture-lecturer');

    Route::get('/lecturer/file/{lecture}', 'FileController@indexLecturer')->name('file-view-lecturer');
    Route::get('/lecturer/upload-file', 'FileController@createLecturer')->name('upload-file-view-lecture');
    Route::post('/lecturer/upload-file/{id}', 'FileController@storeLecturer')->name('upload-file-lecturer');
});

//student pages
Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{
    Route::get('/student/group', 'GroupController@indexStudent')->name('student-group-view-student');
    Route::get('/student/student/{id}', 'GroupController@studentListStudent')->name('student-list-view-student');
    Route::get('/student/lecture/{group}', 'LectureController@indexStudent')->name('lecture-view-student');
    Route::get('/student/file/{lecture}', 'FileController@indexStudent')->name('file-view-student');
});
