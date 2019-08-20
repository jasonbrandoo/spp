<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  @include('layouts.partials.head')
</head>

<body>

  {{-- Main Navbar --}}
  @include('layouts.partials.main-navbar')
  {{-- /Main Navbar --}}

  {{-- Page Content --}}
  <div class="page-content">

    {{-- Main Sidebar --}}
    @include('layouts.partials.main-sidebar')
    {{-- /Main Sidebar --}}

    {{-- Maint Content --}}
    <div class="content-wrapper">

      {{-- Page Header --}}
      @yield('page-header')
      {{-- /Page Header --}}

      {{-- Content Area --}}
      @yield('content')
      {{-- /Content Area --}}

      {{-- Footer --}}
      @include('layouts.partials.footer')
      {{-- /Footer --}}

    </div>
    {{-- /Main Content --}}

  </div>
  {{-- /Page Content --}}

  @stack('script')
</body>

</html>
