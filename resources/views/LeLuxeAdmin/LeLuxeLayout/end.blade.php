<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../Admin/assets/vendor/libs/jquery/jquery.js"></script>
<script src="../Admin/assets/vendor/libs/popper/popper.js"></script>
<script src="../Admin/assets/vendor/js/bootstrap.js"></script>
<script src="../Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<!-- Data Tables -->
<script src="../Admin/assets/vendor/libs/DataTables/datatables.min.js"></script>


<script src="../Admin/assets/vendor/js/menu.js"></script>
<script src="../Admin/assets/js/main.js"></script>
<!-- endbuild -->


<!-- Main JS -->
<script src="../Admin/assets/js/main.js"></script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {

        var dataTable = $('#myDataTable').DataTable({

            responsive: true, // Enable Responsive extension
            inlineEditing: true,

            buttons: [
                'print', 'copy', 'csv', 'pdf'
            ],

            "language": {
                "search": "Search: ",
                "searchPlaceholder": "Search here..."
            }
        });
        // responsive: true
        // autoFill: true

        // Button click events
        $('#printBtn').on('click', function() {
            dataTable.button('.buttons-print').trigger();
        });
        $('#copyBtn').on('click', function() {
            dataTable.button('.buttons-copy').trigger();
        });

        $('#excelBtn').on('click', function() {
            dataTable.button('.buttons-csv').trigger();
        });

        $('#pdfBtn').on('click', function() {
            dataTable.button('.buttons-pdf').trigger();
        });


    });
</script>

@if (session('success'))
<script>
    toastr.success("{{ session('success') }}");
</script>
@endif
@if (session('error'))
<script>
    toastr.error("{{ session('error') }}");
</script>
@endif




</script>