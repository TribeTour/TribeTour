<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">Tribe Tour</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('event_wall') }}">Event Wall</a></li>
        <li><a href="{{ route('story') }}">Story</a></li>
      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">



      @if (Auth::check())

      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, {{ Auth::user()->name }} <span class="caret"></span></a>
  <ul class="dropdown-menu">

          @if(Auth::user()->hasRole('User'))

            <li><a href="{{ route('students.profile') }}">Student - Profile</a></li>
            <li><a href="{{ route('students.joined_tour') }}">Student - Joined Tour</a></li>
            <li><a href="{{ route('students.mystory') }}">Student - My Story</a></li>
            <li><a href="{{ route('students.my_noticeboard') }}">Student - My Notice Wall</a></li>

            @elseif (Auth::user()->hasRole('Tour Guide'))

             <li><a href="{{ route('TourGuide.profile') }}">Tour Guide - Profile</a></li>
            <li><a href="{{ route('TourGuide.joined_tour') }}">Tour Guide - Joined Tour</a></li>
            <li><a href="{{ route('TourGuide.mystory') }}">Tour Guide - My Story</a></li>
            <li><a href="{{ route('TourGuide.my_noticeboard') }}">Tour Guide - My Notice Wall</a></li>

            @endif
  </ul>
</li>
      <li>
         <form role="form" method="POST" action="{{ url('/logout') }}">
        {{ csrf_field() }}
        <button type="submit" class="logout_btn">Logout</button>
        </form>
</li>
      
      @else
       <li><a href="{{ route('login') }}">Login</a></li>
       <li><a href="{{ url('/register') }}">Register</a></li>
      @endif
       
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>