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
        <div class="card-header header-elements-inline">
          <h5 class="card-title">Enter NIS</h5>
          <div class="header-elements">
            <div class="list-icons">
              <a class="list-icons-item" data-action="collapse"></a>
              <a class="list-icons-item" data-action="reload"></a>
              <a class="list-icons-item" data-action="remove"></a>
            </div>
          </div>
        </div>

        <div class="card-body">
          <form action="/store-pembayaran" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label>NIS:</label>
              <select name="id" class="form-control select-search" id="nis">
                <option value="" disabled selected>NIS</option>
                @foreach ($siswa as $item)
                <option value="{{$item->id}}">{{$item->nis}} - {{$item->nama}}</option>
                @endforeach
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
