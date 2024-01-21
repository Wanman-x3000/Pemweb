<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <a href="/" class="d-flex align-items-center text-white text-decoration-none">
        <!-- Logo -->
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <!-- Menu Links -->
        <li><a href="{{ route('home.index') }}" class="nav-link px-2 text-white">Beranda</a></li>
        <li><a href="{{ route('home.popular') }}" class="nav-link px-2 text-white">Populer</a></li>
        <li><a href="{{ route('home.gallery') }}" class="nav-link px-2 text-white">Galeri</a></li>
        <li><a href="{{ route('home.faq') }}" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="{{ route('home.about') }}" class="nav-link px-2 text-white">Tentang</a></li>
      </ul>

      @auth
        <!-- User Information & Logout Button -->
        <div class="text-end">
          {{ auth()->user()->name }}
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light ms-2">Logout</a>
        </div>
      @endauth

      @guest
        <!-- Login & Sign-up Buttons -->
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>
