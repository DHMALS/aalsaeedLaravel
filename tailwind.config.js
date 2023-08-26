/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors:{
        primary: "#F86F03",
        primaryTrans: "#FEC59A",
        secondary: "#000000",
        componentsBackground: "#FEC59A",
        section: '#EBEBEB',
      },
      container: {
        center: true,
        padding: '2rem',
      },
      bgImg : "url('/img/bg.png')",
      height: {
        '128': '17rem',
        '111' : '33rem',
        '222' : '30rem'
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

