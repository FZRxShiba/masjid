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
        <form action="{{ route('infaqs.update', $infaq->id) }}" class="" method="post">
            @csrf
            @method('PUT')
             
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <div class="input-icon mb-2">
                    <input class="form-control " name="tanggal" placeholder="Silahkan pilih tanggal" value="{{ $infaq->tanggal }}" id="datepicker-icon" value="2023-05-17">
                    <span class="input-icon-addon"><!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                    </span>
                  </div>
              <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" name="example-text-input" placeholder="Silahkan masukkan keterangan" value="{{ $infaq->keterangan }}" >
              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" name="example-text-input" placeholder="Silahkan masukkan jumlah" value="{{ $infaq->jumlah }}">
              </div>
              

              <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
        </form>
    </div>
</div>
@endsection