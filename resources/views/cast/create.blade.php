@extends('template.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Cast</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('cast.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Enter Nama Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Umur</label>
                    <input type="number" name="umur" id="umur" placeholder="Enter Umur Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bio</label>
                    <textarea name="bio" id="bio"  cols="30" rows="10" placeholder="Enter Biodata Anda"></textarea>
                  </div>
          </div>
          <!--/.col (left) -->

          <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
                  <button type="reset" class="btn btn-sm btn-primary mt-2">Reset</button>
                  <a href="{{ route('genre.index') }}" class="btn btn-sm btn-primary mt-2">Kembali</a>
              </form>
          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection