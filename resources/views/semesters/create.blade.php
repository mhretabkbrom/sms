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
  {{ Form::submit('Create New Semester', ['class'=>'btn btn-success btn-lg btn-block', 'style' => 'margin-top:10px;margin-bottom:10px;border:2px solid green;'])}}
  {{ Form::close()}}
  <div class="row">
      <div class="col-md-4 ">   
          <a href="{{route('semesters.index')}}" class="btn btn-primary btn-block"> Go to list</a>
     </div>
  </div>

</div>
</div>


@endsection