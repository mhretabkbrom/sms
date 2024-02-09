@extends('main')
@section('title', '|Semester Create')
@section('content')
<div class="row">
<div class="col-md-12">
  {{ Form::open(array('route'=>'semesters.store', 'method'=>'POST'))}}
  {{ Form::label('semeName', 'Semester Name')}}
  {{ Form::text('semeName', null,['class'=>'form-control'])}}


  {{ Form::label('year', 'Year')}}
  {{ Form::number('year', null,['class'=>'form-control'])}}
  {{ Form::submit('Create New Semester', ['class'=>'btn btn-success btn-lg btn-block'])}}
  {{ Form::close()}}

</div>
</div>


@endsection