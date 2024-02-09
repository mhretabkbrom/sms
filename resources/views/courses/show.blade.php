@extends('main')
@section('title', 'Show All')
@section('content')

<div class="row">
<div class="col-md-12">
 <table class="table">

 <thead>
     <tr>
        <th>#</th>
        <th>Course Number</th>
        <th>Course Title</th>
        <th>C H</th>
        <th>Created At</th>
        <th>Last Update</th>
        <th>Action</th>
     </tr>
 </thead>
 <tbody>
   
    <tr>
       <td>{{ $course->Course_id}}</td>
       <td>{{ $course->cono}}</td>
       <td>{{ $course->costitle}}</td>
       <td>{{ $course->CH}}</td>
       <td>{{ $course->created_at}}</td>
       <td>{{ $course->updated_at}}</td>
       <td>

       <a href="{{ route('courses.edit', $course->Course_id)}}"  class="btn btn-primary">
        Edit</a>
        {{ Form::open(['route'=>['courses.destroy', $course->Course_id], 'method'=>'DELETE'])}}
        {{ Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        </td>
       {{ Form::close()}}
    </tr>
 </tbody>

 </table>   





</div>   
</div>


@endsection