@extends('main')
@section('title', '| Student')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        {{ Form::open(array('route' => 'students.store', 'method' => 'POST', 'files'=>'true')) }}

        {{ Form::label('Fname', 'First Name') }}
        {{ Form::text('Fname', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

        {{ Form::label('Mname', 'Middle Name') }}
        {{ Form::text('Mname', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

        {{ Form::label('Lname', 'Last Name') }}
        {{ Form::text('Lname', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

        {{ Form::label('date_of_birth', 'Date of Birth') }}
        {{ Form::date('date_of_birth', null, array('class' => 'form-control', 'style'=>'border:2px solid green;')) }}

          {{ Form::label('featured_image', 'Upload Featured Image')}}
           {{ Form::file('featured_image')}}

           
          {{ Form::label('Department_id', 'Department id')}}
          <select class="form-control" name="Department_id">
            @foreach($departments as $department)
            <option value="{{$department->Department_id}}">{{ $department->Name}}</option>
            @endforeach
          </select>


        {{ Form::submit('Create New Student', ['class' => 'btn btn-success btn-lg btn-block', 'style'=>'border:2px solid green;margin-top:10px;']) }}
        
        {{ Form::close() }}
    </div>
</div>
@endsection