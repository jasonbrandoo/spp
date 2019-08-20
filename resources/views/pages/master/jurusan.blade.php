@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Jurusan</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
    <div class="header-elements d-none">
      <a href="/create-jurusan" class="btn btn-labeled btn-labeled-right bg-blue-400">Add <b><i
            class="icon-plus-circle2"></i></b></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="/jurusan" class="breadcrumb-item">Jurusan</a>
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
            <th>ID</th>
            <th>Jurusan</th>
            <th>Kode Jurusan</th>
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
      ajax: '/data-jurusan',
      columns: [
        { data: 'id' },
        { data: 'jurusan', render: (data, type, row) => `<a href="/edit-jurusan/${row.id}">${row.jurusan}</a>` },
        { data: 'kode_jurusan' },
        { data: 'id', render: (data, type, row) => `<a href="/delete-jurusan/${row.id}"><button class="btn btn-danger">Delete</button></a>` },
      ],
    });
  });
</script>
@endpush
