const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            white: colors.white,
            rose: colors.rose,
            gray: colors.gray,
            green: colors.green,
            black: colors.black,
            red: colors.red,
            yellow: colors.yellow,
            blue: colors.blue,
            purple: colors.purple
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                bitter: ['Bitter', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                'logoslider-height': '29rem',
                'logoslider-width': '35rem',
                'logo-bg-height': '22rem',
                'logo-bg-width': '28rem',
                '97-width': '30rem',
                '97-height': '25rem'
            }
        },
    },

    variants: {
        outline: ["focus"],
        extend: {
            opacity: ['disabled'],
            // outline: ['focus', 'hover', 'active'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
