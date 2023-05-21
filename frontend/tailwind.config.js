/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        'col-hover' : '#1900D5',
        'col-rate' : '#C1EF00',
        'col-orange' : '#E8502F',
        'col-gray' : '#3C3C3C',
        'col-gray-light' : '#7C7C7C',
        'col-rate-light' : '#A9FFA7',
        'dark-background' : '#252B42',
        'second-text-color' : '#737373',
        'primary-color' : '#23A6F0',
      },
    },
    screens: {
      '3xl': '1920px',
    },
  },
  plugins: []
}
