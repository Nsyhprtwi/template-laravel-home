@extends('home.master');

@section('title', 'Edit Data Genre')

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('spp.update', $spps->id_spp) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input name="tahun" type="number" class="form-control @error('tahun') {{ 'is-invalid' }} @enderror" id="tahun"  placeholder="tahun" value="{{$spps->tahun}}">
          </div>
          @error('tahun')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
          <label for="nominal">Nominal</label>
            <input name="nominal" type="number" class="form-control @error('nominal') {{ 'is-invalid' }} @enderror" id="nominal"  placeholder="nominal" value="{{$spps->nominal}}">
          </div>
          @error('nominal')
            <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
          @enderror
        </div>
        </div>
        <div class="px-3 d-flex justify-content-between align-items-center">
          <button type="reset" class="btn btn-warning">Reset</button>
          <button type="update" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
