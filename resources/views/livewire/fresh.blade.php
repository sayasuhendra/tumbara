<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Title};

new
#[Title('Malaysia')]
class extends Component {
    //
}; ?>

<div>
    @section('header')
    <div class="container">
        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
            <div class="heading relative mb-0 md:w-[725px]">
                <h4 class="!text-white">
                    {{  __('malaysia.header')}}
                </h4>
                <p
                    class="relative mt-7 font-medium text-[#BBC0D0] before:absolute before:top-0 before:h-full before:w-1 before:bg-primary ltr:pl-8 ltr:before:left-0 rtl:pr-8 rtl:before:right-0">
                    {{  __('malaysia.desc')}}
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
                    {{  __('malaysia.profile')}}

                </h3>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.geography.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.geography.desc')}}

                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.teritory.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.teritory.desc')}}

                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.history.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.history.desc')}}

                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.culture.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.culture.1')}}

                </p>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.culture.2')}}

                </p>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.culture.3')}}

                </p>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.culture.4')}}

                </p>

            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.religion.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.religion.desc')}}
                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.language.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.language.desc')}}
                </p>
            </div>
            <div class="pt-14">
                <h2 class="text-2xl font-extrabold text-black mb-7 dark:text-white sm:text-3xl">
                    {{  __('malaysia.education')}}

                    </h3>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.why.title')}}

                </h3>
                <div class="flex items-center gap-4 mt-8">
                    <div class="text-primary">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 2.5C12.5277 2.5 10.111 3.23311 8.05538 4.60663C5.99976 5.98015 4.39761 7.93238 3.45151 10.2165C2.50542 12.5005 2.25787 15.0139 2.74019 17.4386C3.2225 19.8634 4.41301 22.0907 6.16117 23.8388C7.90933 25.587 10.1366 26.7775 12.5614 27.2598C14.9861 27.7421 17.4995 27.4946 19.7836 26.5485C22.0676 25.6024 24.0199 24.0002 25.3934 21.9446C26.7669 19.889 27.5 17.4723 27.5 15C27.5 13.3585 27.1767 11.733 26.5485 10.2165C25.9203 8.69989 24.9996 7.3219 23.8388 6.16117C22.6781 5.00043 21.3001 4.07969 19.7836 3.45151C18.267 2.82332 16.6415 2.5 15 2.5ZM20.8875 12.1375L13.3875 19.6375C13.2713 19.7547 13.1331 19.8477 12.9807 19.9111C12.8284 19.9746 12.665 20.0072 12.5 20.0072C12.335 20.0072 12.1716 19.9746 12.0193 19.9111C11.867 19.8477 11.7287 19.7547 11.6125 19.6375L9.11251 17.1375C8.99596 17.021 8.90351 16.8826 8.84043 16.7303C8.77736 16.578 8.74489 16.4148 8.74489 16.25C8.74489 16.0852 8.77736 15.922 8.84043 15.7697C8.90351 15.6174 8.99596 15.479 9.11251 15.3625C9.22905 15.246 9.36742 15.1535 9.51969 15.0904C9.67197 15.0273 9.83518 14.9949 10 14.9949C10.1648 14.9949 10.328 15.0273 10.4803 15.0904C10.6326 15.1535 10.771 15.246 10.8875 15.3625L12.5 16.9875L19.1125 10.3625C19.3479 10.1271 19.6671 9.99489 20 9.99489C20.3329 9.99489 20.6521 10.1271 20.8875 10.3625C21.1229 10.5979 21.2551 10.9171 21.2551 11.25C21.2551 11.5829 21.1229 11.9021 20.8875 12.1375Z"
                                fill="currentcolor"></path>
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-lg font-semibold">
                            {{  __('malaysia.why.1')}}
                        </h5>
                    </div>
                </div>
                <div class="flex items-center gap-4 mt-8">
                    <div class="text-primary">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 2.5C12.5277 2.5 10.111 3.23311 8.05538 4.60663C5.99976 5.98015 4.39761 7.93238 3.45151 10.2165C2.50542 12.5005 2.25787 15.0139 2.74019 17.4386C3.2225 19.8634 4.41301 22.0907 6.16117 23.8388C7.90933 25.587 10.1366 26.7775 12.5614 27.2598C14.9861 27.7421 17.4995 27.4946 19.7836 26.5485C22.0676 25.6024 24.0199 24.0002 25.3934 21.9446C26.7669 19.889 27.5 17.4723 27.5 15C27.5 13.3585 27.1767 11.733 26.5485 10.2165C25.9203 8.69989 24.9996 7.3219 23.8388 6.16117C22.6781 5.00043 21.3001 4.07969 19.7836 3.45151C18.267 2.82332 16.6415 2.5 15 2.5ZM20.8875 12.1375L13.3875 19.6375C13.2713 19.7547 13.1331 19.8477 12.9807 19.9111C12.8284 19.9746 12.665 20.0072 12.5 20.0072C12.335 20.0072 12.1716 19.9746 12.0193 19.9111C11.867 19.8477 11.7287 19.7547 11.6125 19.6375L9.11251 17.1375C8.99596 17.021 8.90351 16.8826 8.84043 16.7303C8.77736 16.578 8.74489 16.4148 8.74489 16.25C8.74489 16.0852 8.77736 15.922 8.84043 15.7697C8.90351 15.6174 8.99596 15.479 9.11251 15.3625C9.22905 15.246 9.36742 15.1535 9.51969 15.0904C9.67197 15.0273 9.83518 14.9949 10 14.9949C10.1648 14.9949 10.328 15.0273 10.4803 15.0904C10.6326 15.1535 10.771 15.246 10.8875 15.3625L12.5 16.9875L19.1125 10.3625C19.3479 10.1271 19.6671 9.99489 20 9.99489C20.3329 9.99489 20.6521 10.1271 20.8875 10.3625C21.1229 10.5979 21.2551 10.9171 21.2551 11.25C21.2551 11.5829 21.1229 11.9021 20.8875 12.1375Z"
                                fill="currentcolor"></path>
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-lg font-semibold">
                            {{  __('malaysia.why.2')}}
                        </h5>
                    </div>
                </div>
                <div class="flex items-center gap-4 mt-8">
                    <div class="text-primary">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 2.5C12.5277 2.5 10.111 3.23311 8.05538 4.60663C5.99976 5.98015 4.39761 7.93238 3.45151 10.2165C2.50542 12.5005 2.25787 15.0139 2.74019 17.4386C3.2225 19.8634 4.41301 22.0907 6.16117 23.8388C7.90933 25.587 10.1366 26.7775 12.5614 27.2598C14.9861 27.7421 17.4995 27.4946 19.7836 26.5485C22.0676 25.6024 24.0199 24.0002 25.3934 21.9446C26.7669 19.889 27.5 17.4723 27.5 15C27.5 13.3585 27.1767 11.733 26.5485 10.2165C25.9203 8.69989 24.9996 7.3219 23.8388 6.16117C22.6781 5.00043 21.3001 4.07969 19.7836 3.45151C18.267 2.82332 16.6415 2.5 15 2.5ZM20.8875 12.1375L13.3875 19.6375C13.2713 19.7547 13.1331 19.8477 12.9807 19.9111C12.8284 19.9746 12.665 20.0072 12.5 20.0072C12.335 20.0072 12.1716 19.9746 12.0193 19.9111C11.867 19.8477 11.7287 19.7547 11.6125 19.6375L9.11251 17.1375C8.99596 17.021 8.90351 16.8826 8.84043 16.7303C8.77736 16.578 8.74489 16.4148 8.74489 16.25C8.74489 16.0852 8.77736 15.922 8.84043 15.7697C8.90351 15.6174 8.99596 15.479 9.11251 15.3625C9.22905 15.246 9.36742 15.1535 9.51969 15.0904C9.67197 15.0273 9.83518 14.9949 10 14.9949C10.1648 14.9949 10.328 15.0273 10.4803 15.0904C10.6326 15.1535 10.771 15.246 10.8875 15.3625L12.5 16.9875L19.1125 10.3625C19.3479 10.1271 19.6671 9.99489 20 9.99489C20.3329 9.99489 20.6521 10.1271 20.8875 10.3625C21.1229 10.5979 21.2551 10.9171 21.2551 11.25C21.2551 11.5829 21.1229 11.9021 20.8875 12.1375Z"
                                fill="currentcolor"></path>
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-lg font-semibold">
                            {{  __('malaysia.why.3')}}
                        </h5>
                    </div>
                </div>
                <div class="flex items-center gap-4 mt-8">
                    <div class="text-primary">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 2.5C12.5277 2.5 10.111 3.23311 8.05538 4.60663C5.99976 5.98015 4.39761 7.93238 3.45151 10.2165C2.50542 12.5005 2.25787 15.0139 2.74019 17.4386C3.2225 19.8634 4.41301 22.0907 6.16117 23.8388C7.90933 25.587 10.1366 26.7775 12.5614 27.2598C14.9861 27.7421 17.4995 27.4946 19.7836 26.5485C22.0676 25.6024 24.0199 24.0002 25.3934 21.9446C26.7669 19.889 27.5 17.4723 27.5 15C27.5 13.3585 27.1767 11.733 26.5485 10.2165C25.9203 8.69989 24.9996 7.3219 23.8388 6.16117C22.6781 5.00043 21.3001 4.07969 19.7836 3.45151C18.267 2.82332 16.6415 2.5 15 2.5ZM20.8875 12.1375L13.3875 19.6375C13.2713 19.7547 13.1331 19.8477 12.9807 19.9111C12.8284 19.9746 12.665 20.0072 12.5 20.0072C12.335 20.0072 12.1716 19.9746 12.0193 19.9111C11.867 19.8477 11.7287 19.7547 11.6125 19.6375L9.11251 17.1375C8.99596 17.021 8.90351 16.8826 8.84043 16.7303C8.77736 16.578 8.74489 16.4148 8.74489 16.25C8.74489 16.0852 8.77736 15.922 8.84043 15.7697C8.90351 15.6174 8.99596 15.479 9.11251 15.3625C9.22905 15.246 9.36742 15.1535 9.51969 15.0904C9.67197 15.0273 9.83518 14.9949 10 14.9949C10.1648 14.9949 10.328 15.0273 10.4803 15.0904C10.6326 15.1535 10.771 15.246 10.8875 15.3625L12.5 16.9875L19.1125 10.3625C19.3479 10.1271 19.6671 9.99489 20 9.99489C20.3329 9.99489 20.6521 10.1271 20.8875 10.3625C21.1229 10.5979 21.2551 10.9171 21.2551 11.25C21.2551 11.5829 21.1229 11.9021 20.8875 12.1375Z"
                                fill="currentcolor"></path>
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-lg font-semibold">
                            {{  __('malaysia.why.4')}}
                        </h5>
                    </div>
                </div>

            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.close.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.close.desc')}}

                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.admit.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.admit.desc')}}

                </p>
            </div>
            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.cheap.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('malaysia.cheap.desc')}}

                </p>
            </div>

            <div class="pt-10">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('malaysia.best-campus')}}
                    <br>
                    ( QS World University Rankings 2024 )
                </h3>


                <div class="overflow-x-auto rounded-lg ">
                    <table class="w-full text-sm text-left text-primary rtl:text-right dark:text-primary">
                        <thead class="text-xs text-white uppercase border-b border-white bg-primary dark:text-white">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-black">
                                    Global rank
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray">
                                    University
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    =65
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Malaya (UM)
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    =137
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Sains Malaysia (USM)
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    158
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Putra Malaysia (UPM)
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    =159
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Kebangsaan Malaysia (UKM)
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    188
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Teknologi Malaysia
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    284
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Taylor's University
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    300
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    UCSI University
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    =307
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Teknologi PETRONAS (UTP)
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    =538
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Utara Malaysia (UUM)
                                </th>
                            </tr>
                            <tr class="border-b border-white bg-primary">
                                <td class="px-6 py-4 text-black">
                                    555
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-white bg-gray whitespace-nowrap dark:text-primary">
                                    Universiti Teknologi MARA - UiTM
                                </th>
                            </tr>


                        </tbody>
                    </table>
                </div>


            </div>
            <p class="relative mb-2 font-semibold pt-14 md:text-lg">
                {{  __('malaysia.source')}}

            </p>
            <p class="relative mb-2 font-semibold md:text-lg">
                https://www.malaysia.travel/about-malaysia
            </p>
            <p class="relative mb-2 font-semibold md:text-lg">
                https://ayokuliahdimalaysia.id
            </p>
            <p class="relative mb-2 font-semibold md:text-lg">
                https://www.topuniversities.com/where-to-study/asia/malaysia/top-universities-malaysia
            </p>

        </div>

</div>
</section>

</div>
