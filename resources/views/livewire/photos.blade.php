<?php

use Livewire\Volt\Component;
use App\Models\Photo;
use Livewire\Attributes\{Title};
use App\Models\Pdf;
use App\Models\Video;

new
#[Title('Gallery')]
class extends Component {
    public Photo $photo;

    public $foto;
    public $pdf = '';
    public $video = '';
    public $judul = '';
    public $deskripsi = '';

    public function mount($id)
    {
        $this->photo = Photo::findOrFail($id);
    }

    public function with(): array
    {
    return [
    'pdfs' => Pdf::all(),
    'videos' => Video::all(),
    'photos' => Photo::all(),
    ];
    }

    public function photoClick($photo)
    {
    $this->foto = 'lucu';

    $this->dispatch('open-modal', name: 'photo');
    }

    public function videoClick($judul, $deskripsi, $video)
    {

    $queryString = parse_url($video, PHP_URL_QUERY);
    parse_str($queryString, $queryParams);
    $youtubeId = $queryParams['v'] ?? '';
    $this->video = "https://www.youtube.com/embed/" . $youtubeId;
    $this->judul = $judul;
    $this->deskripsi = $deskripsi;

    $this->dispatch('open-modal', name: 'video', judul: $this->judul, deskripsi: $this->deskripsi, video: $this->video);
    }

    public function pdfClick($judul, $deskripsi, $pdf)
    {
    $this->pdf = $pdf;
    $this->judul = $judul;
    $this->deskripsi = $deskripsi;

    $this->dispatch('open-modal', name: 'pdf', judul: $this->judul, deskripsi: $this->deskripsi, pdf: $this->pdf);
    }

}; ?>

<div>
    @section('header')
    <div class="container">
        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
            <div class="heading relative mb-0 md:w-[725px]">
                <h4 class="!text-white">
                    {{  $photo->judul }}
                </h4>
                <p
                    class="relative mt-7 lg:mb-20 font-medium text-[#BBC0D0] before:absolute before:top-0 before:h-full before:w-1 before:bg-primary ltr:pl-8 ltr:before:left-0 rtl:pr-8 rtl:before:right-0">
                    {{  $photo->deskripsi }}

                </p>
            </div>
        </div>
    </div>
    @endsection

    <section
        class="bg-gradient-to-t from-white/[20%] to-transparent py-14 dark:bg-black lg:py-[100px] text-black dark:text-white">
<div class="container">
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
        @foreach ($photo->photos as $img)
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/' . $img) }}" alt="">
            </div>
        @endforeach
    </div>
</div>

</section>
@include('livewire.home-product')


</div>

