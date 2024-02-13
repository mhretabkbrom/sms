<nav class="navbar navbar-default text">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if(Auth::guard('web')->user())
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li class="text-one"><a href="/">Home</a></li>
        <li  class="text-one"><a href="/about">About</a></li>
        <li  class="text-one"><a href="/contact">Contact</a></li>
        <li  class="text-one"><a href="{{route('faculties.index')}}">Faculties</a></li>
        <li class="text-one"><a href="{{route('departments.index')}}">Departments</a></li>
        <li class="text-one"><a href="{{route('students.index')}}">Students</a></li>
        <li class="text-one"><a href="{{route('semesters.index')}}">Semesters </a></li>
        <li class="text-one"><a href="{{route('courses.index')}}">Courses </a></li>
        <li class="text-one"><a href="{{route('grades.index')}}">Grades </a></li>
      </ul>
      
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>

            <li><a href="#">Separated link</a></li>
            <li>
              <div class="col-md-12">
                <center>
                  <a class="btn btn-warning btn-flat btn-block" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span>
                    Sign Out
                    </span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }} 
                  </form>
                </center>
              </div>
            </li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="nav navbar-nav">
        <li class="text-one"><a href="{{route('login')}}">Login</a></li>
        <li  class="text-one"><a href="{{url('/auth/register')}}">Register</a></li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
