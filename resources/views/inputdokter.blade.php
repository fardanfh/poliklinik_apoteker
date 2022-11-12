@include('Layout.header')
@include('Layout.navbar')
@include('Layout.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Dokter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<form action="/dokter" method="post">
  @method('post')
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
  <div class="container-fluid">
  <fieldset>
    <div class="mb-3">
      <label for="nama" class="form-label">Id dokter</label>
      <input type="text" class="form-control" name="id_dokter" id="id_dokter" placeholder="Masukan Nama">
    </div>

    <div class="mb-3">
      <label for="nama" class="form-label">Id Poli</label>
      <input type="text" class="form-control" name="id_poli" id="id_poli" placeholder="Masukan Nama">
    </div>

    <div class="mb-3">
      <label for="nama" class="form-label">Nama Dokter</label>
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama">
    </div>

    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">No Ponsel</label>
      <input type="number" class="form-control" name="no_ponsel" id="no_ponsel" placeholder="+62">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </fieldset>
  </div>
</form>
