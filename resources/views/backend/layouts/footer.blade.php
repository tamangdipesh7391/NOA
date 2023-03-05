@section('footer')
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Tech Rastra</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://techrastra.com/">Tech Rastra</a>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{url('backend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('backend-assets/js/jquery.js')}}"></script>
    <script src="{{url('backend-assets/ckeditor/ckeditor.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('backend-assets/js/main.js')}}"></script>
    <script src="{{url('backend-assets/custom/custom.js')}}"></script>
    @yield('scripts')
    <script>
        let ckeditorUploadUrl = "{{route('ckeditor-image-upload', ['_token' => csrf_token() ])}}";
    </script>
    </body>
    </html>
@endsection
