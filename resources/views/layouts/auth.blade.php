<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  @include('layouts.partials.head')
</head>

<body>

  {{-- Page Content --}}
  <div class="page-content">

    {{-- Maint Content --}}
    <div class="content-wrapper">

      {{-- Content Area --}}
      @yield('content')
      {{-- /Content Area --}}

    </div>
    {{-- /Main Content --}}

  </div>
  {{-- /Page Content --}}

  @stack('script')
</body>

</html>
