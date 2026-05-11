import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                main: ['Outfit', 'sans-serif'],
            },
            colors: {
                yoga: {
                    50: '#FEF7F4',
                    100: '#FDD5C1',
                    200: '#FCAE97',
                    300: '#F9926C',
                    400: '#F06A48',
                    500: '#E8704A', // Primary warm terracotta
                    600: '#D85C35',
                    700: '#BC4B2C',
                    800: '#953A1F',
                    900: '#6D2817',
                },
                zen: {
                    50: '#F0FEFB',
                    100: '#CCFBF1',
                    200: '#99F6E4',
                    300: '#5EEAD4',
                    400: '#2DD4BF', // Secondary calm teal
                    500: '#14B8A6',
                    600: '#0D9488',
                    700: '#0F766E',
                    800: '#115E59',
                    900: '#134E4A',
                },
                sage: {
                    50: '#F0FDF4',
                    100: '#DCFCE7',
                    200: '#BBF7D0',
                    300: '#86EFAC',
                    400: '#6EE7B7', // Accent soft sage green
                    500: '#10B981',
                    600: '#059669',
                    700: '#047857',
                    800: '#065F46',
                    900: '#064E3B',
                },
            },
            backgroundImage: {
                'gradient-yoga': 'linear-gradient(135deg, #FEF7F4 0%, #F0FEFB 100%)',
                'gradient-warm': 'linear-gradient(135deg, #E8704A 0%, #F06A48 100%)',
                'gradient-cool': 'linear-gradient(135deg, #2DD4BF 0%, #14B8A6 100%)',
                'gradient-natural': 'linear-gradient(135deg, #6EE7B7 0%, #10B981 100%)',
            },
            boxShadow: {
                'yoga-light': '0 10px 25px -5px rgba(232, 112, 74, 0.1)',
                'yoga-md': '0 15px 35px -5px rgba(232, 112, 74, 0.15)',
                'yoga-lg': '0 20px 50px -10px rgba(232, 112, 74, 0.2)',
                'zen-light': '0 10px 25px -5px rgba(45, 212, 191, 0.1)',
            },
        },
    },

    plugins: [forms],
};
