<!DOCTYPE html>

<html lang="en">

<head>
  @include('admin.templates.head')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    @include('admin.templates.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.templates.sidebar1')

    <!-- Content Wrapper. Contains page content -->
    @include('admin.templates.starterPage1')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('admin.templates.controlSidebar')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.templates.footer')
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  @include('admin.templates.script')
</body>

</html>