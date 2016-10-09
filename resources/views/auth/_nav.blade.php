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