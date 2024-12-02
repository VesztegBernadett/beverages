<nav class="navbar navbar-expand-lg bg-success mb-2">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="{{ route('home') }}">Üdítők</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-white {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Főoldal</a>
          <a class="nav-link text-white {{ request()->routeIs('beverages.packaging') && request()->route('packaging') == 'műanyag' ? 'active' : '' }}" href="{{ route('beverages.packaging', ['packaging' => 'műanyag']) }}">Műanyag</a>
          <a class="nav-link text-white {{ request()->routeIs('beverages.packaging') && request()->route('packaging') == 'fém' ? 'active' : '' }}" href="{{ route('beverages.packaging', ['packaging' => 'fém']) }}">Fém</a>
          <a class="nav-link text-white {{ request()->routeIs('beverages.packaging') && request()->route('packaging') == 'üveg' ? 'active' : '' }}" href="{{ route('beverages.packaging', ['packaging' => 'üveg']) }}">Üveg</a>
          <a class="nav-link text-white {{ request()->routeIs('beverages.packaging') && request()->route('packaging') == 'papír' ? 'active' : '' }}" href="{{ route('beverages.packaging', ['packaging' => 'papír']) }}">Papír</a>
        </div>
      </div>
    </div>
  </nav>