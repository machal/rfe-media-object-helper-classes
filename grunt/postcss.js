// postcss: doplneni prefixu atd. do CSS
// -------------------------------------

module.exports = {
  options: {
    map: true,
    processors: [
      require('autoprefixer')({
      	browsers: ['last 3 versions', 'ios 6', 'ie 7', 'ie 8', 'ie 9']
      })
    ]
  },
  dist: {
    src: 'dist/css/style.css'
  }
};
