<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Department;
use Session;
use Image;
use Storage;
class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $students = Student::orderBy('created_at', 'asc')->paginate(2);
        return view('students.index')->with('students', $students);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departments = Department::all();
        return view('students.create')->with('departments',  $departments) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'Fname' => 'required|max:255',
            'Mname' => 'required|max:255',
            'Lname' => 'required|max:256',
            'email' => 'required|email',
            'Department_id' => 'required|integer',
            'date_of_birth' => 'required',
            'featured_image' => 'sometimes|image'

        ));
    
        $student = new Student;
        $student->Fname = $request->Fname;
        $student->Mname = $request->Mname;
        $student->Lname = $request->Lname;
        $student->email = $request->email;
        $student->Department_id = $request->Department_id;
        $student->date_of_birth = $request->date_of_birth; // corrected column name
       
 


        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $student->image = $filename;
        }



        $student->save();
        Session::flash('success', 'The student name has been success, fully saved');
        return redirect()->route('students.show', $student->student_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_id)
    {
        //
       $student = Student::find($student_id);
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student_id)
    {
        $student = Student::find($student_id);
        $departments = Department::all(); // Fetch departments from the database
    
        return view('students.edit', compact('student', 'departments'));
    }


    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student_id)
    {
        //

        $this->validate($request, array(
            'Fname' => 'required|max:255',
            'Mname' => 'required|max:255',
            'Lname' => 'required|max:256',
            'email' => 'required|email',
            'Department_id' => 'required|integer',
            'date_of_birth' => 'required',
            'featured_image' => 'image'

        ));
    
        $student = Student::find($student_id);
        $student->Fname = $request->input('Fname');
        $student->Mname = $request->input('Mname');
        $student->Lname = $request->input('Lname');
        $student->email = $request->input('email');
        $student->Department_id = $request->input('Department_id');
        $student->date_of_birth = $request->input('date_of_birth'); // corrected column name
       
       
       
       

        if ($request->hasFile('featured_image')) {
            // add the new photo
            $image = $request->file('featured_image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->resize(800, 400)->save($location);
             $oldFilename = $student->image;
            //update the database
            $student->image = $filename;
            //Delete the old photo
            Storage::delete($oldFilename);
        }




        $student->save();
        Session::flash('success', 'The student name has been success updated Save');
        return redirect()->route('students.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student_id)
    {
        //
        $student = Student::find($student_id);
        Storage::delete($student->image);
        $student->delete();
        Session::flash('successs', 'The student name has been success, fully deleted!');
        return redirect()->route('students.index');



    }
}
