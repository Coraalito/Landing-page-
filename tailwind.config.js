/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    borderWidth: {
      DEFAULT: '1px',
      '0': '0',
      '2': '1px',
      '3': '3px',
      '4': '4px',
      '6': '6px',
      '8': '8px',
    },
    fontSize: {
      sm: '0.8rem',
      md: '0.87rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.763rem',
      '3xl': '1.953rem',
      '4xl': '2.541rem',
      '5xl': '3.052rem',
    },
 
    extend: {
      fontFamily: {
        sans: ['Kumbh Sans', 'sans-serif'],
      },
      colors: {
        orange: {
          950: '#FF7D1A',
        },
      }
    },
  },
  plugins: [],
}
