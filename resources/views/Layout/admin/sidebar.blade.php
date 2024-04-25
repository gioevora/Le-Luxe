<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start bg-gradient-dark ms-3" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
            <img src="/Assets/icons/coffee-beans.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Coffee Shop</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('/dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('/dashboard') ? 'active' : '' }}" href="{{ route('contact.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Contact</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('/dashboard') ? 'active' : '' }}" href="{{ route('appointment.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">

                    </div>
                    <span class="nav-link-text ms-1">Appointment</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('/product') ? 'active' : '' }}" href="/product">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bag-shopping fa-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Product</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white {{ request()->is('services/*') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-bag-shopping fa-lg"></i>
                    </div>
                    <span class="nav-link-text ms-1">Services</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-gray {{ request()->is('services/*') ? 'active' : '' }}" href="{{ route('services.index') }}">Facial</a></li>
                    <li><a class="dropdown-item text-gray {{ request()->is('waxing/*') ? 'active' : '' }}" href="{{ route('waxing.index') }}">Waxing</a></li>
                    <li><a class="dropdown-item text-gray {{ request()->is('nails/*') ? 'active' : '' }}" href="{{ route('nails.index') }}">Nails</a></li>
                    <li><a class="dropdown-item text-gray {{ request()->is('hairs/*') ? 'active' : '' }}" href="{{ route('hairs.index') }}">Hair</a></li>
                </ul>

            </li>

        </ul>
    </div>
</aside>
