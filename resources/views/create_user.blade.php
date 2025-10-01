@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-black flex items-center justify-center p-6">
  <div class="w-full max-w-md">
    <!-- Card -->
    <div class="rounded-3xl bg-white/[0.05] backdrop-blur-xl shadow-2xl ring-1 ring-white/10 p-8">
      <h1 class="text-2xl font-bold text-white mb-6">Buat Pengguna Baru</h1>

      <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Nama -->
        <div>
          <label for="nama" class="block text-sm font-medium text-white/70 mb-1">Nama</label>
          <input type="text" id="nama" name="nama"
            class="w-full rounded-xl bg-white/5 border border-white/10 text-white px-4 py-2 focus:ring-2 focus:ring-fuchsia-500 outline-none">
        </div>

        <!-- NPM -->
        <div>
          <label for="npm" class="block text-sm font-medium text-white/70 mb-1">NPM</label>
          <input type="text" id="npm" name="npm"
            class="w-full rounded-xl bg-white/5 border border-white/10 text-white px-4 py-2 focus:ring-2 focus:ring-amber-400 outline-none">
        </div>

        <!-- Kelas -->
        <div>
          <label for="kelas_id" class="block text-sm font-medium text-white/70 mb-1">Kelas</label>
          <select id="kelas_id" name="kelas_id"
            class="w-full rounded-xl bg-white/5 border border-white/10 text-white px-4 py-2 focus:ring-2 focus:ring-sky-500 outline-none">
            @foreach ($kelas as $kelasItem)
              <option value="{{ $kelasItem->id }}" class="bg-slate-900 text-white">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
          </select>
        </div>

        <div>
          <button type="submit"
            class="w-full rounded-xl px-4 py-3 text-sm font-semibold text-blue-900 bg-white hover:opacity-90 shadow-lg shadow-fuchsia-500/20 transition">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
