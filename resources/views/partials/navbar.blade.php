<nav id="navbar" class="navbar bg-light navbar-expand-lg fw-bold shadow-sm sticky-sm-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="img/logo/abs.png" alt="" width="90">
        <span class="text-header">PT. ANUGERAH BUMI SAMUDRA</span>
      </a>
      <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-2">
              <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">@lang('navbar.home')</a>
            </li>
            <li class="nav-item mx-2">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">@lang('navbar.about')</a>
        </li>
        <li class="nav-item mx-2 dropdown">
            <a class="nav-link {{ ($title === "Product") ? 'active' : '' }}" href="/others">
              @lang('navbar.product')
            </a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/contact">@lang('navbar.contact')</a>
              </li>
              <li class="nav-item mx-2 dropdown">
                  <a class="nav-link {{ ($title === "Product") ? 'active' : '' }} dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ strtoupper(session('locale') ?? config('app.locale')) }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/switch/id') }}">ID</a></li>
                        <li><a class="dropdown-item" href="{{ url('/switch/en') }}">EN</a></li>
                      </ul>
                  </li>
        </ul>
    </div>
</div>
</nav>