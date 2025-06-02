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
            },
            // cara pakenya tinggal tambah bg- di depannya contoh bg-tumbara-office
            backgroundImage: {
                'tumbara-office': 'url("/storage/app/public/images/galery/tumbara-office.jpg")',
                'tumbara-frozen': 'url("/storage/app/public/images/tumbara/frozen-bg.jpg")',
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
