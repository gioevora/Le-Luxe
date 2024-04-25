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

    <main class="contact-us">
        <section class="contact-section spad">
            <div class="container">
                <div class="section-title mb-4">
                    <span>Stay connected with us!</span>
                    <h2>Contact Us</h2>
                </div>

                <div class="contact-form">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="contact-header">
                                <h2>Let's Talk</h2>
                                <span>We love your feedback, suggestion and review on how to serve you. We always listen.</span>
                            </div>
                            <form action="{{ route('submit.form') }}" method="POST">
                                @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="last_name" class="form-control" placeholder="Juan">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Dela Cruz">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="leluxe-clinic@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Say something...."></textarea>
                            </div>
                            <button class="email-button">
                                <span>Send Message</span>
                                <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
                                    <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="white"></path>
                                </svg>
                            </button>
                        </form>
                        </div>

                        <div class="col-md-7">
                            <div class="img-container d-flex justify-content-center">
                                <img src="/assets/images/email.gif" alt="">
                            </div>
                            <div class="contact-details">
                                <div class="contact">
                                    <i class="fa-solid fa-location-dot"></i>
                                    204 RVGS Bldg. Gloria Diaz St. BF Resort, Las Piñas, Philippines
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-envelope"></i>
                                    leluxeclinicph@gmail.com
                                </div>
                                <div class="contact">
                                    <i class="fa-solid fa-phone"></i>
                                    09175480999 / (02) (02) 8470 0664
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="contact-location">
            <div class="container">
                <div class="map spad">
                    <h6>204 RVGS Bldg. Gloria Diaz St. BF Resort, Las Piñas, Philippines</h6>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.7401734530795!2d120.98297077324153!3d14.442131780940544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3a0a778f495%3A0x5aac03a5b0f60209!2sRVGS%20BUILDING!5e0!3m2!1sen!2sph!4v1713166765339!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </section>
    </main>


    @include('layout.home.footer')



    <!-- end Script -->
    @include('layout.home.end')



</body>

</html>
