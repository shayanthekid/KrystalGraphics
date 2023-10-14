/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        'infinite-scroll': 'infinite-scroll 25s linear infinite',
      },
      keyframes: {
        'infinite-scroll': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        }
      },
      fontFamily: {
        "montserrat": ['Montserrat', 'sans-serif'],
        "roboto": ['Roboto', 'sans-serif'],
      }
},
  },
  plugins: [],
}

