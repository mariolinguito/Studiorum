<?php

namespace App\Http\Controllers;

use App\CourseInformation;
use App\CoursesInformation;
use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_prof' => 'required',
            'course_average_time' => 'required',
            'course_average_vote' => 'required',
        ]);

        $course = new Course([
            'course_name' => $request->get('course_name'),
            'course_prof' => $request->get('course_prof')
        ]);

        $course->save();

        $course_information = new CoursesInformation([
            'courses_id' => $course->id,
            'course_time' => $request->get('course_average_time'),
            'average_vote' => $request->get('course_average_vote'),
        ]);

        $course_information->save();

        return redirect('/home')->with('success', 'Course created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function join_student($id)
    {
        DB::table('courses_students')->insert(
            [
                'students_id' => Auth::id(),
                'courses_id' => $id,
            ]
        );

        return redirect()->action(
            'CourseController@course_information', ['id' => $id]
        );
    }

    public function course_information($id)
    {
        $courses = DB::table('courses')->where('id', $id)->get();
        $courses_information = DB::table('courses_information')->where('courses_id', $id)->get();
        $courses_notes = DB::table('courses_notes')->where('courses_id', $id)->get();
        $courses_questions = DB::table('courses_questions')->where('courses_id', $id)->get();

        return view('courses.information', compact('courses', 'courses_information', 'courses_notes', 'courses_questions'));
    }

    public function course_notes(Request $request, $id)
    {
        // @todo: Implementare la funzione per l'inserimento di note per il corso
    }

    public function course_questions(Request $request, $id)
    {
        // @todo: Implementare la funzione per l'inserimento di domande per il corso
    }

    public function course_documents(Request $request, $id)
    {
        // @todo: Implementare la funzione per l'inserimento di documenti per il corso (Amazon S3)
    }

    public function course_students(Request $request, $id)
    {
        // @todo: Implementare la funzione per l'elenco degli studenti del corso
    }
}
