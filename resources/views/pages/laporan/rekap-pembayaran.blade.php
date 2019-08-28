@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Cetak Tagihan</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
        <a href="/rekap-pembayaran" class="breadcrumb-item">Rekap Pembayaran</a>
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
            <th>Nominal</th>
            <th>Januari</th>
            <th>Februari</th>
            <th>Maret</th>
            <th>April</th>
            <th>Mei</th>
            <th>Juni</th>
            <th>Juli</th>
            <th>Agustus</th>
            <th>September</th>
            <th>Oktober</th>
            <th>November</th>
            <th>Desember</th>
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
      scrollX: true,
      columnDefs: [{
        orderable: false,
        width: 100,
      }],
      dom: '<"datatable-header"flB><"datatable-scroll-wrap"t><"datatable-footer"ip>',
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
      ajax: '/data-tagihan',
      columns: [
        { data: 'siswa.nama' },
        { data: 'nominal' },
        { data: 'januari', render:(data, type, row) => row.januari === null ? 'Belum bayar' : 'Lunas' },
        { data: 'februari', render:(data, type, row) => row.februari === null ? 'Belum bayar' : 'Lunas' },
        { data: 'maret', render:(data, type, row) => row.maret === null ? 'Belum bayar' : 'Lunas' },
        { data: 'april', render:(data, type, row) => row.april === null ? 'Belum bayar' : 'Lunas' },
        { data: 'mei', render:(data, type, row) => row.mei === null ? 'Belum bayar' : 'Lunas' },
        { data: 'juni', render:(data, type, row) => row.juni === null ? 'Belum bayar' : 'Lunas' },
        { data: 'juli', render:(data, type, row) => row.juli === null ? 'Belum bayar' : 'Lunas' },
        { data: 'agustus', render:(data, type, row) => row.agustus === null ? 'Belum bayar' : 'Lunas' },
        { data: 'september', render:(data, type, row) => row.september === null ? 'Belum bayar' : 'Lunas' },
        { data: 'oktober', render:(data, type, row) => row.oktober === null ? 'Belum bayar' : 'Lunas' },
        { data: 'november', render:(data, type, row) => row.november === null ? 'Belum bayar' : 'Lunas' },
        { data: 'desember', render:(data, type, row) => row.desember === null ? 'Belum bayar' : 'Lunas' },
      ],
    });

    $('.dt-button').addClass('btn btn-primary')
  });
</script>
@endpush
