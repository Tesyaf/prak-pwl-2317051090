<nav class="sticky top-0 z-50 bg-white/5 backdrop-blur-xl ring-1 ring-white/10">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="h-16 flex items-center justify-between">
      <a href="{{ url('/') }}" class="flex items-center gap-2">
        <span class="text-white font-semibold tracking-wide">Prak PWL</span>
      </a>

      <div class="flex items-center gap-6">
        <a href="{{ route('matakuliah.index') }}"
           class="text-sm {{ request()->routeIs('matakuliah.index') ? 'text-white' : 'text-white/70 hover:text-white' }}">
          Matakuliah
        </a>
        <a href="{{ route('user.index') }}"
           class="text-sm {{ request()->routeIs('user.index') ? 'text-white' : 'text-white/70 hover:text-white' }}">
          Daftar Pengguna
        </a>
        <a href="{{ route('user.create') }}"
           class="text-sm {{ request()->routeIs('user.create') ? 'text-white' : 'text-white/70 hover:text-white' }}">
          Buat Pengguna
        </a>
      </div>
    </div>
  </div>
</nav>
