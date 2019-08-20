@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Tahun Pelajaran</span>
      </h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="/tahun-pelajaran" class="breadcrumb-item">Tahun Pelajaran</a>
        <a href="/create-tahun-pelajaran" class="breadcrumb-item">Create Tahun Pelajaran</a>
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
          @if (isset($tahun))
          <form action="/update-tahun-pelajaran/{{$tahun->id}}" method="POST">
            {{ method_field('PATCH') }}
            <input type="hidden" name="id" value="{{$tahun->id}}">
            @else
            <form action="/store-tahun-pelajaran" method="POST">
              @endif
              {{ csrf_field() }}
              <div class="form-group">
                <label>Tahun Pelajaran:</label>
                <input type="text" class="form-control" name="tahun_pelajaran" required>
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
