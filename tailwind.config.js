/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        "curio-geel": "#FFCC00",
        "curio-rood": "#FC3232",
        "curio-bruin": "#660404",
        "curio-licht-roze": "#F8AECD",
        "curio-midden-roze": "#F9329C",
        "curio-donker-roze": "#78034B",
        "curio-licht-paars": "#BEB0FF",
        "curio-midden-paars": "#9435F9",
        "curio-donker-paars": "#69197C",
        "curio-licht-blauw": "#56DDEF",
        "curio-midden-blauw": "#004FFF",
        "curio-donker-blauw": "#03357C",
        "curio-licht-groen": "#C1ED0C",
        "curio-midden-groen": "#2ADD5D",
        "curio-donker-groen": "#004C35",
      }
    },
  },
  plugins: [],
}

