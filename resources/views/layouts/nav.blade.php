<nav class="navbar navbar-expand-lg">
	<a class="navbar-brand" href="#"> <img src="/NTI/logotyper/purelogosvart.png" alt="logo"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="/blogs">Blog list</a></li>
          <li class="nav-item"><a class="nav-link" href="/info">Info</a>
            
          </li>
        </ul>
        
        
        <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
              @auth
                <li> <a class="btn btn-gold" href="{{ url('/home') }}">Home</a> </li>
            @else
              <li> <a class="btn btn-gold" href="{{ route('login') }}">Login</a></li>
            @if (Route::has('register'))
			  <li><a class="btn btn-gold" href="{{ route('register') }}">Register</a></li>
            @endif
          @endauth
        @endif
        </ul>
    </div>
  </nav>