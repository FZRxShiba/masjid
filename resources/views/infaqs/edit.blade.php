@extends('templates.default')
@section('header')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->

          <h2 class="page-title">
            Edit Data Infaq
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
        <form action="{{ route('infaqs.update', $infaqs->id) }}" class="" method="post">
            @csrf
            @method('PUT')

              <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" name="example-text-input" placeholder="Silahkan masukkan keterangan" value="{{ $infaqs->keterangan }}" >
              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" name="example-text-input" placeholder="Silahkan masukkan jumlah" value="{{ $infaqs->jumlah }}">
              </div>
              

              <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
        </form>
    </div>
</div>
@endsection