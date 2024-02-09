@extends('main')
@section('title', '|Create New')
@section('content')

<div class="row">
    <div class="col-md-12">

        {{ Form::open(array('route' => 'grades.store', 'method' => 'POST')) }}

        

         {{ Form::label('Mark', 'Marks')}}
         {{ Form::text('Mark', null,['class'=>'form-control'])}}

        {{ Form::label('Course_id', 'Course Number') }}
        <select class="form-control" name="Course_id">
            @foreach ($courses as $course)
                <option value="{{ $course->Course_id }}">{{ $course->cono }}</option>
            @endforeach
        </select>

        {{ Form::label('Course_id', 'Course Title') }}
        <select class="form-control" name="Course_id">
            @foreach ($courses as $course)
                <option value="{{ $course->Course_id }}">{{ $course->costitle }}</option>
            @endforeach
        </select>


        {{ Form::label('Course_id', 'Course credit Hour') }}
        <select class="form-control" name="Course_id">
            @foreach ($courses as $course)
                <option value="{{ $course->Course_id }}">{{ $course->CH}}</option>
            @endforeach
        </select>







        {{ Form::label('Semester_id', 'Semester Name') }}
        <select class="form-control" name="Semester_id">
            @foreach ($semesters as $semester)
                <option value="{{ $semester->Semester_id }}">{{ $semester->semeName}}</option>
            @endforeach
        </select>



        
        {{ Form::label('Semester_id', 'Year') }}
        <select class="form-control" name="Semester_id">
            @foreach ($semesters as $semester)
                <option value="{{ $semester->Semester_id }}">{{ $semester->year}}</option>
            @endforeach
        </select>






        {{ Form::label('student_id', 'First Name') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}">{{ $student->Fname}}</option>
            @endforeach
        </select>





        {{ Form::label('student_id', 'Middle Name') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}">{{ $student->Mname}}</option>
            @endforeach
        </select>





        {{ Form::label('student_id', 'Last Name') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}">{{ $student->Lname}}</option>
            @endforeach
        </select>




        
        {{ Form::label('student_id', 'Email') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}">{{ $student->email}}</option>
            @endforeach
        </select>


        
        {{ Form::label('student_id', 'Date of birth') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}">{{ $student->date_of_birth}}</option>
            @endforeach
        </select>




        {{ Form::label('student_id', 'Department id') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}">{{ $student->Department_id}}</option>
            @endforeach
        </select>












        

        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>



@endsection