module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
        borderWidth: {
          '34': '34px',
        },
    extend: {
        backgroundImage: {
            'split-rose-white': "linear-gradient(to bottom, #F4F5F1 50%, white 50%);"
        },
        fontFamily: {
            'cg': 'Cormorant Garamond',
            'cgbi': 'Cormorant Garamond',
            'raleway': 'Raleway',
            'ralewaylight': 'Raleway',
        },
        colors: {
            'logo': '#F4F5F1',
            'h2-text': '#7D7885',
            'buttonl': '#B68E82',
            'buttonr': '#F7DCCF',
            'mainbg': '#F4F5F1',
            'faqheaderbg': '#EBBAB4',
            'faqtextheader': '#626C77',
        },
    },
  },
  plugins: [],
}
