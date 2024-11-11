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
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Halaman Admin</div>
            </a>
            <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('admin') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="true" aria-controls="collapseTwo">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>Data</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Kelola Data:</h6>
                      <a class="collapse-item" href="{{ route('admin.datapetugas') }}">Data Petugas</a>
                      <a class="collapse-item" href="{{ route('admin.kategori') }}">Data Kategori</a>   
                  </div>
              </div>
          </li>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
          <!-- Divider -->
          <hr class="sidebar-divider">

          <li class="nav-item active">
              <a class="nav-link" href="{{ route('admin.laporan') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Laporan Transaksi</span></a>
          </li>
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Main Content -->
                <div class="container-fluid">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label for="produk_id">Kode Produk</label>
                                        </div>
                                        <div class="col-md-8">
                                            <form method="GET">
                                                <div class="d-flex">
                                                    <select name="produk_id" class="form-control">
                                                        @foreach ($produk as $item)
                                                            <option value="{{ $item->id }}">{{ $item->id. '. ' .$item->name_produk }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="submit" class="btn btn-primary">Pilih</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <form action="{{ route('admin.transaksi.detail.create') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="transaksi_id" value="{{ Request::segment(3) }}">
                                        <input type="hidden" name="produk_id" value="{{ isset($p_detail) ? $p_detail->id : '' }}">
                                        <input type="hidden" name="produk_name" value="{{ isset($p_detail) ? $p_detail->name_produk : '' }}">
                                        <input type="hidden" name="subtotal" value="{{ $subtotal }}">

                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label for="nama_produk">Nama Produk</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" disabled value="{{ isset($p_detail) ? $p_detail->name_produk : '' }}" class="form-control" name="nama_produk">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label for="harga_satuan">Harga Satuan</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" disabled value="{{ isset($p_detail) ? formatRupiah($p_detail->harga) : '' }}" class="form-control" name="harga_satuan">
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label for="qty">QTY</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="d-flex">
                                                <a href="?produk_id={{ request('produk_id') }}&act=min&qty={{ $qty }}" class="btn btn-primary"><i class="fas fa-minus"></i></a>
                                                <input type="number" value="{{ $qty }}" class="form-control" name="qty">
                                                <a href="?produk_id={{ request('produk_id') }}&act=plus&qty={{ $qty }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-8 offset-md-4">
                                            <h5>Sub Total: {{ formatRupiah($subtotal) }}</h5>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-8 offset-md-4">
                                            <a href="#" class="btn btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                                            <button type="submit" class="btn btn-primary">Tambah <i class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>QTY</th>
                                                <th>Subtotal</th>
                                                <th>#</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaksiDetail as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->produk_name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ formatRupiah($item->subtotal) }}</td>
                                                <td>
                                                    <a href="{{ route('admin.transaksi.detail.delete', $item->id) }}"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="/admin/detail/selesai{{ Request::segment(3) }}" class="btn btn-success"><i class="fas fa-check"></i> Selesai</a>
                                    <a href="" class="btn btn-info"><i class="fas fa-file"></i> Pending</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-2">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="GET">
                                        <div class="form-group">
                                            <label for="total_belanja">Total Belanja</label>
                                            <input type="text" disabled value="{{ formatRupiah($transaksi->total) }}" name="total_belanja" class="form-control" id="total_belanja">
                                        </div>
                                        <div class="form-group">
                                            <label for="dibayarkan">Dibayarkan</label>
                                            <input type="number" name="dibayarkan" value="{{ request('dibayarkan') }}" class="form-control" id="dibayarkan">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                                        <hr>
                                        <div class="form-group">
                                            <label for="kembalian">Uang Kembalian</label>
                                            <input type="number" disabled value="{{ $kembalian }}" disabled name="kembalian" class="form-control" id="kembalian">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

