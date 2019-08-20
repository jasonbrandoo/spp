@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Create Siswa</span>
      </h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
        <a href="/siswa" class="breadcrumb-item">Siswa</a>
        <a href="/create-siswa" class="breadcrumb-item">Create Siswa</a>
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
          @if (isset($siswa))
          <form action="/update-siswa/{{$siswa->id}}" method="POST">
            {{ method_field('PATCH') }}
            <input type="hidden" name="id" value="{{$siswa->id}}">
            @else
            <form action="/store-siswa" method="POST">
              @endif
              {{ csrf_field() }}
              <div class="form-group">
                <label>Kelas:</label>
                <select name="id_kelas" class="form-control form-control-select2" required>
                  <option value="" disabled selected>Kelas</option>
                  @foreach ($kelas as $item)
                  <option value="{{$item->id}}">{{$item->kelas}} - {{$item->jurusan->jurusan}} -
                    {{$item->tahun->tahun_pelajaran}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Nis:</label>
                <input type="text" class="form-control" name="nis" required>
              </div>
              <div class="form-group">
                <label>Nama:</label>
                <input type="text" class="form-control" name="nama" required>
              </div>
              <div class="form-group">
                <label>Telp:</label>
                <input type="text" class="form-control" name="no_telp" required>
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
