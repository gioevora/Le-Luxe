<!-- Js Plugins -->


<script src="/Assets/js/jquery-3.3.1.min.js"></script>
<script src="/Assets/js/bootstrap.min.js"></script>

<script src="/Assets/js/jquery-ui.min.js"></script>
<script src="/Assets/js/jquery.slicknav.js"></script>
<script src="/Assets/js/owl.carousel.min.js"></script>
<script src="/Assets/js/main.js"></script>

<script src="/Assets/js/jquery.nice-select.min.js"></script>
<script src="/Assets/js/jquery.magnific-popup.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    AOS.init();
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

<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
