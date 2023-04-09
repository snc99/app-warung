        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Warung Bu Adi</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://irvan.tk/">By Irvan Sandy</a>
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
        <!-- Vendor JS Files -->
        <script src="{{ '/' }}assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="{{ '/' }}assets/vendor/aos/aos.js"></script>
        <script src="{{ '/' }}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ '/' }}assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ '/' }}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ '/' }}assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ url('/') }}/assets/js/main.js"></script>

        <script src="{{ url('/') }}/assets/vendor/jquery/jquery-3.6.3.js"></script>

        <!-- script jquery -->
        <script src="{{ '/' }}assets/vendor/datatables/jquery.dataTables.min.js"></script>

        {{-- script tabel  --}}
        <script src="{{ url('/') }}/assets/vendor/tables/custom/script.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]", {});
        </script>

        {{-- Toas Js --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script>
            @if (Session::has('success'))

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-bottom-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr.success("{{ Session::get('success') }}", "Berhasil")
            @endif
        </script> --}}

        </body>

        </html>
