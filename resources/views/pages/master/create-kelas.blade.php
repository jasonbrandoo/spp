@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Create Kelas</span>
      </h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
        <a href="/kelas" class="breadcrumb-item">Kelas</a>
        <a href="/create-kelas" class="breadcrumb-item">Create Kelas</a>
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
          @if (isset($kelas))
          <form action="/update-kelas/{{$kelas->id}}" method="POST">
            {{ method_field('PATCH') }}
            <input type="hidden" name="id" value="{{$kelas->id}}">
            @else
            <form action="/store-kelas" method="POST">
              @endif
              {{ csrf_field() }}
              <div class="form-group">
                <label>Tahun Pelajaran:</label>
                <select name="id_tahun_pelajaran" class="form-control form-control-select2" required>
                  <option value="" disabled selected>Tahun</option>
                  @foreach ($tahun as $item)
                  <option value="{{$item->id}}">{{$item->tahun_pelajaran}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Jurusan:</label>
                <select name="id_jurusan" class="form-control form-control-select2" required>
                  @foreach ($jurusan as $item)
                  <option value="{{$item->id}}">{{$item->jurusan}}</option>
                  @endforeach
                  <option value=""></option>
                </select>
              </div>
              <div class="form-group">
                <label>Kelas:</label>
                <input type="text" class="form-control" name="kelas" required>
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
