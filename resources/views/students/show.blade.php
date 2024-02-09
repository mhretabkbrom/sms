@extends('main')
@section('content')
<div class="row">
<div class="col-md-8">
    <img src="{{ asset('images/'. $student->image)}}" height="200" width="400">

<p><strong>First Name:</strong>{{ $student->Fname}}</p>
 <p><strong>Middle Name:</strong>{{ $student->Mname}}</p>
 <p><strong>Last Name:</strong>{{ $student->Lname}}</p>
 <p><strong>email:</strong>{{ $student->email}}</p>
 <p><strong>Date of birth:</strong>{{ $student->date_of_birth}}</p>

 <p><strong>Department Name:</strong>
 @if($student)
 {{ $student->department->Name}}</p>
@endif
</div> 


<div class="col-md-4">
<div class="well">
<dl class="dl-horizontal">
    <dt>Created At</dt>
    <dd>Time</dd>
</dl>

<dt>last Update</dt>
    <dd>Time</dd>
</dl>
<hr>
<div class="row">
<div class="col-sm-6">
<a href="{{ route('students.edit', $student->student_id)}}" class="btn btn-success btn-lg btn-block">Edit</a>
</div>



<div class="col-sm-6">
{{ Form::open(['route' => ['students.destroy', $student->student_id], 'method' => 'DELETE']) }}
{{ Form::submit('Delete', ['class' => 'btn btn-lg btn-danger btn-block']) }}
{{ Form::close() }}
</div>




</div>



</div>
</div>   
</div>

@endsection