<nav id="navbar" class="navbar">
        <ul>
        <li><a href="{{ route('home') }}" class="active">Home</a></li>
          <li><a href="{{ route('about.me') }}">About Me</a></li>
          <li><a href="{{ route('projects') }}">Projects</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="{{ url('https://twitter.com') }}" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="{{ url('https://www.facebook.com/w3reza') }}" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="{{ url('https://www.instagram.com/') }}" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="{{ url('https://www.linkedin.com/in/w3reza') }}" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->