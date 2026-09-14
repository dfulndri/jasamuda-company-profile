<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-nexora fixed-top">
  <div class="container">
    <a class="navbar-brand navbar-brand-custom" href="{{ route('home') }}">Jasamuda<span>.</span></a>
    <button class="navbar-toggler navbar-toggler-custom" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-1 mt-3 mt-lg-0">
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('services*') ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('portfolio*') ? 'active' : '' }}" href="{{ route('portfolio') }}">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('blog*') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('pricing') ? 'active' : '' }}" href="{{ route('pricing') }}">Pricing</a></li>
        <li class="nav-item"><a class="nav-link nav2 {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <a href="{{ route('contact') }}" class="btn btn-primary btn-sm-custom w-100">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
