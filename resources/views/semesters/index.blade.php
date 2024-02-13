@extends('main')
@section('title', '|Semester all')
@section('content')
 
<div class="row">
<div class="col-md-10">
</div>
<div class="col-md-2">
    <a href="{{route('semesters.create')}}" class="btn btn-success btn-md">Create New Semester</a>
</div>
</div>



<div class="row">
<div class="col-md-10">
<table class="table">
    <thead>
        <tr>
           <th>#</th>
           <th>Semester Name</th>
           <th>Year</th>
           <th>Created At</th>
           <th>Last Update</th>
           <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semesters as $semester)
        <tr>
        <th>{{ $semester->Semester_id}}</th>
         <td>{{ $semester->semeName}}</td>
         <td>{{ $semester->year}}</td>
         <td>{{ $semester->created_at }}</td>
         <td>{{ $semester->updated_at }}</td>
         <td><a href="{{route('semesters.show', $semester->Semester_id)}}" class="btn btn-default">View</a>
         <a  href="{{route('semesters.edit', $semester->Semester_id)}}"  class="btn btn-default">Edit</a></td>
</tr>
    @endforeach
    </tbody>

</table>



</div>   
</div>





@endsection