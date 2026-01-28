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
                sans: ['Poppins', 'Segoe UI', 'Roboto', ...defaultTheme.fontFamily.sans],
                heading: ['Montserrat', 'Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#8B1E3F',
                    50: '#F7E6EB',
                    100: '#EBCCD7',
                    200: '#D799AF',
                    300: '#C36687',
                    400: '#AF335F',
                    500: '#8B1E3F',
                    600: '#6F1832',
                    700: '#531226',
                    800: '#380C19',
                    900: '#1C060D',
                },
                secondary: {
                    DEFAULT: '#2FA4A9',
                    50: '#E8F7F8',
                    100: '#D1EFF1',
                    200: '#A3DFE3',
                    300: '#75CFD5',
                    400: '#47BFC7',
                    500: '#2FA4A9',
                    600: '#268387',
                    700: '#1C6265',
                    800: '#134244',
                    900: '#092122',
                },
                accent: {
                    DEFAULT: '#F4D35E',
                    50: '#FEFBF2',
                    100: '#FDF7E5',
                    200: '#FBEFCB',
                    300: '#F9E7B1',
                    400: '#F7DD97',
                    500: '#F4D35E',
                    600: '#F1C93D',
                    700: '#E6B91C',
                    800: '#B99016',
                    900: '#8C6B11',
                },
            },
        },
    },

    plugins: [forms],
};
