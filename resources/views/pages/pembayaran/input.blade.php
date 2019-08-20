@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Pembayaran</span>
      </h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
        <a href="/pembayaran" class="breadcrumb-item">Pembayaran</a>
      </div>

      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form action="/store-spp" method="POST" id="form">
            {{ csrf_field() }}
            <input type="hidden" name="id_siswa" value="{{$siswa->id}}">
            <div class="form-group">
              <label>Tahun:</label>
              <input type="text" class="form-control"
                value="{{$siswa->nama}} - {{$siswa->kelas->kelas}} - {{$siswa->kelas->jurusan->jurusan}}">
            </div>
            <div class="form-group">
              <label>Bulan:</label>
              <select name="bulan" class="form-control">
                <option value="januari" {{isset($pembayaran->januari) ? 'disabled' : ''}}>Januari</option>
                <option value="februari" {{isset($pembayaran->februari) ? 'disabled' : ''}}>Februari</option>
                <option value="maret" {{isset($pembayaran->maret) ? 'disabled' : ''}}>Maret</option>
                <option value="april" {{isset($pembayaran->april) ? 'disabled' : ''}}>April</option>
                <option value="mei" {{isset($pembayaran->mei) ? 'disabled' : ''}}>Mei</option>
                <option value="juni" {{isset($pembayaran->juni) ? 'disabled' : ''}}>Juni</option>
                <option value="juli" {{isset($pembayaran->juli) ? 'disabled' : ''}}>Juli</option>
                <option value="agustus" {{isset($pembayaran->agustus) ? 'disabled' : ''}}>Agustus</option>
                <option value="september" {{isset($pembayaran->september) ? 'disabled' : ''}}>September</option>
                <option value="november" {{isset($pembayaran->november) ? 'disabled' : ''}}>November</option>
                <option value="desember" {{isset($pembayaran->desember) ? 'disabled' : ''}}>Desember</option>
              </select>
            </div>
            <div class="form-group">
              <label>Nominal:</label>
              <input type="text" class="form-control" name="nominal" value="{{$siswa->kelas->nominal->jumlah}}"
                readonly>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary legitRipple">Submit<i
                  class="icon-paperplane ml-2"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
