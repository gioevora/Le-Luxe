<title>Le Luxe | Services</title>
@include('Layout.home.header')


<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Navigation Bar Starts here -->

    @include('Layout.home.navbar')
    <!-- Navigation Bar ends here -->

    <main class="our-services">
        <section class="services-section spad">
            <div class="container-fluid">
                <div class="section-title">
                    <span>What We Offer</span>
                    <h2>Discover Our Services</h2>
                </div>
                <div class="service-searchbar">
                    <div class="input-group">
                        <input type="text" class="search-field" placeholder="Le Luxe Sifniture Facial..">
                    </div>


                </div>
                <div class="service-tab">
                    <button class="tablinks" onclick="serviceTabs(event, '')" id="defaultButton"><img src="/Assets/icons/select-all.png" alt="">All</button>
                    <button class="tablinks " onclick="serviceTabs(event, 'Facial')"><img src="/Assets/icons/facial-treatment.png" alt="">Facial</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Waxing')"><img src="/Assets/icons/waxing.png" alt="">Waxing</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Nail')"><img src="/Assets/icons/manicure.png" alt="">Nail Care</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Hair')"><img src="/Assets/icons/woman-hair.png" alt="">Hair</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Laser')"><img src="/Assets/icons/laser.png" alt="">Laser</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Slimming')"><img src="/Assets/icons/weight-loss.png" alt="">Slimming</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'others')"><img src="/Assets/icons/addon.png" alt="">Adds on</button>
                </div>

                <div id="Facial" class="tabcontent">
                    <div class="service-header">
                        <h3>Facial Treatment</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Basic Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 599.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Deep Cleansing Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 999.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Diamond Peel Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1299.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Acne Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1199.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Whithening Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1299.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Collagen Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1299.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">24k Gold Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1499.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Le Luxe Signiture Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 3500.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Vampire Facial <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1499.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Korean BB Glow <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 200.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Pimple Inject Per Acne <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 1499.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Eyebag Treatment <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="Waxing" class="tabcontent">
                    <div class="service-header">
                        <h2>Waxing</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 699.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 799.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Arms </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 899.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 949.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Back </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 599.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 699.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Chest </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 499.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 599.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Face </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 1, 99.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 1, 399.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Full Legs </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 699.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 799.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Half Legs </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 249.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 349.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Lower Lip </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 249.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 350.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Upper Lip </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 249.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 349.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Unederarm </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; 249.00 / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369; 299.00 / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Eyebrow </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Nail" class="tabcontent">
                    <div class="service-header">
                        <h2>Nails</h2>
                    </div>

                    <div class="nail-solo">
                        <div class="row">
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 250.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Manicure <small>inclusion: none</small> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 3200.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Pedicure <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 430.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Gel Manicure <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 480.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Gel Pedicure <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 200.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Gel Removal <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 300.00 / <small>session </small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Change Gel Polish <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1, 399.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title ">
                                                <span class="badge">Softgel Extension <small>w/ Gel Polish</small> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1, 699.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Polygel Extension <small>w/ Gel Polish</small> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1899.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Acrylic Extension <small>inclusion: w/ Gel Polish</small> </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 300.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Handspa <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 380.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Footspa <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 480.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Deluxe Footspa <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 320.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Hand Parafin Wax <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 430.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Foot Parafin Wax <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 250.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Foot Massage 1/2hr <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 400.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Foot Massage 1hr <small>inclusion: none</small></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="package-divider">


                        <div class="row">
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 999.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="inclusion px-2 mb-2">
                                                <ul>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Manicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Pedicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> De Luxe Footspa</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Massage</li>
                                                    <li><i class="fa-solid fa-check px-1 text-white"></i></li>

                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Package A </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1, 199.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="inclusion px-2">
                                                <ul>
                                                    <li><i class="fa-solid fa-check px-1"></i> Gel Manicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Pedicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> DeLuxe Footspa</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Massage</li>
                                                    <li><i class="fa-solid fa-check px-1 text-white"></i></li>

                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Package B </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1, 250.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="inclusion px-2 ">
                                                <ul>
                                                    <li><i class="fa-solid fa-check px-1"></i> Gel Manicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Pedicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Footspa</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Parafin</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Massage</li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Package C </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1, 499.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="inclusion px-2">
                                                <ul>
                                                    <li><i class="fa-solid fa-check px-1"></i> Gel Manicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Gel Pedicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> De Luxe Footspa</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Parafin</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Massage</li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Package D </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; 1, 699.00 / <small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="inclusion px-2">
                                                <ul>
                                                    <li><i class="fa-solid fa-check px-1"></i> Gel Manicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Pedicure</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Regular Footspa</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Hand Parafin</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Parafin</li>
                                                    <li><i class="fa-solid fa-check px-1"></i> Foot Massage</li>

                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge">Package E </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Hair" class="tabcontent">
                    <div class="service-header mb-2">
                        <h2>Hair Removal</h2>
                        <small>Diode Laser Treatment</small>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Upper Lip <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Lower Lip <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Underarm <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Brazillian <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">beard <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">full legs <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">lower legs <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">full arms <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">lower arms<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">boyzillian <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">chest <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Laser" class="tabcontent">
                    <div class="service-header">
                        <h2>PICO LASER GLOW</h2>
                        <!-- <small>(Price starts at 2x2 inc)</small> -->
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,499.00<small></small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Tatto Removal <small>(Price starts at 2x2 inc)</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="service-header">
                        <small>MICRONEEDING</small>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;2,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">face <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;3,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">body <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="service-header">
                        <small>CARBON LASER</small>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,499.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">face <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,499.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">UNDERARM<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;2,199.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">INNER THIGH<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;2,199.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">INNER BUTT<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,699.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">ELBOW<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,899.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">KNEE<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <hr>
                    <div class="service-header">
                        <small>PICO GLOW</small>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,599.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">face <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,599.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">UNDERARM<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;2,299.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">INNER THIGH<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;2,299.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">INNER BUTT<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,799.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">ELBOW<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">KNEE<small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="Slimming" class="tabcontent">
                    <div class="service-header">
                        <h2>Slimming Treatment</h2>
                        <hr>
                        <small>EMSCULPT</small>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">ARMS <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">TUMMY <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">BUTT <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="service-header">
                        <small>EXILIS</small>

                    </div>
                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,599.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">face and neck <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">tummy <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">arms <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,999.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">legs <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="service-header">
                        <small>6 IN 1 RF</small>

                    </div>
                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;599.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">RF FACE <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;1,499.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">5 IN 1 TREATMENT <small>inclusion: RF, LIPO CAVI, LIPOLISIS, VACUUM</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="service-header">
                        <small>MESO LIPO - FAT MELTING INJECTION (FREE RF TREATMENT)</small>

                    </div>
                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;2,199.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">FACE <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;3,199.00/<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">BODY <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <hr>
                    <div class="col-md-3 px-0 ">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="service-price">
                                        <h4>&#8369;4,999.00/<small>session</small></h4>
                                    </div>
                                    <hr>
                                    <div class="service-title">
                                        <span class="badge">7D HIFU/VLIFT <small>inclusion: none</small></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div id="others" class="tabcontent">
                    <div class="service-header">
                        <h2>Adds on</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <div class="service-title">
                                            <span class="badge">Basic Facial </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>


    @include('layout.home.footer')

    <script>
        function serviceTabs(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";

            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }
            if (cityName === '') {
                // Display all tab contents
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "block";
                }
            } else {
                // Display specific tab content
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.classList.add("active");
            }
        }
        document.getElementById("defaultButton").click();
    </script>


    <!-- end Script -->
    @include('layout.home.end')



</body>

</html>