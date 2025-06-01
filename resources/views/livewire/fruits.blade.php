<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Title};

new
#[Title('Perth - Australia Barat')]
class extends Component {
    //
}; ?>

<div>
    @section('header')

    <div class="container">
        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
            <div class="heading relative mb-0 md:w-[725px]">
                <h4 class="!text-white">
                    {{  __('australia.header')}}
                </h4>
                <p
                    class="relative mt-7 font-medium lg:pb-20 text-[#BBC0D0] before:absolute before:top-0 before:h-full lg:before:h-[30%] before:w-1 before:bg-primary ltr:pl-8 ltr:before:left-0 rtl:pr-8 rtl:before:right-0">
                    {{  __('australia.desc')}}

                </p>
            </div>
        </div>
    </div>
    @endsection

    <section
        class="bg-gradient-to-t from-white/[20%] to-transparent py-14 dark:bg-black lg:py-[100px] text-black dark:text-white">

        <div class="container">
            <div>
                <h2 class="text-2xl font-extrabold text-black mb-7 dark:text-white sm:text-3xl">
                    {{  __('australia.profile')}}

                </h3>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('australia.geography.title')}}
                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('australia.geography.desc')}}
                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('australia.history.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('australia.history.1')}}

                </p>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('australia.history.2')}}
                </p>
            </div>

            <div class="pt-14">
                <h2 class="text-2xl font-extrabold text-black mb-7 dark:text-white sm:text-3xl">
                    {{  __('australia.education')}}
                </h3>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('australia.why')}}
                </h3>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.quality.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.quality.desc')}}
                    </p>
                </div>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.view.title')}}

                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.view.desc')}}

                    </p>
                </div>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.class.title')}}

                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.class.desc')}}
                    </p>
                </div>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.cost.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.cost.1')}}

                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.cost.2')}}

                    </p>
                </div>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.live.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.live.1')}}

                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.live.2')}}

                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.live.2')}}

                    </p>
                </div>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.carrier.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.carrier.1')}}

                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('australia.carrier.2')}}

                    </p>
                </div>
                <div class="pt-10">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('australia.best-campus')}}
                        <br>
                        ( QS Best Student Cities ranking )
                    </h3>


                    <div class="overflow-x-auto rounded-lg ">
                        <table class="w-full text-sm text-left text-primary rtl:text-right dark:text-primary">
                            <thead
                                class="text-xs text-white uppercase border-b border-white bg-primary dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-black">
                                        World Ranking
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray">
                                        Institution
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-white bg-primary">
                                    <td class="px-6 py-4 text-black">
                                        90th
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                        University of Western Australia (UWA)
                                    </th>
                                </tr>
                                <tr class="border-b border-white bg-primary">
                                    <td class="px-6 py-4 text-black">
                                        193rd
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                        Curtin University
                                    </th>
                                </tr>
                                <tr class="border-b border-white bg-primary">
                                    <td class="px-6 py-4 text-black">
                                        561-570
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                        Murdoch University
                                    </th>
                                </tr>
                                <tr class="border-b border-white bg-primary">
                                    <td class="px-6 py-4 text-black">
                                        601-650
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                        Edith Cowan University
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
                <p class="relative mb-2 font-semibold pt-14 md:text-lg">
                    {{  __('australia.source')}}
                </p>
                <p class="relative mb-2 font-semibold md:text-lg">
                    https://id.wikipedia.org/wiki/Perth,_Australia_Barat
                </p>
                <p class="relative mb-2 font-semibold md:text-lg">
                    https://www.topuniversities.com/university-rankings-articles/qs-best-student-cities/perth
                </p>

            </div>

        </div>
    </section>

</div>
