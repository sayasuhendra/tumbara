/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin');
const rotateX = plugin(function ({ addUtilities }) {
    addUtilities({
        '.rotate-y-180': {
            transform: 'rotateY(180deg)',
        },
    });
});
export default {
    darkMode: "class",
    content: [
        // You will probably also need these lines
        "./resources/**/**/*.blade.php",
        "./resources/**/**/*.js",
        "./app/View/Components/**/**/*.php",
        "./app/Livewire/**/**/*.php",
        './vendor/masmerise/livewire-toaster/resources/views/*.blade.php',
        // Add mary
        // "./vendor/robsontenorio/mary/src/View/Components/**/*.php",

    ],
    theme: {
        container: {
            center: true,
            padding: '1rem',
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1142px',
        },
        fontFamily: {
            mulish: ['Mulish', 'sans-serif'],
            reey: ['reey', 'sans-serif'],
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: '#ffffff',
            black: '#2D4739',
            primary: '#526b60',
            secondary: '#e6e7e8 ',
            gray: {
                DEFAULT: '#7780A1',
                dark: '#526b60',
            },
        },
        extend: {
            content: {
                'pattern-kotak-biru': 'url("/storage/app/public/images/pattern/pattern-kotak-biru.png")',
                'pattern-kotak-putih': 'url("/storage/app/public/images/pattern/pattern-kotak-putih.png")',
                'pattern-x-biru': 'url("/storage/app/public/images/pattern/pattern-x-biru.png")',
                'pattern-x-putih': 'url("/storage/app/public/images/pattern/pattern-x-putih.png")',
            },
            backgroundImage: {
                'pattern-kotak-biru': 'url("/storage/app/public/images/pattern/pattern-kotak-biru.png")',
                'pattern-kotak-putih': 'url("/storage/app/public/images/pattern/pattern-kotak-putih.png")',
                'pattern-right': 'url("/storage/app/public/images/pattern/pattern-y-right.png")',
                'pattern-left': 'url("/storage/app/public/images/pattern/pattern-y-left.png")',
                'pattern-x-biru': 'url("/storage/app/public/images/pattern/pattern-x-biru.png")',
                'pattern-x-putih': 'url("/storage/app/public/images/pattern/pattern-x-putih.png")',
                'pattern-bg': 'url("/storage/app/public/images/pattern/inner-page-hero-bg-center.png")',
                'pattern-bg-r': 'url("/storage/app/public/images/inner-page-hero-bg-pattern.png")',
            },
            animation: {
                'spin-slow': 'spin 5s linear infinite',
            },
            typography: ({ theme }) => ({
                DEFAULT: {
                    css: {
                        color: theme('colors.gray'),
                        fontSize: '1.125rem',
                    },
                },
            }),
        },
    },
    plugins: [rotateX, require('@tailwindcss/typography')],
};
