<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;
use Session;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $semesters = Semester::all();
        return view('semesters.index')->with(compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('semesters.create');
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
            'semeName' => 'required|max:255',
            'year' =>'required|integer'
        ));

       $semester = new Semester;
        $semester->semeName = $request->semeName;
        $semester->year = $request->year;
        $semester->save();
        Session::flash('success', 'The Semester  Has Been success save!');

        return redirect()->route('semesters.show', $semester->Semester_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Semester_id)
    {
        //
        $semester = Semester::find($Semester_id);
        return view('semesters.show')->withSemester($semester);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Semester_id)
    {
        //



        $semester = Semester::find($Semester_id);
        return view('semesters.edit')->withSemester($semester);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Semester_id)
    {
        //

        $this->validate($request, array(
            'semeName' => 'required|max:255',
            'year' =>'required|integer'
        ));

       $semester =  Semester::find($Semester_id);
        $semester->semeName = $request->input('semeName');
        $semester->year = $request->input('year');
        $semester->save();
        Session::flash('success', 'The Semester  Has Been success Fully Save Update!');
        return redirect()->route('semesters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Semester_id)
    {
        //
        $semester = Semester::find($Semester_id);
        $semester->delete();

        Session::flash('successs', 'The Semester  Has Been success Fully Save Deleted!');
        return redirect()->route('semesters.index');

    }
}
