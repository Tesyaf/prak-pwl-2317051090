<div class="rounded-3xl bg-white/[0.04] backdrop-blur-xl shadow-2xl ring-1 ring-white/10 overflow-hidden p-8">
  <div class="mb-6">
    <p class="text-xs tracking-widest text-white/50">@yield('table-eyebrow', 'USERS TABLE')</p>
    <h2 class="mt-1 text-2xl font-bold tracking-tight text-white">
      {{ $title ?? 'Daftar' }}
    </h2>
    @if(!empty($subtitle))
      <p class="mt-1 text-sm text-white/60">{{ $subtitle }}</p>
    @endif
  </div>

  <div class="overflow-x-auto">
    <table class="w-full text-left">
      <thead class="text-[11px] uppercase tracking-wider">
        <tr class="text-white/70">
          @yield('table-head')
        </tr>
      </thead>

      <tbody class="text-sm divide-y divide-white/5">
        @yield('table-body')
      </tbody>
    </table>
  </div>

  @hasSection('table-pagination')
    <div class="pt-6">
      @yield('table-pagination')
    </div>
  @else
    @if(isset($rows) && is_object($rows) && method_exists($rows, 'links'))
      <div class="pt-6">
        {{ $rows->links() }}
      </div>
    @endif
  @endif
</div>