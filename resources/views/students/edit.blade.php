@extends('main')
@section('content')
<div class="row">
    {{ Form::model($student, ['route'=>['students.update', $student->student_id], 'method'=>'PUT', 'files'=>true])}}
<div class="col-md-8">
{{ Form::text('Fname', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

{{ Form::label('Mname', 'Middle Name') }}
{{ Form::text('Mname', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

{{ Form::label('Lname', 'Last Name') }}
{{ Form::text('Lname', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

{{ Form::label('email', 'Email') }}
{{ Form::email('email', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

{{ Form::label('date_of_birth', 'Date of Birth') }}
{{ Form::date('date_of_birth', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}



{{ Form::label('featured_image', 'Update Featured Image')}}
{{ Form::file('featured_image')}}



{{ Form::label('Department_id', 'Department id') }}
<select class="form-control" name="Department_id">
  @foreach($departments as $department)
  <option value="{{ $department->Department_id }}">{{ $department->Name }}</option>
  @endforeach
</select>









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
<a href="{{ route('students.show', $student->student_id)}}" class="btn btn-danger btn-lg btn-block">Cancel</a>
</div>



<div class="col-sm-6">
    {{ Form::submit('SaveChaneges', ['class'=>'btn btn-success btn-lg btn-block'])}}
</div>




</div>



</div>
</div> 

{{ Form::close()}}
</div>

@endsection