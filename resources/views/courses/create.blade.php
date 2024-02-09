@extends('main')
@section('title', '|Semester Create')
@section('content')
<div class="row">
<div class="col-md-12">
  {{ Form::open(array('route'=>'courses.store', 'method'=>'POST'))}}
  {{ Form::label('cono', 'Courses Number')}}
  {{ Form::text('cono', null,['class'=>'form-control'])}}

  {{ Form::label('costitle', 'Courses Title')}}
  {{ Form::text('costitle', null,['class'=>'form-control'])}}

  {{ Form::label('CH', 'C H')}}
  {{ Form::number('CH', null,['class'=>'form-control'])}}
  {{ Form::submit('Create New  Courses', ['class'=>'btn btn-success btn-lg btn-block'])}}
  {{ Form::close()}}

</div>
</div>


@endsection