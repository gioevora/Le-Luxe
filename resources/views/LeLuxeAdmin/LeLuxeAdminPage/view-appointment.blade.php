@include('LeLuxeAdmin.LeLuxeLayout.header')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('LeLuxeAdmin.LeLuxeLayout.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('LeLuxeAdmin.LeLuxeLayout.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">

                        <!-- Data table -->

                        <div class="card">
                            <div class="row pt-4 px-4 py-4">
                                <div class="col-md-6">
                                    <h4 class="card-title">View Appointment</h4>
                                </div>
                                <div class="col-md-6 text-end">
                                    <span class="badge bg-label-success">{{$appointments->status}}</span>
                                </div>

                            </div>

                            <div class="row pt-4 px-4 py-4">
                                <div class="col-md-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Appointment ID:</h6>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="{{$appointments->id}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Full Name:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->lname}}, {{$appointments->fname}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Address:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->address}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Mobile Number:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->mobile}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Email:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->e_mail}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Date:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->date}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Time:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->time}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Pax:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->pax}}" readonly>
                                </div>

                                <div class="col-md-4 pt-4">
                                    <h6 class="card-title d-flex justify-content-end align-items-center">Services:</h6>
                                </div>
                                <div class="col-md-8 pt-4">
                                    <input type="text" class="form-control" value="{{$appointments->service}}" readonly>
                                </div>

                                <div class="col-md-12 pt-4 d-flex justify-content-end">

                                    @if($appointments->status === 'Accepted')

                                    <button type="button" class="btn btn-outline-danger me-2" disabled>Reject Appointment</button>
                                    <button type="submit" class="btn btn-primary me-2" disabled>Accept Appointment</button>
                                    @else

                                    <form action="{{ route('appointment.accept', ['id' => $appointments->id]) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary me-2">Accept Appointment</button>
                                    </form>
                                    @endif
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('LeLuxeAdmin.LeLuxeLayout.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>


    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif



    @include('LeLuxeAdmin.LeLuxeLayout.end')
</body>

</html>