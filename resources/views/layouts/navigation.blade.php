<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <x-application-logo style="width:32px;height:32px;" class="me-2" />
            <span class="fw-bold">CRUD Sewa</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('dashboard') ? ' active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('penyewaans.*') ? ' active' : '' }}" href="{{ route('penyewaans.index') }}">Penyewaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('alats.*') ? ' active' : '' }}" href="{{ route('alats.index') }}">Alat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('customers.*') ? ' active' : '' }}" href="{{ route('customers.index') }}">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link{{ request()->routeIs('pembayarans.*') ? ' active' : '' }}" href="{{ route('pembayarans.index') }}">Pembayaran</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2">{{ Auth::user()->name }}</span>
                        <svg class="bi" width="20" height="20" fill="currentColor"><use xlink:href="#person-circle"/></svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
    <!-- Bootstrap Icons SVG (for user icon) -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display:none;">
        <symbol id="person-circle" fill="currentColor" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37c.387-.61 1.26-1.37 2.608-1.37.356 0 .717.07 1.06.2.347.13.682.2 1.06.2.378 0 .713-.07 1.06-.2.343-.13.704-.2 1.06-.2 1.348 0 2.221.76 2.608 1.37A7 7 0 0 0 8 1z"/>
        </symbol>
    </svg>
</nav>
