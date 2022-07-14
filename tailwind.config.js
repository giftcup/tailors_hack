/** @type {import('tailwindcss').Config} */
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
        'threads' : "url(/public/images/threads.jpg)"
      }
    },
  },
  plugins: [],
}
