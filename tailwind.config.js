const colors = require('tailwindcss/colors')

module.exports = {
  
  theme: {
    colors: {
      gray: colors.coolGray,
      blue: colors.lightBlue,
      red: colors.rose,
      pink: colors.fuchsia,
      yellow: colors.amber,
      white: colors.white,
      green: colors.green,
      black:colors.black
    },
    textColor: theme => theme('colors'),
    textColor: {
      'primary': '#3490dc',
      'secondary': '#ffed4a',
      'danger': '#e3342f',
      'white': colors.white,
    },
    fontFamily: {
      sans: ['Graphik', 'sans-serif'],
      serif: ['Merriweather', 'serif'],
    },
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      width: {
        '1/7': '14.2857143%',
        '2/7': '28.5714286%',
        '3/7': '42.8571429%',
        '4/7': '57.1428571%',
        '5/7': '71.4285714%',
        '6/7': '85.7142857%',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  },
  variants: {
    extend: {
      borderColor: ['focus-visible'],
      opacity: ['disabled'],
      textColor: ['active'],
    }
  },
  plugins: [
    //require('@tailwindcss/ui')
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
  ],
}
