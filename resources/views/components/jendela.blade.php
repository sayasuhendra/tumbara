@props(['name'])

<div x-data="{ show : false , name : '{{ $name }}' }"
    x-show="show"
    x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    style="display:none;" class="fixed inset-0 z-50" x-transition.duration>

    {{-- Gray Background --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>

    {{-- Modal Body --}}
    <div class="fixed inset-0 max-w-2xl m-auto overflow-y-auto bg-white rounded" style="max-height:500px">

        {{ $body }}
    </div>
</div>
