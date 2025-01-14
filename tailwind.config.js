import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './vendor/tallstackui/tallstackui/src/**/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
              inter: ["Inter", "sans-serif"],
            },
            colors: {
              "black-100": "#2B2C35",
              "primary-blue": {
                DEFAULT: "#2B59FF",
                100: "#F5F8FF",
              },
              "secondary-orange": "#f79761",
              "light-white": {
                DEFAULT: "rgba(59,60,152,0.03)",
                100: "rgba(59,60,152,0.02)",
              },
              grey: "#747A88",
            },
            backgroundImage: {
              'pattern': "url('/pattern.png')",
              'hero-bg': "url('/hero-bg.png')"
            }
          },
    },

    plugins: [forms],
};
