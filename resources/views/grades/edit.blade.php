@extends('main')

@section('title', 'Show All')

@section('content')
<div class="row">
    {{ Form::model($grade,['route'=>['grades.update', $grade->Grade_id], 'method'=>'PUT'])}}
  <div class="col-md-8">


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

  </div>
  <div class="col-md-4">
<div class="well">
<dl class="del-horizontal">
  <dt>Created at</dt>
  <dd>{{$grade->created_at}}</dd> 
  <dl> 
  <dl class="del-horizontal">
  <dt>Updated At</dt>
  <dd>{{$grade->updated_at}}</dd> 

  <dl> 
    <hr>
    <div class="row">
    <div class="col-sm-6">
   <a href="{{route('grades.show', $grade->Grade_id)}}" class="btn btn-danger btn-lg btn-block">Cancel</a>
    </div>
    <div class="col-sm-6">
        {{ Form::submit('SaveChanges', ['class'=>'btn btn-success btn-lg btn-block'])}}
    </div>

    </div>


</div>
</div>  


{{ Form::close()}}
</div>
@endsection