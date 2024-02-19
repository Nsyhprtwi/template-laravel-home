@extends('home.master')

@section('title', 'Tambah Data Kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input name="nama_kelas" type="text" min="2000" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama_kelas"  placeholder="nama_kelas">
          </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
             <label for="kopetensi_keahlian">Kopetensi Keahlian</label>
             <input name="kopetensi_keahlian" type="text" min="10000" class="form-control @error('kopetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kopetensi_keahlian"  placeholder="kopetensi_keahlian">
      </div>
      @error('kopetensi_keahlian')
        <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
      @enderror
    </div>
        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
