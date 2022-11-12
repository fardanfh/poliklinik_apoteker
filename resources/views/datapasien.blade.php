@include('Layout.header')
@include('Layout.navbar')
@include('Layout.sidebar')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No HP</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Aep</td>
              <td>Cimahi</td>
              <td>08615287928</td>
              <td>
                <a href="#" class="btn btn-warning text-light">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Ujang</td>
              <td>Cisarua</td>
              <td>089811762675</td>
              <td>
                <a href="#" class="btn btn-warning text-light">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Angga</td>
              <td>Bandung</td>
              <td>089117787823</td>
              <td>
                <a href="#" class="btn btn-warning text-light">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="container-fluid">
      <a class="btn btn-primary" href="inputpasien" role="button">Tambah Data</a>
    </div>
  </div>

