@extends('main')
@section('title', 'FacultyName')
@section('content')


<div class="row">
<div class="col-md-8">
    
    <h3>{!! $faculty->FacultyName !!}</h3>
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
    {!! Html::linkRoute('faculties.edit', 'Edit', array($faculty->Faculty_id), array('class'=>'btn btn-primary btn-lg btn-block'))!!}
      <!--  <p><a href="#" class="btn btn-primary btn-lg btn-block">Edit</a></p>-->
    </div>

   
    <div class="col-sm-6">
  {{ Form::open(['route'=>['faculties.destroy', $faculty->Faculty_id], 'method'=>'DELETE'])}}
<!--{!! Html::linkRoute('faculties.destroy', 'Delete', array($faculty->Faculty_id), array('class'=>'btn btn-danger btn-lg btn-block'))!!}--->
    
<!--  <p><a href="#" class="btn btn-danger btn-lg btn-block">Edit</a></p>-->
{{ Form::submit('Delete', ['class'=>'btn btn-danger btn-lg btn-block'])}}
{{ Form::close()}}
    </div>

  </div>  
  </div>   

</div>  
</div>




@endsection