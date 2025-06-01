<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Title};

new
#[Title('Destinations')]
class extends Component {
    //
}; ?>

<div>
    @section('header')

    <div class="container">
        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
            <div class="heading relative mb-0 md:w-[725px]">
                <h4 class="!text-white">
                    {{  __('destination.header')}}
                </h4>
                <p
                    class="relative mt-7 font-medium text-[#BBC0D0] before:absolute before:top-0 before:h-full before:w-1 before:bg-primary ltr:pl-8 ltr:before:left-0 rtl:pr-8 rtl:before:right-0">
                    {{  __('destination.description')}}
                </p>
            </div>
        </div>
    </div>
    @endsection
    <section class="bg-gradient-to-t from-white/[55%] to-transparent py-14 dark:bg-black lg:py-[100px]">

        <div class="container">
            <div class="overflow-x-auto">
                <ul
                    class="filters portfolio-filter mx-auto flex w-max gap-7 whitespace-nowrap pb-2.5 font-bold dark:text-white">
                    <li class="active filter" data-filter="all">
                        <button type="button"
                            class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                    {{  __('destination.destination.all')}}

                        </button>
                    </li>
                    <li class="filter" data-filter="australia">
                        <button type="button"
                            class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                            Australia
                        </button>
                    </li>
                    <li class="filter" data-filter="canada">
                        <button type="button"
                            class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                            Canada
                        </button>
                    </li>
                    <li class="filter" data-filter="malaysia">
                        <button type="button"
                            class="rounded-[10px] py-4 px-5 leading-5 transition text-white capitalize bg-black btn dark:bg-white dark:text-black hover:bg-black">
                            Malaysia
                        </button>
                    </li>

                </ul>
            </div>
            <div class="grid gap-8 mt-10 projects sm:grid-cols-2 lg:grid-cols-3">
                <div class="project" data-filter="australia">
                    <div
                        class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                        <a href="{{ url('/australia') }}"
                            class="absolute top-0 w-full h-full ltr:left-0 rtl:right-0"></a>
                        <img src="{{ url('/storage/images/ausie/keong.jpg') }}"
                            alt="project-1" class="object-cover w-full h-52 rounded-t-3xl" />
                        <div class="p-5 text-sm font-bold">
                            <h6 class="mb-1 text-black dark:text-white">
                                {{  __('destination.destination.opera')}}
                            </h6>
                            <p>Australia</p>
                        </div>
                    </div>
                </div>
                <div class="project" data-filter="malaysia">
                    <div
                        class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                        <a href="{{ url('/malaysia') }}"
                            class="absolute top-0 w-full h-full ltr:left-0 rtl:right-0"></a>
                        <img src="{{ url('/storage/images/malay/petronas.jpg') }}"
                            alt="project-1" class="object-cover w-full h-52 rounded-t-3xl" />
                        <div class="p-5 text-sm font-bold">
                            <h6 class="mb-1 text-black dark:text-white">
                                {{  __('destination.destination.petronas')}}

                            </h6>
                            <p>Malaysia</p>
                        </div>
                    </div>
                </div>
                <div class="project" data-filter="canada">
                    <div
                        class="relative rounded-3xl border border-transparent bg-white drop-shadow-[5px_10px_80px_rgba(119,128,161,0.15)] transition duration-500 hover:border-secondary hover:bg-secondary/20 dark:bg-gray-dark dark:drop-shadow-none">
                        <a href="{{ url('/canada') }}"
                            class="absolute top-0 w-full h-full ltr:left-0 rtl:right-0"></a>
                        <img src="{{ url('/storage/images/canada/niagara.jpg') }}"
                            alt="project-1" class="object-cover w-full h-52 rounded-t-3xl" />
                        <div class="p-5 text-sm font-bold">
                            <h6 class="mb-1 text-black dark:text-white">
                                {{  __('destination.destination.niagara')}}

                            </h6>
                            <p>Canada</p>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <script>
        const filters = document.querySelectorAll('.filter');

        filters.forEach((filter) => {
            filter.addEventListener('click', function () {
                let selectedFilter = filter.getAttribute('data-filter');
                let itemsToHide = document.querySelectorAll(
                    `.projects .project:not([data-filter='${selectedFilter}'])`);
                let itemsToShow = document.querySelectorAll(
                    `.projects [data-filter='${selectedFilter}']`);

                if (selectedFilter == 'all') {
                    itemsToHide = [];
                    itemsToShow = document.querySelectorAll('.projects [data-filter]');
                }

                filterMenu = document.querySelectorAll('.filters li.filter');
                filterMenu.forEach((el) => {
                    el.classList.remove('active');
                });
                filter.classList.add('active');

                itemsToHide.forEach((el) => {
                    el.classList.add('hidden');
                    el.classList.remove('block');
                });

                itemsToShow.forEach((el) => {
                    el.classList.remove('hidden');
                    el.classList.add('block');
                });
            });
        });

    </script>
</div>
