@extends('main')
@section('title', '|Index')
@section('content')
<div class="row">
<div class="col-md-10 ">
  
<hr style="border :10px solid green;">

</div> 
<div class="row">
<div class="col-md-2">
<a href="{{route('faculties.create')}}" class=" class btn btn-success btn-lg btn-block" style="margin-top:10px; font-size:10px;">Create New FacultyName</a>    
</div>  
</div>

<div class="class-col-md-12 ">
<hr style="border :10px solid black;">

</div>
</div>


<div class="row">
<div class="col-md-12">
<table class="table">
  <thead>
   <tr>
       <th>#</th>
      <th>FacultyName</th>
      <th>Created At</th>
      <th>Last Update</th>
      <th>Action</th>
   </tr>    
  </thead>
  <tbody>
    @foreach($faculties as $faculty)
    <tr>
        <th>{{ $faculty->Faculty_id}}</th>
        <td>{{ substr( strip_tags($faculty->FacultyName), 0, 20)}}{{ strlen (strip_tags($faculty->FacultyName)) > 20 ? "...":""}}</td>
        <td>{{date('M Y , J h:ia', strtotime( $faculty->created_at))}}</td>
        <td>{{ date('M Y , J h:ia', strtotime($faculty->updated_at))}}</td>
        <td><a href="{{ route('faculties.show', $faculty->Faculty_id)}}" class="btn btn-default btn-lg">View</a>
        <a href="{{ route('faculties.edit', $faculty->Faculty_id)}}" class="btn btn-default btn-lg">Edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

<div class="row">
  <div class="col-md-12 col-md-offset-3">
    {{ $faculties->links()}}


  </div>


</div>


@endsection