@extends('main')
@section('title', '|All Department')
@section('content')
 <div class="row">
 <div class="col-md-10">
 <hr style="border :50px solid green;">
 </div>
 <div class="col-md-2">
 <a href="{{route('departments.create')}}" class="btn btn-success btn-lg btn-block"
  style="margin-top:20px;font-size:10px;color:white;border:
  2px solid green;min-height:20vh;background-color:black;align-item:center;display:flex;">
  Create New Department</a>
 </div>  
<div class="col-md-12">
  <hr style="border :50px solid black;">
 </div>
 </div>

 <div class="row">
<div class="col-md-12">
<table class="table">
 <thead>
  <tr>
    <th>#</th>
    <th>DepartmentName</th>
    <th>FacultyName</th>
    <th>Create At</th>
    <th>Last Update</th>
    <th>Action</th>
  </tr>
 </thead>
<tbody>
@foreach($departments as $department)
    <tr>
        <th>{{$department->Department_id}}</th>
        <td>{{ substr($department->Name,0,20)}}{{ strlen($department->Name) > 20 ? "...":""}}</td>
        <td>{{ $department->faculty->FacultyName}}</td>
        <td>{{ date('M Y, j h :ia', strtotime($department->created_at))}}</td>
        <td>{{ date('M Y, j h :ia', strtotime($department->updated_at))}}</td>
        <td><a href="{{ route('departments.show', $department->Department_id) }}" class="btn btn-default btn-sm">View</a>
        <a href="{{route('departments.edit', $department->Department_id) }}"  class="btn btn-default btn-sm">Edit</a></td>
    </tr>
@endforeach

</tbody>


</table>

</div>
 </div>




@endsection
