/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'color1': '#009FE0',
        'color2': '#010066',
        'color3': '#FFEE02',
        'color4': '#E41F26',
        'color5': '#0163C6',
        'color6': '#FEDE00',
        'color7': '#ffe73f',
        'color8': '#e5cb19',
        'color9': '#cb373c',
        'color10': '#64d7d3',
        'white': '#FBFBFB',
        'black': '#131B23',
        'dark': '#212529',
        'grey': '#C1C4CB',
        'light': '#6c757d',
      },
      backgroundImage: {
        'logo': 'url("https://certificados.esedco.edu.co/img/esedco-background.jpg")',
      },
      fontFamily: {
        'mulish': ['Mulish', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

