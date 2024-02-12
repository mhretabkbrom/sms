@extends('main')
@section('title', '|All Students')
@section('content')

<div class="row">
<div class="col-md-12">

<hr>
</div>
</div>

<div class="row">
<div class="col-md-10">
    <hr>
</div>
<div class="col-md-2">
<a href="{{route('students.create')}}" class="btn btn-success btn-md btn-block" style="font-size:10px">Register New Student</a>
</div>
<div class="col-md-12">
<hr>
</div>
</div>


<div class="row">
<div class="col-md-12">
<table class="table">
<thead>
 <tr>
    <th>#</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Date Of birth</th>
    <th>Department Name</th>
    <th>Created At</th>
    <th>Last updated </th>
    <th>Action</th>
 </tr>
</thead>
<tbody>
    @foreach($students as $student)
  <tr>
  <th>{{ $student->student_id}}</th>
  <td>{{ substr( strip_tags($student->Fname), 0, 15) }}{{ strlen( strip_tags($student->Fname)) > 15 ? "...":"." }}</td>
  <td>{{ substr( strip_tags($student->Mname), 0, 15) }}{{ strlen( strip_tags($student->Mname)) > 15 ? "...":"." }}</td>
  <td>{{ substr( strip_tags($student->Lname), 0, 15) }}{{ strlen( strip_tags($student->Lname)) > 15 ? "...":"." }}</td>
  <td>{{ substr( strip_tags($student->email), 0, 15) }}{{ strlen( strip_tags($student->email)) > 15 ? "...":"." }}</td>
  <td>{{ substr( strip_tags($student->date_of_birth), 0, 15) }}{{ strlen( strip_tags($student->date_of_birth)) > 15 ? "...":"." }}</td>
  <td>{{ substr( strip_tags($student->department->Name), 0, 15) }}{{ strlen( strip_tags($student->department->Name)) > 15 ? "...":"." }}</td>
  <td>{{  date('M Y:j h:ia', strtotime($student->created_at)) }}</td>
  <td>{{  date('M Y:j h:ia',   strtotime($student->updated_at)) }}</td>
   <td><a href="{{ route('students.show', $student->student_id)}}" class="btn btn-default btn-sm">View</a><a href="{{ route('students.edit', $student->student_id)}}"  class="btn btn-default btn-sm" >Edit</a></td>

  </tr>
@endforeach
</tbody>

</table>

<p class="text-center">{{ $students->links()}}</p>
</div>
</div>




@endsection
