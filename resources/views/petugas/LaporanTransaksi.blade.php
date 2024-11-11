<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href={{ url('vendor/fontawesome-free/css/all.min.css')}} rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/admin/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Halaman Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('petugas') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
          
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('petugas.laporan') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Laporan Transaksi</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Petugas</h1>
                    </div>
                    <a href="{{ route('petugas.transaksi') }}" class="btn btn-primary">
                        Tambah Transaksi
                    </a>
                    <!-- Content Row -->
                    <div class="row">
                        <table class="table table-bordered table-striped table- m-3">
                            <thead style="background-color: #0064cf; color: white;">
                                <div class="m-2" style="width: 100%">
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            
                        @endif
                        </div>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Petugas</th>
                                    <th class="text-center">Tgl Transaksi</th>
                                    <th class="text-center">Total Transaksi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($laporan as $item)
                                <tr class="table-hover">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>{{ formatRupiah($item->total) }}</td>
                                    <td>
                                        <div class="d-flex align-items-center ml-4">
                                            <!-- Tombol Edit -->
                                            <div class="m-2">
                                                <a  href="{{ route('petugas.detail.transaksi', $item->id) }}" class="btn btn-primary">
                                                    Detail Transaksi
                                                </a>
                                            </div>
                                        </div>                                        
                                    </td>
                                </tr>                                   
                              @endforeach                              
                            </tbody>
                        </table>
                        
                        
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

            {{-- Edit Data Petugas --}}
            <div class="modal fade" id="EditPetugas" tabindex="-1" aria-labelledby="EditPetugas" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="EditPetugas">Edit Data Petugas</h5>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.tambah.datapetugas') }}" method="POST">
                                @csrf
                                <div class="row m-2 ">
                                    <label for="inputName" class="form-label">Masukan Nama :</label>
                                    <input type="text" name="name" class="form-control" id="inputName">
                                </div>
                                <div class="row m-2 ">
                                    <label for="inputEmail" class="form-label">Masukan Email :</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail">
                                </div>
                                <div class="row m-2 ">
                                    <label for="inputPassword" class="form-label">Masukan Password :</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword">
                                </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            {{-- end edit data konsumen --}}

        {{-- Tamabah Data Petugas --}}
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Tambah Data Petugas</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.tambah.datapetugas') }}" method="POST">
                            @csrf
                            <div class="row m-2 ">
                                <label for="inputName" class="form-label">Masukan Nama :</label>
                                <input type="text" name="name" class="form-control" id="inputName">
                            </div>
                            <div class="row m-2 ">
                                <label for="inputEmail" class="form-label">Masukan Email :</label>
                                <input type="email" name="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="row m-2 ">
                                <label for="inputPassword" class="form-label">Masukan Password :</label>
                                <input type="password" name="password" class="form-control" id="inputPassword">
                            </div>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        {{-- end data Petugas --}}

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ url('vendor/fontawesome-free/css/all.min.css')}}></script>
    <script src={{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ url('vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ url('js/sb-admin-2.min.js')}}></script>

    <!-- Page level plugins -->
    <script src={{ url('vendor/chart.js/Chart.min.js')}}></script>

    <!-- Page level custom scripts -->
    <script src={{ url('js/demo/chart-area-demo.js')}}></script>
    <script src={{ url('js/demo/chart-pie-demo.js')}}></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>