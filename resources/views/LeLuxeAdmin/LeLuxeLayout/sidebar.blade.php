<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="/Assets/images/leluxxe-logo.png" alt="" style="width: 50px;">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2" style="background:linear-gradient(to bottom, #B38A54, #DAA06B, #8C5A31, #6d492c);-webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">Le Luxe</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul id="menu-inner" class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('Naujan-Development-Cooperrative/Dashboard') ? 'active' : '' }}">
            <a href="/Naujan-Development-Cooperrative/Dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('LeLuxe/Appointment') ? 'active' : '' }}">
            <a href="/LeLuxe/Appointment" class="menu-link">
                <i class="menu-icon bx bx-calendar"></i>
                <div data-i18n="Account Settings">Appointment</div>
            </a>
        </li>

        @php
            if(request()->is('LeLuxe/Appointment'))
            {
                $isActiveParent = request()->is('LeLuxe/Facial');
            }
            elseif(request()->is('LeLuxe/Facial')){
                $isActiveParent = request()->is('LeLuxe/Facial');
            }
            elseif(request()->is('LeLuxe/Waxing')){
                $isActiveParent = request()->is('LeLuxe/Waxing');
            } 
            elseif(request()->is('LeLuxe/Nails')){
                $isActiveParent = request()->is('LeLuxe/Nails');
            } 
            elseif(request()->is('LeLuxe/Hair')){
                $isActiveParent = request()->is('LeLuxe/Hair');
            } 
            elseif(request()->is('LeLuxe/Laser')){
                $isActiveParent = request()->is('LeLuxe/Laser');
            } 
            elseif(request()->is('LeLuxe/Slimming')){
                $isActiveParent = request()->is('LeLuxe/Slimming');
            } 
            else{
                $isActiveParent = "";
            }          
        @endphp

        <li class="menu-item {{ $isActiveParent ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-list-ul"></i>
                <div data-i18n="Layouts">Services</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->is('LeLuxe/Facial') ? 'active' : '' }}">
                    <a href="/LeLuxe/Facial" class="menu-link">
                        <div data-i18n="Without menu">Facial</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('LeLuxe/Waxing') ? 'active' : '' }}">
                    <a href="/LeLuxe/Waxing" class="menu-link">
                        <div data-i18n="Without navbar">Waxing</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('LeLuxe/Nails') ? 'active' : '' }}">
                    <a href="/LeLuxe/Nails" class="menu-link">
                        <div data-i18n="Container">Nail Care</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('LeLuxe/Hair') ? 'active' : '' }}">
                    <a href="/LeLuxe/Hair" class="menu-link">
                        <div data-i18n="Fluid">Hair</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('LeLuxe/Laser') ? 'active' : '' }}">
                    <a href="/LeLuxe/Laser" class="menu-link">
                        <div data-i18n="Blank">Laser</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('LeLuxe/Slimming') ? 'active' : '' }}">
                    <a href="/LeLuxe/Slimming" class="menu-link">
                        <div data-i18n="Blank">Slimming</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ request()->is('LeLuxe/Contacts') ? 'active' : '' }}">
            <a href="/LeLuxe/Contacts" class="menu-link">
                <i class="menu-icon bx bx-share-alt"></i>
                <div data-i18n="Account Settings">Contact</div>
            </a>

        </li>

        <li class="menu-item {{ request()->is('LeLuxe/Galleries') ? 'active' : '' }}">
            <a href="/LeLuxe/Galleries" class="menu-link">
                <i class="menu-icon bx bx-time"></i>
                <div data-i18n="Account Settings">Gallery</div>
            </a>

        </li>
        <li class="menu-item {{ request()->is('LeLuxe/Testimonials') ? 'active' : '' }}">
            <a href="/LeLuxe/Testimonials" class="menu-link">
                <i class="menu-icon bx bx-credit-card-front"></i>
                <div data-i18n="Account Settings">Testimonial</div>
            </a>

        </li>



    </ul>
</aside>