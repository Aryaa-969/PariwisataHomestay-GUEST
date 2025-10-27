<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h3 class="text-primary m-0">Pariwisata & Homestay</h3>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}"
                    class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">
                    Home
                </a>

                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>

                <a href="{{ route('service') }}"
                    class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                    Services
                </a>

                <a href="{{ route('package') }}"
                    class="nav-item nav-link {{ request()->routeIs('package') ? 'active' : '' }}">
                    Packages
                </a>

                <div
                    class="nav-item dropdown {{ request()->routeIs('booking.*') || request()->routeIs('warga.*') ? 'active' : '' }}">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">

                        <a href="{{ route('booking.create') }}"
                            class="dropdown-item {{ request()->routeIs('booking.create') ? 'active' : '' }}">
                            Booking
                        </a>

                        <a href="{{ route('booking.index') }}"
                            class="dropdown-item {{ request()->routeIs('booking.index') ? 'active' : '' }}">
                            My Booking
                        </a>

                        <a href="{{ route('warga.index') }}"
                            class="dropdown-item {{ request()->routeIs('warga.*') ? 'active' : '' }}">
                            Warga
                        </a>

                        <a href="{{ route('users.index') }}"
                            class="dropdown-item {{ request()->routeIs('user.*') ? 'active' : '' }}">
                            User
                        </a>

                        <a href="{{ route('404') }}"
                            class="dropdown-item {{ request()->routeIs('404') ? 'active' : '' }}">
                            404 Page
                        </a>
                    </div>
                </div>

                <a href="{{ route('contact') }}"
                    class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </div>
        </div>
        {{-- Tombol kanan --}}
        @if (session('user'))
            <div class="dropdown ms-3">
                <a href="#" class="btn btn-outline-primary rounded-pill dropdown-toggle"
                    data-bs-toggle="dropdown">
                    <i class="fa fa-user me-1"></i> {{ session('user')->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('booking.index') }}"><i
                                class="fa fa-calendar-check me-2"></i> My Bookings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger"><i class="fa fa-sign-out-alt me-2"></i>
                                Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        @else
            <a href="{{ route('users.create') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-3">Register</a>
        @endif
</div>
</nav>
</div>
