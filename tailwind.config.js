const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            listStyleType: {
                square: 'square',
                roman: 'upper-roman',
              },
            colors: {
                'nightblue': '#003049',
                'norblue': '#1E3A8A',
                'midgray': '#6C757D',
                'lowgray': '#F8FAFC',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                mont: ['Montserrat','sans-serif'],
                quick: ['Quicksand','sans-serif'],
                abril: ['Abril Fatface','cursive'],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
