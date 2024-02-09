@extends('main')
@section('title', 'TitlePages')
@section('content')

<div class="row">
 <div class="col-md-8 col-md col-md-offset-2" style="border:2px solid green;">
 <h1>Contact Me</1>
<hr style="border:2px solid green;">
 <form>
  <div class="form-group">
    <label id="email">Email</label>
    <input id="email" name="Email" class="form-control"  style="border:2px solid green;">
</div>
<div class="form-group" >
    <label id="subject">subject</label>
    <input id="subject" name="subject" class="form-control"  style="border:2px solid green;">
</div>
<div class="form-group">
    <label id="message">Messages</label>
    <textarea  type="message" name="Message" class="form-control" style="border:2px solid green;">Right Here Messages</textarea>
    <input type="submit" value="Send Messages" class="btn success btn-block btn-lg btn-success" style="margin-top:20px;border:2px solid green;color:black;">
</div>
 </form>



</div>   
</div>


@endsection