<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 via-blue-900 to-black text-white">

  <div class="text-center space-y-6 p-10 rounded-3xl shadow-2xl bg-white/5 backdrop-blur-md border border-white/10">
    
    <img src="{{ asset('images/profil.jpg') }}" 
         alt="Foto Profil" 
         class="w-40 h-40 object-cover rounded-full border-4 border-blue-400 shadow-lg mx-auto">
    
    <h1 class="text-2xl font-bold">{{$nama}}</h1>
    
    <p class="text-lg text-blue-300 font-medium">Kelas: {{$kelas}}</p>
    
    <p class="text-lg text-gray-300">NPM: {{$npm}}</p>
  </div>

</body>
</html>