<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?= $title ?></title> 
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head> 
<body class="min-h-screen flex flex-col bg-gradient-to-br from-slate-900 via-blue-900 to-black text-white">
  @include('partials.navbar')
  <main class="flex-1">
    @yield('content')
  </main>
  @include('partials.footer')
</body>
</html>