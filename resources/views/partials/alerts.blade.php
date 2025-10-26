{{-- SUCCESS --}}
@if (session('success'))
  <div x-data="{ show: true }"
       x-init="setTimeout(() => show = false, 3000)"
       x-show="show"
       x-transition.opacity.duration.300ms
       class="fixed top-20 left-1/2 -translate-x-1/2 z-50">
    <div class="flex items-center gap-3 rounded-xl px-5 py-3
                bg-gradient-to-r from-emerald-500 to-teal-600 text-white
                shadow-xl ring-1 ring-white/10 backdrop-blur-xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="text-sm font-medium">{{ session('success') }}</span>
      <button type="button" @click="show=false" class="ml-2/ -mr-1 text-white/80 hover:text-white">
        ✕
      </button>
    </div>
  </div>
@endif

{{-- ERROR --}}
@if (session('error'))
  <div x-data="{ show: true }"
       x-init="setTimeout(() => show = false, 4000)"
       x-show="show"
       x-transition.opacity.duration.300ms
       class="fixed top-20 left-1/2 -translate-x-1/2 z-50">
    <div class="flex items-center gap-3 rounded-xl px-5 py-3
                bg-gradient-to-r from-red-500 to-pink-600 text-white
                shadow-xl ring-1 ring-white/10 backdrop-blur-xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M12 2a10 10 0 100 20 10 10 0 000-20z" />
      </svg>
      <span class="text-sm font-medium">{{ session('error') }}</span>
      <button type="button" @click="show=false" class="ml-2/ -mr-1 text-white/80 hover:text-white">
        ✕
      </button>
    </div>
  </div>
@endif