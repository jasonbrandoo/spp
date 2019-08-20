@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Jenis Bayar</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements d-none">
      <a href="/create-jenis-bayar" class="btn btn-labeled btn-labeled-right bg-blue-400">Add <b><i
            class="icon-plus-circle2"></i></b></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="/jenis-bayar" class="breadcrumb-item">Jenis Bayar</a>
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
      <h6 class="card-title">Tahun Pelajaran</h6>
    </div>

    <div class="card-body">
      <table class="table table-bordered datatable-select-checkbox no-footer text-center" id="jurusan-tables">
        <thead>
          <tr>
            <th>Id</th>
            <th>Kelas</th>
            <th>Jumlah</th>
            <th></th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection

@push('script')
<script>
  $(() => {
    $('#jurusan-tables').DataTable({
      autoWidth: false,
      columnDefs: [{
        orderable: false,
        width: 100,
      }],
      dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
      language: {
        search: '<span>Search:</span> _INPUT_',
        searchPlaceholder: 'Type to Search...',
        lengthMenu: '<span>Show:</span> _MENU_',
        paginate: { 
          'first': 'First', 
          'last': 'Last', 
          'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
          'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' 
        }
      },
      processing: true,
      serverSide: true,
      ajax: '/data-jenis-bayar',
      columns: [
        { data: 'id' },
        { data: 'id_kelas', render: (data, type, row) => `<a href="/edit-jenis-bayar/${row.id}">${row.kelas.kelas} - ${row.kelas.jurusan.jurusan} - ${row.kelas.tahun.tahun_pelajaran}</a>` },
        { data: 'jumlah' },
        { data: 'id', render: (data, type, row) => `<a href="/delete-jenis-bayar/${row.id}"><button class="btn btn-danger">Delete</button></a>` },
      ],
    });
  });
</script>
@endpush
