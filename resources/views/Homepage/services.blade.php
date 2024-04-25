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
                    <button class="tablinks " onclick="serviceTabs(event, 'Facial')" id="defaultButton"><img src="/Assets/icons/select-all.png" alt="">All</button>
                    <button class="tablinks " onclick="serviceTabs(event, 'Facial')"><img src="/Assets/icons/facial-treatment.png" alt="">Facial</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Waxing')"><img src="/Assets/icons/waxing.png" alt="">Waxing</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Nail')"><img src="/Assets/icons/manicure.png" alt="">Nail Care</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Hair')"><img src="/Assets/icons/woman-hair.png" alt="">Hair</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Laser')"><img src="/Assets/icons/laser.png" alt="">Laser</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'Slim')"><img src="/Assets/icons/weight-loss.png" alt="">Slimming</button>
                    <button class="tablinks" onclick="serviceTabs(event, 'others')"><img src="/Assets/icons/addon.png" alt="">Adds on</button>
                </div>

                <div id="Facial" class="tabcontent">
                    <div class="service-header">
                        <h3>Facial Treatment</h3>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; 399.00 / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">Basic Facial </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> --}}
                           <div class="row">
                            @foreach($services as $service)
                        <div class="col-md-3 px-0">

                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; {{ $service->price }} / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">{{ $service->title }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    </div>
                </div>

                <div id="Waxing" class="tabcontent">
                    <div class="service-header">
                        <h2>Waxing</h2>
                    </div>

                    <div class="row">
                        @foreach($wax as $waxs)
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <div class="female-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
                                                </svg>
                                                <h4>&#8369; {{ $waxs->female_price }} / <small>session</small></h4>
                                            </div>

                                            <hr>
                                            <div class="male-price">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
                                                    <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
                                                </svg>
                                                <h4>&#8369;{{ $waxs->male_price }} / <small>session</small></h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge"> {{ $waxs->title }} </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
@endforeach
                    </div>
                </div>

                <div id="Nail" class="tabcontent">
                    <div class="service-header">
                        <h2>Nails</h2>
                    </div>


                    <div class="row">

                        @foreach($nails as $nail)
                        <div class="col-md-3 px-0 ">

                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; {{ $nail->price }} / <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="inclusion px-2">
                                            <ul>
                                                {{ $nail->service }}
                                            </ul>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">{{ $nail->title }}</span>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

@endforeach
                    </div>
                </div>
                <div id="Hair" class="tabcontent">
                    <div class="service-header mb-2">
                        <h2>Hair Removal</h2>
                        <small>Diode Laser Treatment</small>
                    </div>

                    <div class="row">
                        @foreach($hair as $hairs)
                        <div class="col-md-3 px-0 ">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369; {{ $hairs->price }}/ <small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">{{ $hairs->title }}<small>inclusion: none</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                    {{-- <div class="service-header">
                        <small>MICRONEEDING</small>
                    </div> --}}

                    <div class="row">
                        @foreach($lasers as $laser)
                        <div class="col-md-3 px-0 ">

                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-end">
                                        <span class="badge"></span>
                                        <span class="status-badge" style="background-color:
                                            @if ($laser->service === 'MicroNeedling')
                                                blue;
                                            @elseif ($laser->service === 'CarbonLaser')
                                                green;
                                            @elseif ($laser->service === 'PicoGlow')
                                                red;
                                            @endif;
                                            padding: 4px 8px;
                                            border-radius: 4px;
                                            color: white;">
                                            {{ $laser->service }}
                                        </span>
                                    </div>

                                    <div class="card-content">
                                        <div class="service-price">
                                            <h4>&#8369;{{ $laser->price }}<small>session</small></h4>
                                        </div>
                                        <hr>
                                        <div class="service-title">
                                            <span class="badge">{{ $laser->title }} <small>inclusion: none</small></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
                    <div id="Slim" class="tabcontent">
                        <div class="service-header">
                            <h2>Slimming Treatment</h2>
                            <hr>

                        </div>

                        <div class="row">
                            @foreach ($slim as $slims)
                            <div class="col-md-3 px-0 ">
                                <div class="card service-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <span class="status-badge" style="background-color:
                                                @if ($slims->service === 'EMSCULPT')
                                                    blue;
                                                @elseif ($slims->service === 'EXILIS')
                                                    green;
                                                @elseif ($slims->service === '6 IN 1 RF')
                                                    red;
                                                @elseif ($slims->service === 'MESO LIPO')
                                                    gray;
                                                @endif;
                                                padding: 4px 8px;
                                                border-radius: 4px;
                                                color: white;">
                                                {{ $slims->service }}
                                            </span>
                                        </div>
                                        <div class="card-content">
                                            <div class="service-price">
                                                <h4>&#8369; {{ $slims->price }}<small>session</small></h4>
                                            </div>
                                            <hr>
                                            <div class="service-title">
                                                <span class="badge"> {{ $slims->title }} <small>inclusion: none</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultButton").click();
    </script>

    <!-- end Script -->
    @include('layout.home.end')



</body>

</html>
