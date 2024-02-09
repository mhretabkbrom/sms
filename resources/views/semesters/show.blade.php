@extends('main')
@section('title', 'Show All')
@section('content')

<div class="row">
<div class="col-md-12">
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
    <tr>
       <td>{{ $semester->Semester_id}}</td>
       <td>{{ $semester->semeName}}</td>
       <td>{{ $semester->year}}</td>
       <td>{{ $semester->created_at}}</td>
       <td>{{ $semester->updated_at}}</td>
       <td>
       <a href="{{ route('semesters.edit', $semester->Semester_id)}}"  class="btn btn-primary">
        Edit</a>
        {{ Form::open(['route'=>['semesters.destroy', $semester->Semester_id], 'method'=>'DELETE'])}}
        {{ Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        </td>
       {{ Form::close()}}
    </tr>
 </tbody>

 </table>   





</div>   
</div>


@endsection