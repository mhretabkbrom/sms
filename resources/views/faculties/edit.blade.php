@extends('main')
@section('title', 'FacultyName')
@section('content')


<div class="row">
    {{ Form::model($faculty, ['route'=>['faculties.update', $faculty->Faculty_id], 'method'=>'PUT'])}}
<div class="col-md-8">
    
{{  Form::label('FacultyName', 'FacultyName')}}
{{ Form::text('FacultyName', null,['class'=>'form-control', 'style'=>'border:2px solid green']) }}

</div> 
<div class="col-md-4">
 <div class="well">
<dl class="dl-horizontal">
  <dt>Created At</dt>
  <dd>{{date('M Y,J H:ia', strtotime($faculty->created_at))}}</dd>  
</dl>

<dl class="dl-horizontal">
  <dt>Last Update</dt>
  <dd>{{date('M Y,J H:ia', strtotime($faculty->updated_at))}}</dd>  
</dl
<hr style="border:2px solid green;">

 <div class="row">
 <div class="col-sm-6">
    {!! Html::linkRoute('faculties.index', 'Cancel', array($faculty->Faculty_id), array('class'=>'btn btn-danger btn-lg btn-block'))!!}
      <!--  <p><a href="#" class="btn btn-primary btn-lg btn-block">Edit</a></p>-->
    </div>

   
    <div class="col-sm-6">
   <!-- {!! Html::linkRoute('faculties.update', 'SaveChanges', array($faculty->Faculty_id), 
    array('class'=>'btn btn-success btn-lg btn-block'))!!}---->
      <!--  <p><a href="#" class="btn btn-danger btn-lg btn-block">Edit</a></p>---->
      {{ Form::submit('SaveChanges', ['class'=>'btn btn-success btn-lg btn-block'])}}
    </div>

  </div>  
  </div>   

</div>

{{ Form::close()}}
</div>




@endsection