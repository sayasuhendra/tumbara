{{-- <x-jendela name="photo" title="Photo" wire:model="foto">
    <x-slot:body>
        <h1>{{ $foto }}</h1>
        </x-slot>
</x-jendela> --}}
<div>

<x-jendela name="video">
    <x-slot:body>
        <div class="flex content-center justify-between px-4 py-3 text-center border-b border-gray-300">
            <div class="text-xl text-gray-800">{{ $judul }}</div>
            <button x-on:click="$dispatch('close-modal')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-4">
            <iframe x-ref="mediaFrame" class="rounded-lg" width="100%" src="{{ $video }}" frameborder="0"
                style="aspect-ratio: 16 / 9;" allowfullscreen></iframe>
        </div>
        <div class="px-4 text-gray-800 text-md">{{ $deskripsi }}</div>
        </x-slot>
</x-jendela>
<x-jendela name="pdf">
    <x-slot:body>
        <div class="flex content-center justify-between px-4 py-3 text-center border-b border-gray-300">
            <div class="text-xl text-gray-800">{{ $judul }}</div>
            <button x-on:click="$dispatch('close-modal')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="p-4">
            <iframe x-ref="mediaFrame" class="rounded-lg" style="min-height: 600px" src="{{ url('/storage/' . $pdf) }}"
                width="100%" height="100%" @load="loading = false"></iframe>

        </div>
        <div class="px-4 text-gray-800 text-md">{{ $deskripsi }}</div>
        </x-slot>
</x-jendela>

<section class="bg-gradient-to-t from-white/[55%] to-transparent py-14 dark:bg-black lg:py-[100px]">
<div class="container">
        <div class="text-center heading">
            <h6 class="!text-primary">Product and Galery</h6>
            <h4>Our Product and Galery Collections</h4>
        </div>
    </div>
    <div class="container">
        <div class="overflow-x-auto">
            <ul
                class="filters portfolio-filter mx-auto flex w-max gap-7 whitespace-nowrap pb-2.5 font-bold dark:text-white">
                <li class="active filter" data-filter="all">
                    <button type="button"
                        class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                        {{ __('galery.all') }}
                    </button>
                </li>

                <li class="filter" data-filter="photo">
                    <button type="button"
                        class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                        {{ __('galery.photo') }}
                    </button>
                </li>
                <li class="filter" data-filter="video">
                    <button type="button"
                        class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                        VIDEO
                    </button>
                </li>
                <li class="filter" data-filter="pdf">
                    <button type="button"
                        class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                        PDF
                    </button>
                </li>

            </ul>
        </div>
        <div class="grid gap-8 mt-10 projects sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($photos as $photo)
            <div class="project" data-filter="photo">
                <div
                    class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                    <a href="/galery/photos/{{ $photo->id }}"
                        class="absolute top-0 w-full h-full ltr:left-0 rtl:right-0"></a>
                    <img src="{{ url('/storage/' . $photo->cover) }}" alt="project-1"
                        class="object-cover w-full h-52 rounded-t-3xl" />
                    <div class="p-5 text-sm font-bold">
                        <h6 class="mb-1 text-black dark:text-white">{{ $photo->judul }}</h6>
                        <p>{{ $photo->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($pdfs as $pdf)
            <div class="project" data-filter="pdf">
                <div
                    class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                    <div wire:click="pdfClick('{{ $pdf->judul }}', '{{ $pdf->deskripsi }}', '{{ $pdf->pdf }}')"
                        class="absolute top-0 w-full h-full ltr:left-0 rtl:right-0"></div>
                    <img src="{{ url('/storage/' . $pdf->cover) }}" alt="project-1"
                        class="object-cover w-full h-52 rounded-t-3xl" />
                    <div class="p-5 text-sm font-bold">
                        <h6 class="mb-1 text-black dark:text-white">{{ $pdf->judul }}</h6>
                        <p>{{ $pdf->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach ($videos as $video)
            <div class="project" data-filter="video">
                <div
                    class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                    <div wire:click="videoClick('{{ $video->judul }}', '{{ $video->deskripsi }}', '{{ $video->link }}')"
                        class="absolute top-0 w-full h-full ltr:left-0 rtl:right-0"></div>
                    <img src="{{ url('/storage/' . $video->cover) }}" alt="project-1"
                        class="object-cover w-full h-52 rounded-t-3xl" />
                    <div class="p-5 text-sm font-bold">
                        <h6 class="mb-1 text-black dark:text-white">{{ $video->judul }}</h6>
                        <p>{{ $video->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
</section>
</div>
