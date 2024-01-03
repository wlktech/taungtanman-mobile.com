	<script src="{{ asset('admin_app/assets/js/vendor.min.js') }}"></script>
	<script src="{{ asset('admin_app/assets/js/app.min.js') }}"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('admin_app/assets/plugins/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
	<script src="{{ asset('admin_app/assets/plugins/jvectormap-content/world-mill.js')}}"></script>
	{{-- <script src="{{ asset('admin_app/assets/plugins/apexcharts/dist/apexcharts.min.js')}}"></script> --}}
	<script src="{{ asset('admin_app/assets/js/demo/dashboard.demo.js')}}"></script>
	<!-- ================== END page-js ================== -->
	
	<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetAlert.js') }}"></script>
    @if (Session::has('success'))
    <script>
    showSweetAlert("Success!", "{{ Session::get('success') }}", "success");
    </script>
    @endif
    @if (Session::has('error'))
    <script>
    showSweetAlert("Sorry!", "{{ Session::get('error') }}", "error");
    </script>
    @endif
	
</body>
</html>