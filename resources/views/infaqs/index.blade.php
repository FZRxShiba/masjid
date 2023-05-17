@extends('templates.default')
@section('header')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Overview
          </div>
          <h2 class="page-title">
            Infaq
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <span class="d-none d-sm-inline">
              <a href="{{ route('infaqs.create')}}" class="btn btn-primary">
               Masukkan data baru
              </a>
            </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('content')
<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
         @foreach ($infaqs as $infaq)
         
         <tr>
            <td>{{ $infaq->id }}</td>
            <td>{{ $infaq->tanggal }}</td>
            <td>{{ $infaq->keterangan }}</td>
            <td>{{ $infaq->jumlah }}</td>
            
            <td>
              <center><a href="{{route('infaqs.edit', $infaq->id)}}" class="btn btn-primary btn-sm">  Edit  </a></center>
              <form action="{{route('infaq.destroy', $infaq->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
            </td>
          </tr>

          

         @endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection

