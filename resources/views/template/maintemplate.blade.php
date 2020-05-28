<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SD Negeri 1 Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{URL::asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <style>
    #logoutdrop:hover{
      /* background-color: white; */
      color: #000000;
    }
    #logoutdrop{
      color: white; 
      /* opacity: 70%; */
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion sticky-top" style="background: #1c1c1c" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-star"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SD Negeri 1 Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{url('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Lists
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span class="nav-item">List</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="{{url('admin/lists/teacher')}}">Teacher</a>
            <a class="collapse-item" href="{{url('admin/lists/student')}}">Student</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Classes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <a class="collapse-item" href="{{ URL('admin/lists/classes/1') }}">Class 1</a>
            <a class="collapse-item" href="{{ URL('admin/lists/classes/2') }}">Class 2</a>
            <a class="collapse-item" href="{{ URL('admin/lists/classes/3') }}">Class 3</a>
            <a class="collapse-item" href="{{ URL('admin/lists/classes/4') }}">Class 4</a>
            <a class="collapse-item" href="{{ URL('admin/lists/classes/5') }}">Class 5</a>
            <a class="collapse-item" href="{{ URL('admin/lists/classes/6') }}">Class 6</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Additional
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Score CSV Control</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('export')}}">Export CSV</a>
            <a class="collapse-item" href="{{url('admin/importpage')}}">Import CSV</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="{{url('admin/addid')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Add More ID</span></a>
      </li>

      <!-- Nav Item - Scores -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseScore" aria-expanded="true" aria-controls="collapseScore">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Scores</span>
        </a>
          <div id="collapseScore" class="collapse" aria-labelledby="headingScore" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
            <a class="collapse-item" href="{{ URL('admin/lists/subjects/1') }}">Mathematics</a>
            <a class="collapse-item" href="{{ URL('admin/lists/subjects/2') }}">Bahasa Indonesia</a>
            <a class="collapse-item" href="{{ URL('admin/lists/subjects/3') }}">English</a>
            <a class="collapse-item" href="{{ URL('admin/lists/subjects/4') }}">Natural Science</a>
            <a class="collapse-item" href="{{ URL('admin/lists/subjects/5') }}">Social Science</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content" style="background: #313131">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #525252;">

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline small" style="color:white; opacity: 70%" >Admin</span>
          <img class="img-profile rounded-circle" src="https://image.flaticon.com/icons/svg/2991/2991137.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in border-top-0 border-right-0 border-bottom-0 border-left-0" style="background: #525252" aria-labelledby="userDropdown">
          <a class="dropdown-item" id="logoutdrop"  href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->
  
  <!-- content start -->
    @yield('content')

  <!-- End of content -->

      <!-- Footer -->
      <footer style="margin-top:250px; background: #414141; padding-top:75px; padding-bottom:75px;" class="sticky-footer">
        <div class="container my-auto">
          <div class="text-center my-auto" style="color: white; opacity: 60%">
            <!-- <span>Copyright &copy; Your Website 2019</span> -->
            <span>Made by Yazeed &copy;</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{URL::asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{URL::asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{URL::asset('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{URL::asset('js/demo/chart-pie-demo.js')}}"></script>
  <script>
    $(document).ready( function () {
      $('.table').DataTable();
    } );
  </script>
</body>

</html>