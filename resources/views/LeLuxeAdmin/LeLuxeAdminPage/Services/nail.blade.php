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
                                    <h4 class="card-title">NAILS CARE SERVICES LIST</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="dt-buttons btn-group d-flex justify-content-end gap-2 ">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class='bx bx-export'></i> Export
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><button type="button" id="copyBtn" class="btn dropdown-item"><i class='bx bx-copy'></i> Copy</button></li>
                                                <li><button type="button" id="printBtn" class="btn dropdown-item"><i class='bx bx-printer'></i> Print</button></li>
                                                <li><button type="button" id="excelBtn" class="btn dropdown-item"><i class='bx bx-file'></i>Excel</button></li>
                                                <li><button type="button" id="pdfBtn" class="btn dropdown-item"><i class='bx bxs-file-pdf'></i> Pdf</button></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a href="#backDropModal" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#backDropModal">
                                                <i class='bx bx-plus-circle'></i> Add Services
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="table-responsive">

                                <table class="table" id="myDataTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 229px;" aria-label="User: activate to sort column ascending" aria-sort="descending">Service Name</th>
                                            <th class="sorting text-start " tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="Role: activate to sort column ascending">Price</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="Role: activate to sort column ascending">Status</th>
                                            <th class="sorting_disabled">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $serv)

                                        <tr class="even">
                                            <td></td>
                                            <td><span class="text-truncate d-flex align-items-center">{{$serv['title']}}</span></td>
                                            <td class="sorting_1">
                                                <div class="d-flex justify-content-start align-items-center user-name">
                                                    <div class="d-flex flex-column"><a href="app-user-view-account.html" class="text-body text-truncate"><span class="fw-medium">{{$serv['price']}}</span></a></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-label-success"> Available</span> </td>

                                            <td class="">
                                                <div class="d-inline-block text-nowrap">


                                                    <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded "></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0">
                                                        <a href="" class="dropdown-item">View</a>
                                                        <a href="javascript:;" class="dropdown-item">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach




                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- / Content -->

                <!-- Modal -->
                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" action="{{ route('nails.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Add New Nails Services</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="name" class="form-label">Service Name</label>
                                        <input type="text" id="name" name="title" class="form-control" placeholder="Brazillian" />
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="email" class="form-label">Male Price</label>
                                        <input type="number" name="price" class="form-control" placeholder="00.00" />
                                    </div>
                                    <div class="col mb-0">
                                        <label for="email" class="form-label">Inclusoions</label>
                                       
                                        <select class="form-control select2" id="service" name="service[]">
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

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