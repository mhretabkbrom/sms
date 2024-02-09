@extends('main')

@section('title', 'Show All')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h1>Show All</h1>

    @if ($grade->student)
    <p><strong>First Name </strong>:{{$grade->student->Fname }}</p>
    <p><strong>Middle Name </strong>:{{$grade->student->Mname }}</p>
    <p><strong>Last Name </strong>:{{$grade->student->Lname }}</p>
    <p><strong>Email</strong>:{{$grade->student->email }}</p>
    <p><strong>Date Of Birth </strong>:{{$grade->student->date_of_birth }}</p>
    <p><strong>Department id </strong>:{{$grade->student->Department_id}}</p>
    @endif


    @if ($grade->course)
    <p><strong>Course Number</strong>:{{$grade->course->cono }}</p>
    <p><strong>Course Title</strong>:{{$grade->course->costitle }}</p>
    <p><strong>Cradit hour</strong>:{{$grade->course->CH }}</p>
     @endif

     @if($grade->semester)
     <p><strong>Semester Name</strong>:{{$grade->semester->semeName }}</p>
     <p><strong>Year</strong>:{{$grade->semester->year }}</p>

     @endif

     <h5><strong>Mark</strong>:{{$grade->Mark}}</h5>
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
   <a href="{{route('grades.edit', $grade->Grade_id)}}" class="btn btn-primary btn-lg btn-block">Edit</a>
    </div>
    <div class="col-sm-6">
      {{ Form::open(['route'=>['grades.destroy',  $grade->Grade_id], 'method'=>'DELETE'])}}
      {{ Form::submit('Delete',['class'=>'btn btn-danger btn-lg btn-block'])}}
      {{ Form::close()}}
    </div>

    </div>


</div>
</div>  



</div>
@endsection