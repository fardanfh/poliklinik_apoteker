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
            <h1 class="m-0">Data Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Dokter</li>
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
              <th scope="col">id dokter</th>
              <th scope="col">id poli</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Alamat</th>
              <th scope="col">No Ponsel</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $item )
          <tr>
            <td>{{ $item->id_dokter}}</td>
            <td>{{ $item->id_poli}}</td>
            <td>{{ $item->nama_dokter }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->no_ponsel }}</td>
              <td>
                <a href="#" class="btn btn-warning text-light">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
              </td>
              @endforeach
            </tr>
          </tbody>
        </table>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="container-fluid">
      <a class="btn btn-primary" href="/dokter/create" role="button">Tambah Data</a>
    </div>
  </div>

