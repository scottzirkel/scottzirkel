const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{js,ts,jsx,tsx}'],
  theme: {
    extend: {
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
    },
    fontFamily: {
      weird: [
        'var(--font-vault-alarm)',
        'Vault-Alarm',
        'Vault Alarm',
        'Parkly',
      ],
      sans: ['var(--font-pt-sans)', 'PT Sans', ...defaultTheme.fontFamily.sans],
      subtitle: [
        'var(--font-pt-sans-narrow)',
        'PT Sans Narrow',
        ...defaultTheme.fontFamily.sans,
      ],
      small: [
        'var(--font-pt-sans-caption)',
        'PT Sans Caption',
        ...defaultTheme.fontFamily.sans,
      ],
    },
  },
  plugins: [require('@tailwindcss/typography')],
}
