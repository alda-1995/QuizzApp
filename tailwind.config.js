/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        "gradient-brown": "linear-gradient(#faf2e9, rgba(250, 242, 233, 0))",
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem',
          sm: '2rem',
          lg: '3rem',
          xl: '5rem',
          '2xl': '6rem',
        }
      },
      colors: {
        'accent': "#ffebdb",
        "neutral": "#ffb3bf",
        "natural": "#272643",
        "base-100": "#1935CA",
        "base-200": "#ef674c",
        "base-300": "#677cf9",
      },
    },
    fontFamily: {
      'poppins': ["Poppins", 'sans-serif'],
      'source-serif': ['"Source Serif 4"', 'sans-serif'],
    },
  },
  plugins: [
    plugin(function ({ addBase }) {
      addBase({
        '.title-big': {
          fontSize: "calc(52px + (58 - 52) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-medium': {
          fontSize: "calc(38px + (42 - 38) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-base100': {
          fontSize: "calc(32px + (36 - 32) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-base200': {
          fontSize: "calc(24px + (28 - 24) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-base300': {
          fontSize: "calc(18px + (22 - 18) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-parrafo': {
          fontSize: "calc(15px + (18 - 15) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-small': {
          fontSize: "calc(13px + (14 - 13) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
        '.title-btn': {
          fontSize: "calc(14px + (16 - 14) * ((100vw - 300px) / (2300 - 300)))",
          lineHeight: 1.4
        },
      })
    })
  ],
}

