@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - User</h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements d-none">
      <a href="/create-user" class="btn btn-labeled btn-labeled-right bg-blue-400">Add <b><i
            class="icon-plus-circle2"></i></b></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="/" class="breadcrumb-item">Dashboard</a>
      </div>

      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="content">
  <div class="card">
    <div class="card-header">
      <h6 class="card-title">Jurusan</h6>
    </div>

    <div class="card-body">
      <table class="table datatable-select-checkbox no-footer text-center" id="client-tables">
        <thead>
          <tr>
            <th>ID</th>
            <th>Jurusan</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection
