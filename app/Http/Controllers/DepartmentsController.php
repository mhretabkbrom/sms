<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Faculty;
use Session;
class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('departments.create')->with(compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'Name' => 'required|max:255',
            'Faculty_id' => 'required|integer'
        ]);
    
        // Find the department by ID
        $department = new  Department;
        // Set the department's Name and Faculty_id properties with the request data
        $department->Name = $request->Name;
        $department->Faculty_id = $request->Faculty_id;
        // Save the department to the database
        $department->save();
        Session::flash('success', 'The department has been success, fully saved!');
        // Redirect to the show method of the DepartmentsController, passing the department ID as a parameter
        return redirect()->route('departments.show', $department->Department_id);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Department_id)
    {
        $department = Department::find($Department_id);
        $faculties = Faculty::all();
         $cat = array();
         foreach($faculties as $faculty){
         $cat[$faculty->Faculty_id] = $faculty->FacultyName;
            
         } 

        return view('departments.show')->with('department', $department)->with('faculties', $cat);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Department_id)
    {
        $department = Department::find($Department_id);
        $faculties = Faculty::all();
        $catsss = array();
    
        foreach ($faculties as $faculty) {
            $catsss[$faculty->Faculty_id] = $faculty->FacultyName;
        }
    
        return view('departments.edit')->with('department', $department)->with('faculties', $catsss);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Department_id)
    {
        // Validate the request data
        $this->validate($request, [
            'Name' => 'required|max:255',
            'Faculty_id' => 'required|integer'
        ]);
    
        // Find the department by ID
        $department = Department::find($Department_id);
    
        // Set the department's Name and Faculty_id properties with the request data
        $department->Name = $request->input('Name');
        $department->Faculty_id = $request->input('Faculty_id');
    
        // Save the department to the database
        $department->save();
    
        // Redirect to the show method of the DepartmentsController, passing the department ID as a parameter
        Session::flash('success', 'The department has been success, fully updated!');
        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Department_id)
    {
        //
        $department = Department::find($Department_id);
        $department->delete();
        Session::flash('successs', 'The department has been success, fully deleted!');
        return redirect()->route('departments.index');

    }
}
