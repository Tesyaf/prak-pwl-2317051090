@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-black p-6">
  <div class="mx-auto max-w-7xl">

    @section('table-eyebrow', 'TABEL MATA KULIAH')

    @section('table-head')
      <th class="px-6 py-4 w-20">ID</th>
      <th class="px-6 py-4">
        <span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent font-semibold">
          Nama Mata Kuliah
        </span>
      </th>
      <th class="px-6 py-4">
        <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent font-semibold">
          SKS
        </span>
      </th>
      <th class="px-6 py-4">
        <span class="bg-gradient-to-r from-sky-400 to-blue-500 bg-clip-text text-transparent font-semibold">
          Aksi
        </span>
      </th>
    @endsection

    @section('table-body')
      @forelse ($mks as $mk)
        <tr class="text-white/80 hover:bg-white/5 transition">
          <td class="px-6 py-4">{{ $mk->id }}</td>
          <td class="px-6 py-4 font-semibold">{{ $mk->nama_mk }}</td>
          <td class="px-6 py-4">{{ $mk->sks }}</td>
          <td class="px-6 py-4">
            <div class="flex items-center gap-3">
              <a href="{{ route('matakuliah.edit', $mk->id) }}"
                 class="inline-flex items-center rounded-lg px-3 py-2 text-xs font-semibold text-white
                        bg-gradient-to-r from-sky-500 to-blue-600 hover:opacity-90">
                Edit
              </a>
              <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="inline-flex items-center rounded-lg px-3 py-2 text-xs font-semibold text-white
                               bg-gradient-to-r from-pink-500 to-fuchsia-600 hover:opacity-90">
                  Hapus
                </button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="px-6 py-8 text-center text-white/60">Tidak ada data.</td>
        </tr>
      @endforelse
    @endsection

    @include('partials.table', [
      'title' => 'Daftar Mata Kuliah',
      'subtitle' => 'List mata kuliah yang tersedia.',
      'rows' => $mks
    ])

  </div>
</div>
@endsection
