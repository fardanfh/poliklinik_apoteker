@include('Layout.header')
@include('Layout.navbar')
@include('Layout.sidebar')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Pasien</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<form>
  <div class="container-fluid">
  <fieldset>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukan Nama">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alamat</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Masukan Alamat">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">No Ponsel</label>
      <input type="number" id="disabledTextInput" class="form-control" placeholder="+62">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </fieldset>
  </div>
</form>
