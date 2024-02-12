@extends('main')

@section('title', 'Show All')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h1>Grade Details</h1>

    <table class="table">
    @if ($grade->student)
    <tr>
      <td><p><strong>First Name </strong>:</p></td>
      <td><p>{{$grade->student->Fname }}</p></td>
    </tr>
    <tr>
      <td><p><strong>Middle Name </strong>:</p></td>
      <td><p>{{$grade->student->Mname }}</p></td>
    </tr>
    <tr>
      <td><p><strong>Last Name </strong>:</p></td>
      <td><p>{{$grade->student->Lname }}</p></td>
    </tr>
    <tr>
      <td><p><strong>Email </strong>:</p></td>
      <td><p>{{$grade->student->email }}</p></td>
    </tr>
    <tr>
      <td><p><strong>Date Of Birth </strong>:</p></td>
      <td><p>{{$grade->student->date_of_birth }}</p></td>
    </tr>
    @if($grade->student->Department)
    <tr>
      <td><p><strong>Department </strong>:</p></td>
      <td><p>{{$grade->student->Department->Name }}</p></td>
    </tr>
    @endif
    @endif


    @if ($grade->course)
    <tr>
      <td><p><strong>Course Number </strong>:</p></td>
      <td><p>{{$grade->course->cono }}</p></td>
    </tr>
    <tr>
      <td><p><strong>Course Title </strong>:</p></td>
      <td><p>{{$grade->course->costitle }}</p></td>
    </tr>
    <tr>
      <td><p><strong>Cradit hour </strong>:</p></td>
      <td><p>{{$grade->course->CH }}</p></td>
    </tr>
     @endif

     @if($grade->semester)
     <tr>
       <td><p><strong>Semester Name </strong>:</p></td>
       <td><p>{{$grade->semester->semeName }}</p></td>
     </tr>
     <tr>
       <td><p><strong>Year </strong>:</p></td>
       <td><p>{{$grade->semester->year }}</p></td>
     </tr>
     @endif
     <tr>
      <td><p><strong>Mark </strong>:</p></td>
      <td><p>{{$grade->Mark }}</p></td>
    </tr>
    </table>
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