<div>
    @props(['name', 'title'])

    <div x-data="{ tampil : false }"
    x-show="tampil"
    x-on:buka-modal.window="tampil = true"
    x-on:tutup-modal.window="tampil = false"
    x-on:keydown.escape.window="tampil = false"
    style="display:none;" class="fixed inset-0 z-50" x-transition.duration>

    {{-- Gray Background --}}
    <div x-on:click="tampil = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>

    {{-- Modal Body --}}
    <div class="fixed inset-0 max-w-2xl m-auto overflow-y-auto bg-white rounded" style="max-height:500px">
        @if (isset($title))
            <div class="flex items-center justify-between px-4 py-3 border-b border-gray-300">
                <div class="text-xl text-gray-800">{{ $title }}</div>
                <button x-on:click="$dispatch('close-modal')">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif
        <div class="p-4">
        </div>
    </div>
</div>
</div>
