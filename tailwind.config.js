/** @type {import('tailwindcss').Config} */

const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dark-green': '#000F08',
        'orange-red': '#F34213'
      },
      backgroundImage: {
        'machine': "url(/public/images/machine.jpg)",
        'threads' : "url(/public/images/threads.jpg)",
        'thread-theme': "url(/public/images/thread-theme.jpg)",
        'profile': "url(/public/images/profile.jpg"
      }
    },
  },
  plugins: [
    plugin(function ({ addComponents }) {
      addComponents ({
        '.validationError' : {
          color: 'rgb(220 38 38)',
          paddingTop: '0.75rem'
        }
      })
    })
  ],
}
