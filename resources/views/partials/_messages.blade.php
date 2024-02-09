@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="background-color:green;color:black;font-size:20px;">
    <storng>Success:</strong>{!! Session::get('success')!!}
</div>
@endif



@if(Session::has('successs'))
<div class="alert alert-danger" role="alert" style="background-color:red;color:black;font-size:20px;">
    <storng>Success:</strong>{!! Session::get('successs')!!}
</div>
@endif


