@include('Layout.admin.header')

<body class="g-sidenav-show  bg-gray-200">
    <!-- Sidebar -->
    @include('Layout.admin.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-xl-none d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item d-flex ps-3 align-items-center">
                            <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <!-- Card Header -->
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center" style="background-color: #202A54;">
                                <h6 class="text-white text-capitalize ps-3 m-0">List of Services</h6>
                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addServiceModal" style="margin-right: 10px; background-color: #f6d200">
                                    Add Services
                                </button>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" style="padding: 5px;">
                                <table id="dataTable" class="row-border" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Price</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Services</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nails as $nail)
                                        <tr>
                                            <td>{{ $nail->title }}</td>
                                            <td>{{ $nail->price }}</td>
                                            <td>{{ $nail->service }}</td>
                                            <td class="align-middle" style="display: flex; align-items: center; justify-content: center;">

                                                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editServiceModal_{{ $nail->id }}" style="margin-right: 10px; background-color: #f6d200;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>


                                                <form action="" method="post" id="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="confirmDelete()"> <i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
<!-- Add Services Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Add Service Wax</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addServiceForm" action="{{ route('nails.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Select Service:</label><br>
        <select class="form-control select2" id="service" name="service[]" multiple>
            <option value="Gel Manicure">Gel Manicure</option>
            <option value="Gel Pedicure">Gel Pedicure</option>
            <option value="Regular Manicure">Regular Manicure</option>
            <option value="Regular Pedicure">Regular Pedicure</option>
            <option value="Gel Removal">Gel Removal</option>

            <option value="Change Gel Polish">Change Gel Polish</option>
            <option value="Softgel Extension w/ Gel Polish">Softgel Extension w/ Gel Polish</option>
            <option value="Polygel Extension w/ Gel Polish">Polygel Extension w/ Gel Polish</option>
            <option value="Acrylic Extension w/ Gel Polish">Acrylic Extension w/ Gel Polish</option>
            <option value="Handspa">Handspa</option>
            <option value="Regular Footspa">Regular Footspa</option>

            <option value="Deluxe Footspa">Deluxe Footspa</option>
            <option value="Hand Parafin">Hand Parafin </option>
            <option value="Foot Parafin ">Foot Parafin </option>
            <option value="Foot Massage">Foot Massage</option>

            <!-- Add more options for other services -->
        </select>
    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@foreach($nails as $nail)
<div class="modal fade" id="editServiceModal_{{ $nail->id }}" tabindex="-1" aria-labelledby="editServiceModalLabel_{{ $nail->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServiceModalLabel_{{ $nail->id }}">Edit Service Wax</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editServiceForm_{{ $nail->id }}" action="{{ route('nails.update', $nail->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Method spoofing for PUT request -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $nail->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $nail->price }}" required>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Select Service:</label><br>
                            <select class="form-control select2" id="service_{{ $nail->id }}" name="service[]" multiple>
                                <option value="Gel Manicure" {{ in_array('Gel Manicure', explode(', ', $nail->service)) ? 'selected' : '' }}>Gel Manicure</option>
                                <option value="Gel Pedicure" {{ in_array('Gel Pedicure', explode(', ', $nail->service)) ? 'selected' : '' }}>Gel Pedicure</option>
                                <option value="Regular Manicure" {{ in_array('Regular Manicure', explode(', ', $nail->service)) ? 'selected' : '' }}>Regular Manicure</option>
                                <option value="Regular Pedicure" {{ in_array('Regular Pedicure', explode(', ', $nail->service)) ? 'selected' : '' }}>Regular Pedicure</option>
                                <option value="Gel Removal" {{ in_array('Gel Removal', explode(', ', $nail->service)) ? 'selected' : '' }}>Gel Removal</option>
                                <option value="Change Gel Polish" {{ in_array('Change Gel Polish', explode(', ', $nail->service)) ? 'selected' : '' }}>Change Gel Polish</option>
                                <option value="Softgel Extension w/ Gel Polish" {{ in_array('Softgel Extension w/ Gel Polish', explode(', ', $nail->service)) ? 'selected' : '' }}>Softgel Extension w/ Gel Polish</option>
                                <option value="Polygel Extension w/ Gel Polish" {{ in_array('Polygel Extension w/ Gel Polish', explode(', ', $nail->service)) ? 'selected' : '' }}>Polygel Extension w/ Gel Polish</option>
                                <option value="Acrylic Extension w/ Gel Polish" {{ in_array('Acrylic Extension w/ Gel Polish', explode(', ', $nail->service)) ? 'selected' : '' }}>Acrylic Extension w/ Gel Polish</option>
                                <option value="Handspa" {{ in_array('Handspa', explode(', ', $nail->service)) ? 'selected' : '' }}>Handspa</option>
                                <option value="Regular Footspa" {{ in_array('Regular Footspa', explode(', ', $nail->service)) ? 'selected' : '' }}>Regular Footspa</option>
                                <option value="Deluxe Footspa" {{ in_array('Deluxe Footspa', explode(', ', $nail->service)) ? 'selected' : '' }}>Deluxe Footspa</option>
                                <option value="Hand Parafin" {{ in_array('Hand Parafin', explode(', ', $nail->service)) ? 'selected' : '' }}>Hand Parafin</option>
                                <option value="Foot Parafin" {{ in_array('Foot Parafin', explode(', ', $nail->service)) ? 'selected' : '' }}>Foot Parafin</option>
                                <option value="Foot Massage" {{ in_array('Foot Massage', explode(', ', $nail->service)) ? 'selected' : '' }}>Foot Massage</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

<script>
    // Add event listener to checkboxes
    $('input[type="checkbox"]').change(function() {
        updateTextboxFromCheckboxes();
    });

    // Function to update the textbox value from checkboxes
    function updateTextboxFromCheckboxes() {
        var selectedServices = [];
        $('input[type="checkbox"]:checked').each(function() {
            selectedServices.push($(this).val());
        });
        $('#service').val(selectedServices.join(', '));

        // Hide the textbox if there are selected services
        if (selectedServices.length > 0) {
            $('#serviceTextbox').hide();
        } else {
            $('#serviceTextbox').show();
        }
    }

    // Add event listener to textbox for change event
    $('#serviceTextbox').on('input', function() {
        updateCheckboxesFromTextbox();
    });

    // Function to update the checkboxes from the textbox value
    function updateCheckboxesFromTextbox() {
        var textboxValue = $('#serviceTextbox').val();
        var selectedServices = textboxValue.split(',').map(function(service) {
            return service.trim();
        });
        $('input[type="checkbox"]').each(function() {
            var checkboxValue = $(this).val();
            $(this).prop('checked', selectedServices.includes(checkboxValue));
        });

        // Show the textbox if there are no selected services
        if (selectedServices.length === 0) {
            $('#serviceTextbox').show();
        } else {
            $('#serviceTextbox').hide();
        }
    }

    // Call the function to update the initial state
    updateCheckboxesFromTextbox();
</script>



    <!--   Core JS Files   -->
    <script src="/Assets/js/core/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/Assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/Assets/js/plugins/chartjs.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="/Assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
