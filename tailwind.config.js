import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                display: ['Montserrat', 'sans-serif'],
                sans: ['Noto Sans', 'sans-serif'],
            },

            colors: {
                'primary': '#4aa347',
                'primary-dark': '#2B5C2D',
                'secondary': '#48c1ca',
                'accent': '#78dcca',
                'text': '#2d2d2d',
            }
        },
    },

    plugins: [forms, typography],
};
