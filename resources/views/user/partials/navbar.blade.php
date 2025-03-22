<nav class="navbar navbar-expand-lg shadow-sm fixed-top">
    <div class="container-fluid px-3" id="navbar"
      data-aos="fade-down"
      data-aos-duration="500">
    <img src="{{ asset('img/assets/pawonada_logo.png') }}" style="width: 160px" alt="" data-aos="fade-right" data-aos-anchor="#navbar" data-aos-offset="20" data-aos-duration="500">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto nav-underline">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('user.dashboard') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('#about_us') ? 'active' : '' }}" href="#about_us">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('menu') ? 'active' : '' }}" href="{{ route('user.menu') }}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('#testimoni') ? 'active' : '' }}" href="#testimoni">Testimoni</a>
          </li>
        </ul>
      </div>
    </div>
</nav>