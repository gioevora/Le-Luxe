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
                                    <h4 class="card-title">Gallery</h4>
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
                                                <i class='bx bx-plus-circle'></i> Add Pictures
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
                                            <th class="text-start" tabindex="0">Image</th>
                                            <th class="sorting_disabled"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($galleries as $gal)

                                        <tr class="even">
                                            <td></td>
                                            <td><span class="text-truncate d-flex align-items-center"><img src="{{ asset('images/' . $gal->image_path) }}" alt="{{ $gal->title }}" style="max-width: 50px;"></span></td>

                                            <td class="">
                                                <div class="d-inline-block text-nowrap">


                                                    <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded "></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0">

                                                        <a href="" class="dropdown-item">Unpublish</a>

                                                        <a href="" class="dropdown-item">Delete</a>
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

                <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <form class="modal-content" action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="backDropModalTitle">Add Pictures</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="container container-file ">
                                        <div class="drop_box">
                                            <input type="file" accept="image/png, image/gif, image/jpeg" id="fileID" name="image_path" style="display:none;">
                                            <label for="fileID" class="file-label text-center ">
                                                <i class='bx bx-image-add text-center bx-lg'></i>
                                                <header>
                                                    <h4 class="text-center">Select File here</h4>
                                                </header>
                                                <p class="supported text-center ">Files Supported: image, png, jpg, jpeg</p>
                                                <img id="previewImage" src="#" alt="Preview" style="display:none; max-width: 100%; max-height: 200px;">
                                            </label>
                                        </div>
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

    <script>
        const dropArea = document.querySelector(".drop_box");
        const input = dropArea.querySelector("input");
        const dragText = dropArea.querySelector("header h4");
        const supported = dropArea.querySelector(".supported");
        const bx = dropArea.querySelector(".bx");
        const previewImage = dropArea.querySelector("#previewImage");

        input.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    previewImage.style.display = 'block';
                    dragText.style.display = 'none';
                    supported.style.display = 'none';
                    bx.style.display = 'none';
                    previewImage.src = reader.result;
                }
                reader.readAsDataURL(file);
            } else {
                previewImage.style.display = 'none';
                dragText.style.display = 'block';
                supported.style.display = 'block';
            }
        });
    </script>




    @include('LeLuxeAdmin.LeLuxeLayout.end')
</body>

</html>