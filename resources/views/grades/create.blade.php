@extends('main')
@section('title', '|Create New')
@section('content')

<div class="row">
    <div class="col-md-12">

        {{ Form::open(array('route' => 'grades.store', 'method' => 'POST')) }}

         {{ Form::label('Mark', 'Marks')}}
         {{ Form::text('Mark', null,['class'=>'form-control'])}}

        {{ Form::label('Course_id', 'Course Title') }}
        <select class="form-control" name="Course_id">
            @foreach ($courses as $course)
                <option value="{{ $course->Course_id }}">{{ $course->costitle }}</option>
            @endforeach
        </select>
        {{ Form::label('Semester_id', 'Semester Name') }}
        <select class="form-control" name="Semester_id">
            @foreach ($semesters as $semester)
                <option value="{{ $semester->Semester_id }}">{{ $semester->semeName}} ({{ $semester->year}})</option>
            @endforeach
        </select>

        {{ Form::label('student_id', 'First Name') }}
        <select class="form-control" name="student_id">
            @foreach ($students as $student)
                <option value="{{ $student->student_id }}"> {{ $student->email}} ({{ $student->Fname}} {{ $student->Mname}} {{ $student->Lname}}) </option>
            @endforeach
        </select>

        {{ Form::submit('Save', ['class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top:10px;margin-bottom:10px;'])}}
        {{ Form::close() }}
        <div class="row">
            <div class="col-md-4 ">   
                <a href="{{route('grades.index')}}" class="btn btn-primary btn-block"> Go to list</a>
           </div>
        </div>
    </div>
</div>



@endsection