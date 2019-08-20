@extends('layouts.app')

@section('page-header')
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Clients</span> - Add new</h4>
      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>

  <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
    <div class="d-flex">
      <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
        <a href="/clients" class="breadcrumb-item">Clients</a>
        <a href="/clients" class="breadcrumb-item active">Add new</a>
      </div>

      <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="content">
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Basic layout</h5>
      <div class="header-elements">
        <div class="list-icons">
          <a class="list-icons-item" data-action="collapse"></a>
          <a class="list-icons-item" data-action="reload"></a>
          <a class="list-icons-item" data-action="remove"></a>
        </div>
      </div>
    </div>

    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <form action="/clients" method="POST" id="addClient">
            {{ csrf_field() }}
            <div class="form-group">
              <label>First Name:</label>
              <input type="text" class="form-control" placeholder="Eugene Kopyov" name="firstName">
            </div>
            <div class="form-group">
              <label>Last Name:</label>
              <input type="text" class="form-control" placeholder="Eugene Kopyov" name="lastName">
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="Eugene Kopyov" name="email">
            </div>
            <div class="form-group">
              <label>Phone Number:</label>
              <input type="number" class="form-control" placeholder="Eugene Kopyov" name="phoneNumber">
            </div>
            <div class="form-group">
              <label class="d-block">Gender:</label>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <span class="checked">
                    <input type="radio" class="form-input-styled" name="gender" checked="" value="man" data-fouc="">
                  </span>
                  Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <label class="form-check-label">
                  <span>
                    <input type="radio" class="form-input-styled" name="gender" value="female" data-fouc="">
                  </span>
                  Female
                </label>
              </div>
            </div>
            {{-- <div class="form-group">
              <label>Your avatar:</label>
              <div class="uniform-uploader">
                <input type="file" class="form-control" data-fouc="">
                <span class="filename" style="user-select: none;">No file selected</span>
                <span class="action btn bg-pink-400 legitRipple" style="user-select: none;">Choose File</span>
              </div>
              <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
            </div> --}}
            <div class="text-right">
              <button type="submit" class="btn btn-primary legitRipple">Submit form <i
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
  const form = document.querySelector('#addClient');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const data = new FormData(form);
    for (const iterator of data) {
      console.log(iterator)
    }
    console.log({form, data})
  })
</script>
@endpush
