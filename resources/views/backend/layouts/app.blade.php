<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLET/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLET/plugins/datatables-buttons/css/buttons.bootstrap4.min.cs') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLET/dist/css/adminlte.min.cs') }}s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        <!-- Navbar -->
        @include('backend.partials.navbar')


        <!-- Main Sidebar Container -->
        @include('backend.partials.sidebar')
        <!-- Content Wrapper. Contains page content -->

        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('backend.partials.footer')
        <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('AdminLTE/dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
        <!-- SweetAlert2 -->
        <script src="{{ asset('AdminLTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/toastr/toastr.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


        <script>
            let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        </script>
        <script>
            $(function() {
                // Initialize SweetAlert2 Toast
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                // Success Toast
                window.showSuccessToast = function(message) {
                    Toast.fire({
                        icon: 'success',
                        title: message || 'Operation completed successfully!',
                        background: '#28a745', // Green background
                        color: '#fff', // White text color
                        iconColor: '#fff', // White icon color to contrast with green background
                    });
                };
                // Error Toast
                window.showErrorToast = function(message) {
                    Toast.fire({
                        icon: 'error',
                        title: message || 'An error occurred!',
                        background: '#dc3545', // Red background (Bootstrap danger color)
                        color: '#fff', // White text color
                        iconColor: '#fff', // White icon color to contrast with red background
                    });
                };
                // Warning Toast
                window.showWarningToast = function(message) {
                    Toast.fire({
                        icon: 'warning',
                        title: message || 'Warning!'
                    });
                };

                // Info Toast
                window.showInfoToast = function(message) {
                    Toast.fire({
                        icon: 'info',
                        title: message || 'Information!'
                    });
                };

                // Question Toast
                window.showQuestionToast = function(message) {
                    Toast.fire({
                        icon: 'question',
                        title: message || 'Question?'
                    });
                };

                // Process Flash Messages from Laravel
                @if (session('success'))
                    showSuccessToast("{{ session('success') }}");
                @endif

                @if (session('error'))
                    showErrorToast("{{ session('error') }}");
                @endif

                @if (session('warning'))
                    showWarningToast("{{ session('warning') }}");
                @endif

                @if (session('info'))
                    showInfoToast("{{ session('info') }}");
                @endif
            });
        </script>
        {{-- <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script> --}}
        @stack('script')
</body>

</html>
