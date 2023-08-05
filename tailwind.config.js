const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            poppins: 'Poppins, sans-serif'
        },
        extend: {
            colors: {
                "alerange": '#FB6908',
                "gray-1": '#B4B4B4',
                "gray-2": '#E2E0E0',
                "form-bg": '#212121',
                gold: {
                    "50": "#d5a432",
                    "100": "#cb9a28",
                    "200": "#c1901e",
                    "300": "#b78614",
                    "400": "#ad7c0a",
                    "500": "#a37200",
                    "600": "#996800",
                    "700": "#8f5e00",
                    "800": "#855400",
                    "900": "#7b4a00",
                    "1000": "#fdf7e7",
                },
            },
            screens: {
                'laptopLg': '1160px',
                'laptopXl': '1360px',
            }
        }
    },

    plugins: [require('@tailwindcss/forms')],
};
