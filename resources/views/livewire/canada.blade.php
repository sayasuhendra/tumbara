<?php

use Livewire\Volt\Component;
use Livewire\Attributes\{Title};

new
#[Title('Canada')]
class extends Component {
    //
}; ?>

<div>
    @section('header')
    <div class="container">
        <div class="items-center py-10 md:flex md:h-[400px] md:py-0">
            <div class="heading relative mb-0 md:w-[725px]">
                <h4 class="!text-white">
                    {{  __('canada.header')}}
                </h4>
                <p
                    class="relative mt-7 lg:pb-24 font-medium text-[#BBC0D0] before:absolute before:top-0 before:h-full lg:before:h-[50%] before:w-1 before:bg-primary ltr:pl-8 ltr:before:left-0 rtl:pr-8 rtl:before:right-0">
                    {{  __('canada.desc')}}

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
                    {{  __('tourist.title')}}
                </h2>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-10">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-bof.jpg') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('tourist.1.title')}}

                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.1.desc')}}

                    </p>
                </div>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-16">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/calgary.jpg') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('tourist.2.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.2.desc')}}
                    </p>
                </div>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-16">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-museum.jpg') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('tourist.3.title')}}

                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.3.desc')}}

                    </p>
                </div>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-16">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-bear.jpg') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('tourist.4.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.4.desc')}}
                    </p>
                </div>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-16">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-history.jpg') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">

                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('tourist.5.title')}}
                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.5.1')}}
                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.5.2')}}
                    </p>
                </div>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-16">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-whistler.jpg') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('tourist.6.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.6.desc')}}
                    </p>
                </div>
            </div>
            <div class="pt-10 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-1/4 lg:pt-16">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-niagara.png') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-3/4">
                    <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                        {{  __('tourist.7.title')}}
                    </h3>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('tourist.7.desc')}}
                    </p>
                </div>
            </div>
            <div>
                <h2 class="pt-16 text-2xl font-extrabold text-black mb-7 dark:text-white sm:text-3xl">
                    {{  __('canada.sorotan.title')}}

                </h3>
            </div>
            <div class="pt-6 lg:flex-row lg:flex lg:space-x-5">
                <div class="flex justify-center pb-8 basis-2/4 lg:pt-10">
                    <img class="object-center w-auto rounded-lg"
                        src="{{ url('/storage/images/canada/canada-highlight.webp') }}"
                        alt="Bay of Fundy">
                </div>
                <div class="basis-2/4">
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                        {{  __('canada.sorotan.1')}}

                    </p>
                    <p
                        class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('canada.sorotan.2')}}

                    </p>
                </div>
            </div>

            <div class="pt-16">
                <h3 class="text-xl font-extrabold text-black mb-7 dark:text-white sm:text-2xl">
                    {{  __('canada.education.title')}}

                </h3>
                <p
                    class="mb-4 before:bg-primary relative font-semibold leading-[30px] before:absolute before:top-0 before:h-full before:w-1 before:rounded ltr:pl-6 ltr:before:left-0 rtl:pr-6 rtl:before:right-0 md:text-lg">
                    {{  __('canada.education.desc')}}

                </p>
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
                            {{  __('canada.education.1')}}

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
                            {{  __('canada.education.2')}}

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
                            {{  __('canada.education.3')}}

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
                            {{  __('canada.education.4')}}

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
                            {{  __('canada.education.5')}}

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
                            {{  __('canada.education.6')}}

                        </h5>
                    </div>
                </div>


            </div>

            <div>
                <h2 class="pt-16 text-2xl font-extrabold text-black mb-7 dark:text-white sm:text-3xl">
                    {{  __('canada.what')}}

                </h3>
            </div>
            <div class="flex justify-center">
                <img class="object-center w-auto rounded-lg"
                    src="{{ url('/storage/images/canada/canada-top-university.webp') }}"
                    alt="Bay of Fundy">
            </div>

            <p class="relative mb-2 font-semibold pt-14 md:text-lg">
                {{  __('canada.source')}}

            </p>
            <p class="relative mb-2 font-semibold md:text-lg">
                https://apisbd.com/7-top-rated-tourist-attractions-in-canada/
            </p>
            <p class="relative mb-2 font-semibold md:text-lg">
                https://www.aeccglobal.lk/blog/best-universities-in-canada-for-international-students
            </p>

        </div>

</div>
</section>

</div>
