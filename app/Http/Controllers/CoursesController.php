<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Session;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
        $this->validate($request, array(
            'cono' =>'required|max:255',
            'costitle' =>'required|max:255',
            'CH' =>'required|integer'
        ));

        $course = new  Course;
        $course->cono = $request->cono;
        $course->costitle = $request->costitle;
        $course->CH = $request->CH;
        $course->save();
        Session::flash('success', ' New Courses has been success fully created!');
        return redirect()->route('courses.show', $course->Course_id);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Course_id)
    {
        //
   

$course = Course::find($Course_id);
return view('courses.show', ['course' => $course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Course_id)
    {
        //
        $course = Course::find($Course_id);
return view('courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Course_id)
    {
        //

        $this->validate($request, array(
            'cono' =>'required|max:255',
            'costitle' =>'required|max:255',
            'CH' =>'required|integer'
        ));

        $course =Course::find($Course_id);
        $course->cono = $request->input('cono');
        $course->costitle = $request->input('costitle');
        $course->CH = $request->input('CH');
        $course->save();
        Session::flash('success', ' New Courses has been success fully Updated!');
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Course_id)
    {
        //
        $course = Course::find($Course_id);
        $course->delete();
        Session::flash('successs', ' New Courses has been success fully Deleted!');
        return redirect()->route('courses.index');

    }
}
