const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-ellipse': 'radial-gradient(ellipse, var(--tw-gradient-stops))',
                'gradient-conic': 'conic-gradient(from 54deg, var(--tw-gradient-stops))',
            },
            colors: {
                gray: {
                    100: '#FBFBFA',
                    200: '#F6F5F1',
                    300: '#F0EFE9',
                    400: '#E5E4D9',
                    500: '#DAD8C8',
                    600: '#C4C2B4',
                    700: '#838278',
                    800: '#62615A',
                    900: '#41413C',
                },
                red: {
                    100: '#F8ECEC',
                    200: '#EDD0D0',
                    300: '#E2B3B4',
                    400: '#CC7B7B',
                    500: '#B64243',
                    600: '#A43B3C',
                    700: '#6D2828',
                    800: '#521E1E',
                    900: '#371414',
                },
            },
            width: {
                current: '95.15%',
            }
        },
        fontFamily: {
            weird: ['var(--font-press-start-2p)', ...defaultTheme.fontFamily.mono],
            sans: ['var(--font-pt-sans)', ...defaultTheme.fontFamily.sans],
            title: ['var(--font-free-lunch)', ...defaultTheme.fontFamily.sans],
            subtitle: ['var(--font-wilco-loft-sans)', ...defaultTheme.fontFamily.sans],
            small: ['var(--font-pt-sans-caption)', ...defaultTheme.fontFamily.sans],
            mono: ['var(--font-pt-mono)', ...defaultTheme.fontFamily.mono],
        },
    },
    plugins: [require('@tailwindcss/typography')],
}
