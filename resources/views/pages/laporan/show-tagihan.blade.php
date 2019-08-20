@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cetak Tagihan</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements d-none">
      <a href="#" class="btn btn-labeled btn-labeled-right bg-blue-400" id="print">Print <b><i
            class="icon-plus-circle2"></i></b></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="/cetak-tagihan" class="breadcrumb-item">Cetak Tagihan</a>
      </div>

      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="content">
  <div class="card">
    <div class="card-body">
      <table class="table table-bordered no-footer text-center" id="jurusan-tables">
        <thead>
          <tr>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Nominal</th>
            <th>{{$bulan}}</th>
          </tr>
        </thead>
        @foreach ($data as $item)
        <tr>
          <td>{{$item->siswa->nama}}</td>
          <td>{{$item->siswa->kelas->kelas}}</td>
          <td>{{$item->siswa->kelas->jurusan->jurusan}}</td>
          <td>{{$item->siswa->kelas->nominal->jumlah}}</td>
          <td>{{$item->$bulan === null ? 'Belum Lunas' : ''}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection

@push('script')
<script>
  const button = document.getElementById('print');
  button.addEventListener('click', () => {
    const doc = document.querySelector('.card-body').innerHTML;
    document.body.innerHTML = doc;
    window.print();
    window.location.href = '/cetak-tagihan';
  })
</script>
@endpush
