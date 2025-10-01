@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-900 to-black p-6">
  <div class="mx-auto max-w-7xl">

    @section('table-eyebrow', 'USERS TABLE')

    @section('table-head')
      <th class="px-6 py-4 w-20">ID</th>
      <th class="px-6 py-4">
        <span class="bg-gradient-to-r from-pink-500 to-fuchsia-500 bg-clip-text text-transparent font-semibold">Nama</span>
      </th>
      <th class="px-6 py-4">
        <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent font-semibold">NPM</span>
      </th>
      <th class="px-6 py-4">
        <span class="bg-gradient-to-r from-sky-400 to-blue-500 bg-clip-text text-transparent font-semibold">Kelas</span>
      </th>
    @endsection

    @section('table-body')
      @forelse($users as $u)
        <tr class="text-white/80 hover:bg-white/5 transition">
          <td class="px-6 py-4">{{ $u->id }}</td>
          <td class="px-6 py-4 font-semibold">{{ Str::upper($u->nama) }}</td>
          <td class="px-6 py-4">{{ $u->npm }}</td>
          <td class="px-6 py-4">
            <span class="inline-flex items-center gap-2">
              <span class="size-2 rounded-full bg-gradient-to-tr from-violet-500 to-fuchsia-500"></span>
              {{ $u->nama_kelas }}
            </span>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="px-6 py-8 text-center text-white/60">Tidak ada data.</td>
        </tr>
      @endforelse
    @endsection

    @include('partials.table', [
      'title' => 'Daftar Pengguna',
      'subtitle' => 'List pengguna yang terdaftar pada sistem kamu.',
      'rows' => $users
    ])

  </div>
</div>
@endsection