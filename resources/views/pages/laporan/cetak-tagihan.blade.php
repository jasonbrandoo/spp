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
          <form action="/store-tagihan" method="POST">
            {{ csrf_field() }}
            <div class="form-group" id="select-bulan">
              <label>Bulan:</label>
              <select name="bulan" class="form-control select-search" id="nis">
                <option value="januari">Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="april">April</option>
                <option value="mei">Mei</option>
                <option value="juni">Juni</option>
                <option value="juli">Juli</option>
                <option value="agustus">Agustus</option>
                <option value="september">September</option>
                <option value="oktober">Oktober</option>
                <option value="november">November</option>
                <option value="desember">Desember</option>
              </select>
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

@push('script')
<script>
  $(() => {
      $('#nis').select2();
    })
</script>
@endpush
