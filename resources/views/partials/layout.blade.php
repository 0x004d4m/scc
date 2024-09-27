<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | SCC</title>
    @include('partials.head')
    @stack('after_styles')
</head>

<body class="index-page">
  @include('partials.header')

  <main class="main">
    @yield('main')
  </main>

  @include('partials.footer')
  @include('partials.scripts')
  @stack('after_scripts')
</body>

</html>
