<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Semester;
use App\Student;
use App\Grade;
use Session;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grades = Grade::all();
        return view('grades.index')->withGrades($grades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $courses = Course::all();
        $semesters = Semester::all();
        $students = Student::all();
        return view('grades.create')->withCourses($courses)
        ->withSemesters($semesters)->withStudents($students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, array(
            'Mark'=>'required|integer',
              'Course_id'=>'required|integer',
              'Semester_id'=>'required|integer',
              'student_id'=>'required|integer'
        ));

        $grade = new Grade;
        $grade->Mark = $request->Mark;
        $grade->Course_id = $request->Course_id;
        $grade->Semester_id = $request->Semester_id;
        $grade->student_id = $request->student_id;
        $grade->save();
        Session::flash('success', 'The has been success, fully saved!');
         return redirect()->route('grades.index');

    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Grade_id)
    {
        $grade = Grade::find($Grade_id);
        return view('grades.show')->withGrade($grade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Grade_id)
    {
        //
        $grade = Grade::find($Grade_id);
        $students = Student::all();
        $semesters = Semester::all();
        $courses = Course::all();
        return view('grades.edit')->withGrade($grade)
        ->withStudents($students)->withSemesters($semesters)
        ->withCourses($courses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, array(
            'Mark'=>'required|integer',
              'Course_id'=>'required|integer',
              'Semester_id'=>'required|integer',
              'student_id'=>'required|integer'
        ));

        $grade = Grade::find($id);
        $grade->Mark = $request->input('Mark');
        $grade->Course_id = $request->input('Course_id');
        $grade->Semester_id = $request->input('Semester_id');
        $grade->student_id = $request->input('student_id');
        $grade->save();
        Session::flash('success', 'The has been success, fully updated!');
         return redirect()->route('grades.show', $grade->Grade_id);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Grade_id)
    {
        //
        $grade = Grade::find($Grade_id);
        $grade->delete();
        Session::flash('successs', 'The has been success, fully deleted!');
         return redirect()->route('grades.index');
    }
}
