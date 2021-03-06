module.exports = {
    purge: {
      content: [
        './resources/**/*.antlers.html',
        './resources/**/*.blade.php',
        './content/**/*.md'
      ]
    },
    important: true,
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
        rotate: {
          '-180': '-180deg',
          '-90': '-90deg',
          '-45': '-45deg',
          '-10': '-10deg',
          '-9': '-9deg',
          '-8': '-8deg',
          '-7': '-7deg',
          '-6': '-6deg',
          '-5': '-5deg',
          '-4': '-4deg',
          '-3': '-3deg',
          '-2': '-2deg',
          '-1': '-1deg',
          '0': '0',
          '1': '1deg',
          '2': '2deg',
          '3': '3deg',
          '4': '4deg',
          '5': '5deg',
          '6': '6deg',
          '7': '7deg',
          '8': '8deg',
          '9': '9deg',
          '10': '10deg',
          '45': '45deg',
          '90': '90deg',
          '180': '180deg',
        },
      },
      fontFamily: {
        'weird': 'Vault-Alarm, "Vault Alarm", Parkly',
        'sans': '"PT Sans",system-ui,BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif',
        'subtitle': '"PT Sans Narrow",system-ui,BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif',
        'small': '"PT Sans Caption",system-ui,BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif'
      },
    },
    variants: {
      backgroundColor: ['responsive', 'hover', 'focus', 'group-hover'],
    },
    plugins: [
      require('@tailwindcss/typography')
    ],
    future: {
      removeDeprecatedGapUtilities: true,
      purgeLayersByDefault: true,
    }
  }
