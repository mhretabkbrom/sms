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
  {{ Form::submit('Create New  Courses', ['class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top:10px;margin-bottom:10px;'])}}
  {{ Form::close()}}
  <div class="row">
    <div class="col-md-4 ">   
        <a href="{{route('courses.index')}}" class="btn btn-primary btn-block"> Back</a>
   </div>
</div>
</div>
</div>


@endsection