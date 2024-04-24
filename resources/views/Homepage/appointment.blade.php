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

    <main class="appointment">
        <section class="appoinment-section spad">
            <div class="container">
                <div class="section-title mb-4">
                    <span>Try our Services</span>
                    <h2>BOOK APPOINTMENT</h2>
                </div>

                <div class="section-content">
                    <form action="" method="post">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab">
                                            <div class="reminder">
                                                <small>Note: Please Provide your personal and contact information. we'll send you a copy of your appointment sheet via email and call you on your mobile phone for any urgent updates.</small>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">First Name</label>
                                                        <input type="text" name="fname" id="fName" placeholder="Juan">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Last Name</label>
                                                        <input type="text" name="lname" id="lName" placeholder="Dela Cruz">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Address</label>
                                                        <input type="text" name="address" id="address" placeholder="Katipunan Ave, Quezon City Metro Manila">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Mobile Number</label>
                                                        <input type="number" name="mobile" id="mobile" placeholder="09924401097">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Email</label>
                                                        <input type="email" name="e_mail" id="e_mail" placeholder="juan.delazruz@gmail.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                            <div class="accept text-center  ">
                                                <input type="checkbox" name="" id="">
                                                <span>I agree to the collection and use of the data that i will provide through this form by Le Luxe Clinic for the puspose of booking an appoinment.
                                                    I understand that the collection and use of this data, which may include personal and sensitive information, shall be in accordance with the Data Privacy Act of 2021.
                                                </span>
                                            </div>

                                        </div>

                                        <div class="tab">
                                            <div class="schedule">
                                                <div class="reminder">
                                                    <small>Please select your preferred date and time of appointment.</small>
                                                </div>
                                                <hr>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Date </label>
                                                            <input type="date" name="date" id="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Time</label>
                                                            <input type="time" name="time" id="time">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Pax</label>
                                                            <input type="number" name="pax" id="pax" placeholder="0">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label for="">Pax</label>
                                                        <input type="input" placeholder="Search here...">
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Select Services</label>
                                                        <select name="service" id="serviceSelect">
                                                            <option value="facial">Facial</option>
                                                            <option value="waxing">Waxing</option>
                                                            <option value="nail-care">Nail Care</option>
                                                            <option value="hair">Hair</option>
                                                            <option value="laser">Laser</option>
                                                            <option value="slimming">Slimming</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">

                                                    <div class="facial-service" id="facialService">
                                                        <div class="row">
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="facial1">
                                                                    <label class="form-check-label" for="facial1">Deep Cleansing Facial</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="facial2">
                                                                    <label class="form-check-label" for="facial2">Diamond Peel Facial</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="waxing-service" id="waxingService">
                                                        <div class="row">
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Diamond Peel Facial
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="nail-service" id="nailService">
                                                        <div class="row">
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Manicure
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="hair-service" id="hairService">
                                                        <div class="row">
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Brazillian
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="laser-service" id="laserService">
                                                        <div class="row">
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Tatto Removal
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="slimming-service" id="slimmingService">
                                                        <div class="row">
                                                            <div class="col-md-4 px-0">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="flexCheckChecked">
                                                                    <label class="form-check-label" for="flexCheckChecked">
                                                                        Tummy
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab">
                                            <div class="container">

                                                <div class="book-summary">



                                                    <h5>Personal Information</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-5 px-0">
                                                            <h6>Last Name:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledfName" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 px-0">
                                                            <h6>First Name:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledlName" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 px-0">
                                                            <h6>Address:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledAddress" disabled>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <h5>Contact Information</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-5 px-0">
                                                            <h6>Mobile Number:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledmobile" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 px-0">
                                                            <h6>Email:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disablede_mail" disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5>Schedule</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-5 px-0">
                                                            <h6>Date:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledDate" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 px-0">
                                                            <h6>Time:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledTime" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 px-0">
                                                            <h6>Pax:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="form-group">
                                                                <input type="text" id="disabledPax" disabled>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h5>Services</h5>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-5 px-0">
                                                            <h6>List of Selected Services:</h6>
                                                        </div>
                                                        <div class="col-md-7 px-0">
                                                            <div class="service-list">
                                                                <p id="selectedServices"></p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div style="overflow:auto;">
                                            <div class="d-flex justify-content-between ">
                                                <button class="button-control" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                <button class="button-control" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            </div>
                                        </div>
                                        <!-- Circles which indicates the steps of the form: -->
                                        <div style="text-align:center;margin-top:40px;">
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </section>


    </main>


    @include('layout.home.footer')



    <!-- end Script -->
    @include('layout.home.end')

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


    <script>
        document.querySelectorAll('.form-check-input').forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
                let formCheck = this.closest('.form-check');
                let formLabel = formCheck.querySelector('.form-check-label'); // Fixed selector

                if (this.checked) {
                    formCheck.style.backgroundColor = '#BF953F'; // Solid color when checked
                    formLabel.style.color = '#FFFFFF'; // Set label text color to white
                } else {
                    formCheck.style.backgroundColor = 'transparent'; // Reset background
                    formLabel.style.color = ''; // Reset label text color
                }
            });
        });


        // Selection of service

        document.getElementById('serviceSelect').addEventListener('change', function() {
            const selectedService = this.value; // Get selected value from dropdown

            // Hide all service-related sections
            document.querySelectorAll('.facial-service, .waxing-service, .nail-service, .hair-service, .laser-service, .slimming-service').forEach((section) => {
                section.style.display = 'none'; // Hide by default
            });

            // Display the section corresponding to the selected service
            if (selectedService === 'facial') {
                document.getElementById('facialService').style.display = 'block';
            } else if (selectedService === 'waxing') {
                document.getElementById('waxingService').style.display = 'block';
            } else if (selectedService === 'nail-care') {
                document.getElementById('nailService').style.display = 'block';
            } else if (selectedService === 'hair') {
                document.getElementById('hairService').style.display = 'block';
            } else if (selectedService === 'laser') {
                document.getElementById('laserService').style.display = 'block';
            } else if (selectedService === 'slimming') {
                document.getElementById('slimmingService').style.display = 'block';
            }

        });

        // Set default visibility based on initial dropdown selection
        document.getElementById('serviceSelect').dispatchEvent(new Event('change'));
    </script>

    <script>
        // firstname
        const fName = document.getElementById('fName');
        const disabledfName = document.getElementById('disabledfName');

        // Lastname
        const lName = document.getElementById('lName');
        const disabledlName = document.getElementById('disabledlName');

        // Address
        const address = document.getElementById('address');
        const disabledAddress = document.getElementById('disabledAddress');

        // mobile Number
        const mobile = document.getElementById('mobile');
        const disabledmobile = document.getElementById('disabledmobile');

        // Emmail
        const e_mail = document.getElementById('e_mail');
        const disablede_mail = document.getElementById('disablede_mail');

        // Emmail
        const date = document.getElementById('date');
        const disabledDate = document.getElementById('disabledDate');

        const time = document.getElementById('time');
        const disabledTime = document.getElementById('disabledTime');

        const pax = document.getElementById('pax');
        const disabledPax = document.getElementById('disabledPax');


        fName.addEventListener('input', function() {
            disabledfName.value = this.value;
        });

        lName.addEventListener('input', function() {
            disabledlName.value = this.value;
        });

        address.addEventListener('input', function() {
            disabledAddress.value = this.value;
        });

        mobile.addEventListener('input', function() {
            disabledmobile.value = this.value;
        });

        e_mail.addEventListener('input', function() {
            disablede_mail.value = this.value;
        });

        date.addEventListener('input', function() {
            disabledDate.value = this.value;
        });

        time.addEventListener('input', function() {
            disabledTime.value = this.value;
        });

        pax.addEventListener('input', function() {
            disabledPax.value = this.value;
        });

        $(document).ready(function() {
            // Array to store the selected services
            let selectedServices = [];

            // Event listener for checkbox changes
            $('.form-check-input').change(function() {
                const serviceLabel = $(this).closest('.form-check').find('.form-check-label').text(); // Get the label text

                if ($(this).is(':checked')) {
                    // Add the service label to the array
                    if (!selectedServices.includes(serviceLabel)) {
                        selectedServices.push(serviceLabel);
                    }
                } else {
                    // Remove the service label from the array
                    selectedServices = selectedServices.filter(service => service !== serviceLabel);
                }

                // Update the service list with the new content
                updateServiceList();
            });

            // Function to update the service list with selected services
            function updateServiceList() {
                let listContent = ''; // Create an empty list
                selectedServices.forEach(service => {
                    listContent += `<div><i class="fa-solid fa-check"></i> ${service}</div>`; // Include the check icon with the service name
                });
                $('.service-list').html(listContent); // Insert the updated list content into the service-list div
            }
        });
    </script>






</body>

</html>