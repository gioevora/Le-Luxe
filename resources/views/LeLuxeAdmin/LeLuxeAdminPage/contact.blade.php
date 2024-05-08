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
                                    <h4 class="card-title">List of Inquiries</h4>
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
                                    </div>

                                </div>
                            </div>

                            <div class="table-responsive">

                                <table class="table" id="myDataTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 229px;" aria-label="User: activate to sort column ascending" aria-sort="descending">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="Role: activate to sort column ascending">Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 107px;" aria-label="Role: activate to sort column ascending">Message</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 67px;" aria-label="Plan: activate to sort column ascending">Status</th>
                                            <th class="sorting_disabled"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $sched)
                                     
                                        <tr class="even">
                                            <td></td>
                                            <td><span class="text-truncate d-flex align-items-center">{{$sched['first_name']}}, {{$sched['last_name']}}</span></td>
                        
                                            <td>
                                                <span class="text-truncate d-flex align-items-center">
                                                {{$sched['email']}}
                                                </span>
                                            </td>

                                            <td>
                                                <span class="text-truncate d-flex align-items-center">
                                                {{$sched['message']}}
                                                </span>
                                            </td>
                                            
                                           


                                            <td><span class="badge bg-label-success">{{$sched['status']}}</span></td>
                                            <td class="">
                                                <div class="d-inline-block text-nowrap">
                                                    

                                                    <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded "></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end m-0">
                                                
                                                        <a href="{{ route('contacts.accept', ['id' => $sched->id]) }}" class="dropdown-item">Accept</a>
                                                       
                                                        <a href="{{ route('appointment.show', ['id' => $sched['id']]) }}" class="dropdown-item">Reject</a>
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
    @endif



    @include('LeLuxeAdmin.LeLuxeLayout.end')
</body>

</html>