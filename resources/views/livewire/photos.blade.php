<?php

use Livewire\Volt\Component;
use App\Models\Photo;
use Livewire\Attributes\{Title};

new
#[Title('Gallery')]
class extends Component {
    public Photo $photo;

    public function mount($id)
    {
        $this->photo = Photo::findOrFail($id);
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

</div>

