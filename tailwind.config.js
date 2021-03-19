module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        fischwelt: {
          blue: '#1670AD',
          yellow: '#FCCF10',
          gray: '#56585A',
        }
      },
      backgroundImage: theme => ({
        'principal': "url('/public/img/principal-index.jpg')",
        'olas': "url('/public/img/background.jpg')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
