<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Satu Data Sulteng — Portal Satu Data Provinsi Sulawesi Tengah')</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

@yield('styles')
</head>
<body class="page-fade">

{{-- Loading Screen --}}
@include('loading_screen.loading_screen')

<div id="content">
  @include('navbar.navbar')
  
  @yield('content')
  
  @yield('footer')
</div>

@yield('scripts')

</body>
</html>
