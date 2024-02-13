<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use Session;

class FacultysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $faculties = Faculty::orderBy('created_at', 'asc')->paginate('4');
        return view('faculties.index')->with(compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        //
        return view('faculties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'FacultyName' => 'required|max:255',
        ]);
    
        $faculty = new Faculty;
        $faculty->FacultyName = $request->FacultyName;
        $faculty->save();
    
        Session::flash('success', 'The new Faculty Name has been successfully created.');
        return redirect()->route('faculties.show', $faculty->Faculty_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Faculty_id)
    {
        $faculty = Faculty::find($Faculty_id);
        return view('faculties.show')->with('faculty', $faculty);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Faculty_id)
    {
        //
        $faculty =  Faculty::find($Faculty_id);
        return  view('faculties.edit')->with(compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Faculty_id)
    {
        //

        $this->validate($request, [
            'FacultyName' => 'required|max:255',
        ]);
    
        $faculty = Faculty::find($Faculty_id);
        $faculty->FacultyName = $request->input('FacultyName');
        $faculty->save();
    
        Session::flash('success', 'The new Faculty Name has been success, fully updated.');
        return redirect()->route('faculties.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Faculty_id)
    {
        //
        $faculty = Faculty::find($Faculty_id);
        $faculty->delete();
        Session::flash('successs', 'Success, fully deleted');
        return redirect()->route('faculties.index');


    }
}
