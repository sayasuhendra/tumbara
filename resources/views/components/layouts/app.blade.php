<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>
    {!! seo() !!}
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>

</head>
<body class="overflow-x-hidden">
    <div
        class="flex flex-col min-h-screen text-base antialiased font-normal bg-black font-mulish text-gray from-transparent to-transparent"
    >
        <header id="top-header" class="sticky top-0 z-50 transition duration-300 bg-black/10">
            <div class="container">
                <div class="relative flex items-center justify-between py-1">
                        <a href="/" class="flex items-center">

                            <img class="w-16" src="{{  url('/storage/images/logoeei.png')}}" alt="">
                           {{-- <p class="pl-3 text-2xl font-semibold text-white font-reey">
                            Essential Edu <br>
                            International
                            </p> --}}
                        </a>

                    <div class="text-center">
                        <x-bladewind::dropmenu trigger="globe-alt-icon"
                             trigger_css="bg-pink-600 text-white p-2 rounded-full !h-10 !w-10">
                            <x-bladewind::dropmenu-item>
                                <a href="{{ route('locale', 'id') }}">
                                        Indonesia
                                </a>
                            </x-bladewind::dropmenu-item>
                            <x-bladewind::dropmenu-item>
                                <a href="{{ route('locale', 'en') }}">
                                    English
                                </a>
                            </x-bladewind::dropmenu-item>
                        </x-bladewind::dropmenu>
                    </div>
                    <div class="flex items-center">
                        <div onclick="toggleMenu()" class="overlay fixed inset-0 z-[51] hidden bg-black/60 lg:hidden"></div>
                        <div class="menus">
                            <div class="border-b border-gray/10 ltr:text-right rtl:text-left lg:hidden">
                                <button onclick="toggleMenu()" type="button" class="p-4">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-6 h-6 text-black dark:text-white"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <ul>
                                <li><a href="/">{{ __('menu.home') }}</a></li>
                                <li>
                                    <a href="/about-us">{{ __('menu.about') }}</a>
                                </li>
                                <li>
                                    <a href="/product">{{ __('menu.product') }}</a>
                                </li>
                                <li>
                                    <a href="/galery">{{ __('menu.galery') }}</a>
                                </li>
                                <li>
                                    <a href="/contact-us">{{ __('menu.contact') }}</a>
                                </li>

                            </ul>
                        </div>
                        <ul class="flex items-center gap-5 ltr:pr-5 rtl:pl-5 ltr:lg:pl-5 ltr:lg:pr-0 rtl:lg:pr-5 rtl:lg:pl-0">

                            <li>
                                <button
                                    type="button"
                                    class="flex items-center justify-center w-10 h-10 text-white rounded-full bg-gray-dark hover:text-black"
                                    onclick="toggleTheme()"
                                >
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="dark-mode-btn">
                                        <path
                                            d="M8 4C8 8.4 11.6 12 16 12C17.4 12 18.8 11.6 20 11C19.5 16.1 15.2 20 10 20C4.5 20 0 15.5 0 10C0 4.8 4 0.5 9 0C8.4 1.2 8 2.6 8 4ZM2 10C2 14.4 5.6 18 10 18C12.9 18 15.5 16.5 17 14C16.7 14 16.4 14 16 14C10.5 14 6 9.5 6 4C6 3.7 6 3.4 6 3C3.6 4.4 2 7.1 2 10Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                    <svg
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="hidden light-mode-btn"
                                    >
                                        <path
                                            d="M10 15C8.67392 15 7.40215 14.4732 6.46447 13.5355C5.52678 12.5979 5 11.3261 5 10C5 8.67392 5.52678 7.40215 6.46447 6.46447C7.40215 5.52678 8.67392 5 10 5C11.3261 5 12.5979 5.52678 13.5355 6.46447C14.4732 7.40215 15 8.67392 15 10C15 11.3261 14.4732 12.5979 13.5355 13.5355C12.5979 14.4732 11.3261 15 10 15ZM10 13.3333C10.8841 13.3333 11.7319 12.9821 12.357 12.357C12.9821 11.7319 13.3333 10.8841 13.3333 10C13.3333 9.11595 12.9821 8.2681 12.357 7.64298C11.7319 7.01786 10.8841 6.66667 10 6.66667C9.11595 6.66667 8.2681 7.01786 7.64298 7.64298C7.01786 8.2681 6.66667 9.11595 6.66667 10C6.66667 10.8841 7.01786 11.7319 7.64298 12.357C8.2681 12.9821 9.11595 13.3333 10 13.3333Z"
                                            fill="currentColor"
                                        />
                                        <path
                                            d="M9.09091 0.909092C9.09091 0.407014 9.49792 0 10 0C10.5021 0 10.9091 0.407014 10.9091 0.909092V1.81818C10.9091 2.32026 10.5021 2.72727 10 2.72727C9.49792 2.72727 9.09091 2.32026 9.09091 1.81818V0.909092ZM9.09091 18.1818C9.09091 17.6797 9.49792 17.2727 10 17.2727C10.5021 17.2727 10.9091 17.6797 10.9091 18.1818V19.0909C10.9091 19.593 10.5021 20 10 20C9.49792 20 9.09091 19.593 9.09091 19.0909V18.1818ZM2.92909 4.21455C2.57412 3.85958 2.57412 3.28406 2.92909 2.92909C3.28406 2.57412 3.85958 2.57412 4.21455 2.92909L4.85727 3.57182C5.21224 3.92679 5.21224 4.5023 4.85727 4.85727C4.5023 5.21224 3.92679 5.21224 3.57182 4.85727L2.92909 4.21455ZM15.1427 16.4282C14.7878 16.0732 14.7878 15.4977 15.1427 15.1427C15.4977 14.7878 16.0732 14.7878 16.4282 15.1427L17.0709 15.7855C17.4259 16.1404 17.4259 16.7159 17.0709 17.0709C16.7159 17.4259 16.1404 17.4259 15.7855 17.0709L15.1427 16.4282ZM15.7851 2.92886C16.1402 2.57358 16.7161 2.57361 17.0712 2.92894C17.4261 3.28403 17.4259 3.85951 17.071 4.21447L16.4283 4.8572C16.0732 5.21221 15.4977 5.21221 15.1427 4.8572C14.7877 4.50225 14.7876 3.92678 15.1425 3.57174L15.7851 2.92886ZM3.57182 15.1427C3.92679 14.7878 4.5023 14.7878 4.85727 15.1427C5.21224 15.4977 5.21224 16.0732 4.85727 16.4282L4.21455 17.0709C3.85958 17.4259 3.28406 17.4259 2.92909 17.0709C2.57412 16.7159 2.57412 16.1404 2.92909 15.7855L3.57182 15.1427ZM19.0909 9.09091C19.593 9.09091 20 9.49792 20 10C20 10.5021 19.593 10.9091 19.0909 10.9091H18.1818C17.6797 10.9091 17.2727 10.5021 17.2727 10C17.2727 9.49792 17.6797 9.09091 18.1818 9.09091H19.0909ZM1.81818 9.09091C2.32026 9.09091 2.72727 9.49792 2.72727 10C2.72727 10.5021 2.32026 10.9091 1.81818 10.9091H0.909092C0.407014 10.9091 0 10.5021 0 10C0 9.49792 0.407014 9.09091 0.909092 9.09091H1.81818Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <button type="button" class="flex items-center justify-center w-10 h-10 rounded-full bg-primary lg:hidden" onclick="toggleMenu()">
                            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                                <path
                                    d="M2 15H11C11.552 15 12 15.447 12 16C12 16.553 11.552 17 11 17H2C1.448 17 1 16.553 1 16C1 15.447 1.448 15 2 15Z"
                                    fill="currentColor"
                                />
                                <path
                                    d="M2 8H20C20.552 8 21 8.447 21 9C21 9.553 20.552 10 20 10H2C1.448 10 1 9.553 1 9C1 8.447 1.448 8 2 8Z"
                                    fill="currentColor"
                                />
                                <path
                                    d="M21 2C21 1.447 20.552 1 20 1H7C6.448 1 6 1.447 6 2C6 2.553 6.448 3 7 3H20C20.552 3 21 2.553 21 2Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        {{-- <div class="absolute bottom-0 z-[1] h-4 w-[calc(100%_+_100px)] bg-secondary xl:h-80 ltr:xl:-rotate-6 rtl:xl:rotate-6"></div> --}}

        <div class="-mt-[82px] flex-grow overflow-hidden lg:-mt-[106px] text-gray bg-black from-transparent to-transparent">
            <div class="pt-[82px] lg:pt-[106px]">
                <div class="relative">
                    @yield('header')
                </div>
            </div>
            </div>
        <div class="bg-white bg-gradient-to-r from-[#FCF1F4] to-[#EDFBF9] text-gray dark:bg-black dark:from-transparent dark:to-transparent">

        {{ $slot }}
        </div>

        <footer class="mt-auto bg-black before:bg-content-pattern-x-biru bofore:bg-cover">

            <div class="py-5 bg-black border-t-2 border-white/5 bg-none">
                <div class="container">
                    <div class="flex flex-col items-center justify-between font-bold text-center text-white md:flex-row">
                        <div>
                            Copyright© <span class="curr-year">2024</span>
                            <a href="/" class="transition text-primary hover:text-secondary">essentialedu.id</a>
                        </div>
                        <div><a href="mailto:{{  __('contact.email_address')}}" class="transition text-secondary hover:text-primary">Email Us</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Return to Top -->
    <a href="https://wa.me/{{  __('contact.whatsapp') }}" type="button" id="scrollToTopBtn" class="fixed z-10 hidden bottom-5 ltr:right-5 rtl:left-5">
    <img src="{{ url("/storage/images/whatsapp.webp") }}" alt="Contact Us" class="w-14">
    </a>

<script>
    const direction = window.localStorage.getItem('direction') || 'ltr';
if (direction === 'rtl') {
    const animateElements1 = document.querySelectorAll('[data-aos="fade-left"]');
    const animateElements2 = document.querySelectorAll('[data-aos="fade-right"]');

    animateElements1.forEach((element) => {
        element.setAttribute('data-aos', 'fade-right');
    });

    animateElements2.forEach((element) => {
        element.setAttribute('data-aos', 'fade-left');
    });
}

// loader
const screen_loader = document.getElementsByClassName('screen_loader');
if (screen_loader?.length) {
    setTimeout(() => {
        document.body.removeChild(screen_loader[0]);
    }, 200);
}

// Mobile menu js
const toggleMenu = () => {
    const menus = document.querySelector('.menus');
    const overlay = document.querySelector('.overlay');
    menus.classList.toggle('open-menus');
    overlay.classList.toggle('hidden');
};

// AOS Animation
if (window['AOS']) {
    window['AOS'].init({
        once: true,
    });
}

// Search Bar - Header
const search = () => {
    var search = document.querySelector('.search-bar');
    search.classList.toggle('open-search-bar');
};

// Scroll to top
const scrollToTop = () => {
    document.documentElement.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
};

window.onscroll = function () {
    setOnScroll();
};

const setOnScroll = () => {
    let scrollpos = window.scrollY;
    if (scrollpos > 0) {
        document.getElementById('scrollToTopBtn')?.classList.remove('hidden');
        document.getElementById('top-header')?.classList.add('sticky-header');
    } else {
        document.getElementById('scrollToTopBtn')?.classList.add('hidden');
        document.getElementById('top-header')?.classList.remove('sticky-header');
    }
};
setOnScroll();

// Light - Dark Mode
const toggleTheme = (isFirstTime = false) => {
    let theme = window.localStorage.getItem('theme') || 'light';

    if (!isFirstTime) {
        theme = theme === 'light' ? 'dark' : 'light';
    }
    window.localStorage.setItem('theme', theme);

    if (theme === 'dark') {
        document.querySelector('body').classList.add('dark');
    } else {
        document.querySelector('body').classList.remove('dark');
    }
};

toggleTheme(true);

// rtl
const toggleDirection = (isFirstTime = false) => {
    let direction = window.localStorage.getItem('direction') || 'ltr';

    if (!isFirstTime) {
        direction = direction === 'ltr' ? 'rtl' : 'ltr';
    }
    window.localStorage.setItem('direction', direction);

    if (direction === 'rtl') {
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        document.querySelector('html').setAttribute('dir', 'ltr');
    }
    if (!isFirstTime) {
        window.location.reload();
    }
};
toggleDirection(true);

// current year
const ele = document.querySelectorAll('.curr-year');
if (ele?.length) {
    const date = new Date();
    const fullyear = date.getFullYear();
    for (let i = 0; i < ele.length; i++) {
        ele[i].innerHTML = fullyear;
    }
}
</script>
<x-toaster-hub />
</body>
</html>
