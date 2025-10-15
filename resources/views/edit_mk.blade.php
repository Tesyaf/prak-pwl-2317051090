@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-black flex items-center justify-center p-6">
  <div class="w-full max-w-md">
    <!-- Card -->
    <div class="rounded-3xl bg-white/[0.05] backdrop-blur-xl shadow-2xl ring-1 ring-white/10 p-8">
      <h1 class="text-2xl font-bold text-white mb-6">Edit Mata Kuliah</h1>

      <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
          <label for="nama_mk" class="block text-sm font-medium text-white/70 mb-1">Nama Mata Kuliah</label>
          <input
            type="text"
            id="nama_mk"
            name="nama_mk"
            value="{{ old('nama_mk', $mk->nama_mk) }}"
            required
            class="w-full rounded-xl bg-white/5 border border-white/10 text-white px-4 py-2
                   focus:ring-2 focus:ring-fuchsia-500 outline-none"
          >
          @error('nama_mk')
            <p class="mt-1 text-xs text-pink-300">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="sks" class="block text-sm font-medium text-white/70 mb-1">SKS</label>
          <input
            type="number"
            id="sks"
            name="sks"
            value="{{ old('sks', $mk->sks) }}"
            min="0" step="1" required
            class="w-full rounded-xl bg-white/5 border border-white/10 text-white px-4 py-2
                   focus:ring-2 focus:ring-amber-400 outline-none"
          >
          @error('sks')
            <p class="mt-1 text-xs text-pink-300">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <button type="submit"
            class="w-full rounded-xl px-4 py-3 text-sm font-semibold text-blue-900 bg-white
                   hover:opacity-90 shadow-lg shadow-fuchsia-500/20 transition">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
