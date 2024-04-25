@include('Layout.home.header')

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Navigation Bar Starts here -->

    @include('Layout.home.navbar')
    <!-- Navigation Bar ends here -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-text">
                        <h1>Hi BEAUTY!</h1>
                        <p>Get your pamper day without hurting your pocket. Check our list of services and prices that we offer.</p>
                        <a style="--clr: #BC824B" class="button-explore mb-2" href="#">
                            <span class="button__icon-wrapper">
                                <svg width="10" class="button__icon-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 15">
                                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                                </svg>

                                <svg class="button__icon-svg  button__icon-svg--copy" xmlns="http://www.w3.org/2000/svg" width="10" fill="none" viewBox="0 0 14 15">
                                    <path fill="currentColor" d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"></path>
                                </svg>
                            </span>
                            Appointment
                        </a>
                        <a class="button-watch" href="">
                            <span class="button-video">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="currentColor" d="M3 22v-20l18 10-18 10z" />
                                </svg>
                            </span>
                            Watch Videos
                        </a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="/Assets/images/right-image.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Hero Section End -->

    <section class="work-section spad">
        <div class="container">
            <div class="section-title mb-4">
                <span>Get Started</span>
                <h2>How It Works!</h2>
                <p>Discover, book, and experience personalized healtcare effortlessly <br>with our user friendly Appointment Website.</p>
            </div>

            <div class="row pt-lg-4">

                <div class="col-md-4 text-center px-0 ">
                    <div class="work-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                        </svg>
                        <span class="badge badge-light">1</span>
                    </div>

                    <h5>Sign Up / Log In</h5>
                    <p>Log in or create your account to verfied and access the services.</p>
                </div>
                <div class="col-md-4 text-center px-0 ">
                    <div class="work-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-calendar4-week" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <span class="badge badge-light">2</span>

                    </div>

                    <h5>Book Appointment</h5>
                    <p>Effortlessly book appointment at your convience.</p>
                </div>
                <div class="col-md-4 text-center px-0 ">
                    <div class="work-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-prescription2" viewBox="0 0 16 16">
                            <path d="M7 6h2v2h2v2H9v2H7v-2H5V8h2z" />
                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v10.5a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 14.5V4a1 1 0 0 1-1-1zm2 3v10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V4zM3 3h10V1H3z" />
                        </svg>
                        <span class="badge badge-light">3</span>

                    </div>

                    <h5>Get Services</h5>
                    <p>Recieve personalized healtcare services tailored to your needs.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>LE LUXE CLINIC</h2>
                        </div>
                        <div class="section-text" data-aos="fade-right" data-aos-duration="600">
                            <p class="f-para">Welcome to Le Luxe Clinic, where our mission is to be your sanctuary for holistic wellness and beauty. Established with a commitment to excellence, Le Luxe Clinic is not just a place; it's an experience—a journey towards self-discovery and self-care.</p>
                            <p class="s-para">At Le Luxe Clinic, we understand that true beauty is a reflection of inner harmony and outer vitality. With this belief at our core, our dedicated team of professionals is passionate about providing you with the highest quality care and personalized attention.</p>
                            <a href="#" class="button">Read More</a>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="about-pic">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block " src="/Assets/images/about1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block " src="/Assets/images/about2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block " src="/Assets/images/about3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block " src="/Assets/images/about3.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Employee Section -->
    <section class="employee-section spad">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Want to know</span>
                        <h2>Our Team?</h2>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-3">
                    <img src="/Assets/images/user.jpg" alt="" class="img-circle">
                    <div class="team-name text-center ">
                        <h4>GIOLO EVORA</h4>
                    </div>
                    <div class="team-position text-center ">
                        <h5>Developer</h5>
                    </div>
                    <div class="team-socmed d-flex justify-content-center gap-2 ">
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-instagram-alt'></i>
                        <i class='bx bxl-telegram'></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="/Assets/images/user.jpg" alt="" class="img-circle">
                    <div class="team-name text-center ">
                        <h4>JUSTINE DE CASTRO</h4>
                    </div>
                    <div class="team-position text-center ">
                        <h5>Developer</h5>
                    </div>
                    <div class="team-socmed d-flex justify-content-center gap-2 ">
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-instagram-alt'></i>
                        <i class='bx bxl-telegram'></i>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <section class="question-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Frequently Asked Questions</h2>
                        <p>Find solutions to common queries about signing up, fees, job listing, applications, alerts, community <br>engagement, job types, profile editing, support and data security.</p>
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="/assets/images/faq.gif" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="icon-right" data-toggle="collapse" data-parent="#accordion" href="#collapse1" onclick="changeIcon(this)">
                                                        How do I book an appointment?
                                                        <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                                                        </svg>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse in">
                                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="icon-right" data-toggle="collapse" data-parent="#accordion" href="#collapse2" onclick="changeIcon(this)">Can i book for someone else?
                                                        <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                                                        </svg>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="icon-right" data-toggle="collapse" data-parent="#accordion" href="#collapse3" onclick="changeIcon(this)">What is needed for booking?
                                                        <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                                                        </svg>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a class="icon-right" data-toggle="collapse" data-parent="#accordion" href="#collapse4" onclick="changeIcon(this)">What payment method are accepted?
                                                        <svg id="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);">
                                                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                                                        </svg>
                                                    </a>

                                                </h4>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Services Section End -->

    <!-- <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="600">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="600">
                <div class="col-md-3 px-0 ">
                    <div class="card card-section">
                        <div class="card-body">
                            <div class="image-container">
                                <img src="/Assets/images/right-image.png" alt="">
                            </div>
                            <div class="service-header text-center">
                                <h3>Facials</h3>
                            </div>
                            <div class="service-description text-center">
                                <p>Revitalize your skin with our expert facial treatments. Pamper yourself and reveal glowing, youthful skin.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-0 ">
                    <div class="card card-section">
                        <div class="card-body">
                            <div class="image-container">
                                <img src="/Assets/images/waxing.png" alt="">
                            </div>
                            <div class="service-header text-center">
                                <h3>Waxing</h3>
                            </div>
                            <div class="service-description text-center">
                                <p>Say goodbye to unwanted hair with our professional waxing services. Enjoy smooth, silky skin that lasts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-0 ">
                    <div class="card card-section">
                        <div class="card-body">
                            <div class="image-container">
                                <img src="/Assets/images/nail.png" alt="">
                            </div>
                            <div class="service-header text-center">
                                <h3>Nails</h3>
                            </div>
                            <div class="service-description text-center">
                                <p>Elevate your look with our expert nail services. Experience professional care and stunning results.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 px-0 ">
                    <div class="card card-section">
                        <div class="card-body">
                            <div class="image-container">
                                <img src="/Assets/images/laser.png" alt="">
                            </div>
                            <div class="service-header text-center">
                                <h3>Laser</h3>
                            </div>
                            <div class="service-description text-center">
                                <p>Experience the power of laser technology for smooth, hair-free skin. Say hello to effortless beauty.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="service-button">
                <a href="#" class="button">View All</a>
            </div>

        </div>
    </section> -->
    <!-- Services Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1220px, 0px, 0px); transition: all 1.2s ease 0s; width: 3660px;">
                                <div class="owl-item active" style="width: 610px;">
                                    <div class="ts-item">
                                        <p>I've been to Le Luxe Clinic, got a facial and nails done. My face feels a lot cleaner, refreshed, and glowing, my acne is cleared and there were lesser build up due to the amazing effects of facial. I was also really satisfied with the mani-pedi and the results were so pretty ❤️❤️ May add the staff who were friendly and accommodating! Recommend 👍</p>
                                        <div class="ti-author">
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <h5> - Rica Tan</h5>
                                        </div>
                                        <img src="img/testimonial-logo.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 610px;">
                                    <div class="ts-item">
                                        <p>Had my mani gel, pedi, and footspa yesterday @Le luxe Clinic and the service was great! 😊
                                            The place was neat and the staff were welcoming . I am very pleased with the service rendered to me by Angel. Thank you for always taking care of my nails🥰❤️
                                            Will definitely keep coming back!
                                        </p>
                                        <div class="ti-author">
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <h5> - Jewel Santiago</h5>
                                        </div>
                                        <img src="img/testimonial-logo.png" alt="">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 610px;">
                                    <div class="ts-item">
                                        <p>Love my nails! Ms Angel did a wonderful job in making them so lovely.
                                            Place was clean and the staff are very friendly.
                                            👍🏻👍🏻 💅
                                        </p>
                                        <div class="ti-author">
                                            <div class="rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <h5> - Jackie Quijano-Cosme</h5>
                                        </div>
                                        <img src="img/testimonial-logo.png" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev">
                                <i class="fa-solid fa-arrow-left"></i></button>
                            <button type="button" role="presentation" class="owl-next">
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="javascript:;" class="widget widget-image">
                        <div class="widget-image-cover">
                            <img src="/Assets/images/leluxxe-logo.svg" alt="">
                        </div>
                        <div class="widget-image-info">
                            <h5>Consectetur adipiscing elit. </h5>
                            <p>
                                Curabitur ullamcorper mi ut rutrum gravida commodo tellus.
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-image-user">
                                        <div class="widget-image-user-info">
                                            <h4>News and Updates</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="javascript:;" class="widget widget-image">
                        <div class="widget-image-cover">
                            <img src="/Assets/images/coffee2.jpg" alt="">
                        </div>
                        <div class="widget-image-info">
                            <h5>Consectetur adipiscing elit. </h5>
                            <p>
                                Curabitur ullamcorper mi ut rutrum gravida commodo tellus.
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-image-user">
                                        <div class="widget-image-user-info">
                                            <h4>New Blogs</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="javascript:;" class="widget widget-image">
                        <div class="widget-image-cover">
                            <img src="/Assets/images/coffee3.jpg" alt="">
                        </div>
                        <div class="widget-image-info">
                            <h5>Consectetur adipiscing elit. </h5>
                            <p>
                                Curabitur ullamcorper mi ut rutrum gravida commodo tellus.
                            </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget-image-user">
                                        <div class="widget-image-user-info">
                                            <h4>Grand Openings</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="service-button">
                <a href="#" class="button">View All</a>
            </div>
        </div>
    </section>


    <script>
        function changeIcon(element) {
            var icon = element.querySelector('svg');
            var path = icon.querySelector('path');
            if (path.getAttribute('d') === "M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z") {
                path.setAttribute('d', 'M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z');
            } else {
                path.setAttribute('d', 'M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z');
            }
        }
    </script>


    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and provide beauty services to millions of clients</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>09175480999</li>
                                <li>(02) (02) 8470 0664</li>
                                <li>leluxeclinicph@gmail.com</li>
                                <li>204 RVGS Bldg. Gloria Diaz St. BF Resort, Las Piñas, Philippines</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- end Script -->
    @include('layout.home.end')



</body>

</html>