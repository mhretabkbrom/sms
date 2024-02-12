@extends('main')
@section('title', '|Semester all')
@section('content')
 
<div class="row">
<div class="col-md-10">
</div>
<div class="col-md-2">
    <a href="{{route('courses.create')}}" class="btn btn-success btn-md btn-block" style="font-size:10px">Create New Course</a>
</div>
</div>



<div class="row">
<div class="col-md-10">
<table class="table">
    <thead>
        <tr>
           <th>#</th>
           <th>Courses Number</th>
           <th>Course Title</th>
           <th>C H</th>
           <th>Created At</th>
           <th>Last Update</th>
           <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses  as $course)
        <tr>
        <th>{{ $course->Course_id}}</th>
         <td>{{ $course->cono}}</td>
         <td>{{ $course->costitle}}</td>
         <td>{{ $course->CH}}</td>

         <td>{{ $course->created_at }}</td>
         <td>{{ $course->updated_at }}</td>
         <td><a href="{{route('courses.show', $course->Course_id)}}" class="btn btn-default">View</a>
         <a  href="{{route('courses.edit', $course->Course_id)}}"  class="btn btn-default">Edit</a></td>
</tr>
    @endforeach
    </tbody>

</table>



</div>   
</div>





@endsection