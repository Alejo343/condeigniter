/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');
const forms = require('@tailwindcss/forms');

module.exports = {
  content: [
    './app/Views/**/*.php', // rutas de tus vistas en CodeIgniter
  ],
  
  darkMode: 'class', // o 'media' para preferencia del sistema
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  
  plugins: [forms],
};