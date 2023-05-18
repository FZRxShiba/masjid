@extends('templates.default')
@section('header')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->

          <h2 class="page-title">
            Data Baru Infaq
          </h2>
        </div>
        <!-- Page title actions -->
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('infaqs.store')}}" class="" method="post">
            @csrf
             

              <div class="mb-3">
                <label class="form-label @error('keterangan')
                is-invalid
              @enderror">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" name="example-text-input" placeholder="Silahkan masukkan keterangan">
                @error('keterangan')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
              </div>
              <div class="mb-3">
                <label class="form-label @error('jumlah')
                is-invalid
              @enderror">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" name="example-text-input" placeholder="Silahkan masukkan jumlah">
                @error('jumlah')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror

              </div>
              

              <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
        </form>
    </div>
</div>
@endsection