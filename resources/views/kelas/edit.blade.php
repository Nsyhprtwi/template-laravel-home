@extends('home.master');

@section('title', 'Edit Data kelas')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('kelas.update', ['kela' => $kela->id_kelas]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="nama_kelas">NamaKelas</label>
            <input name="nama_kelas" type="text" class="form-control @error('nama_kelas') {{ 'is-invalid' }} @enderror" id="nama_kelas"  placeholder="nama_kelas" value="{{$kela->nama_kelas}}">
          </div>
          @error('nama_kelas')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <label for="kopetensi_keahlian">Kopetensi_keahlian Keahlian</label>
            <input name="kopetensi_keahlian" type="text" class="form-control @error('kopetensi_keahlian') {{ 'is-invalid' }} @enderror" id="kopetensi_keahlian"  placeholder="kopetensi_keahlian" value="{{$kela->kopetensi_keahlian}}">
          </div>
          @error('kopetensi_keahlian')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        </div>
        <div class="card-footer">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="update" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
