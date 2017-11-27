// sass: kompilace do CSS
// ----------------------

module.exports = {
  helperClasses: {
  	options: {
  	    sourceMap: true
  	},
    files: {
      'dist/css/style-helper-classes.css':
      'src/scss/index-helper-classes.scss'
    }
  },
  noHelperClasses: {
    options: {
        sourceMap: true
    },
    files: {
      'dist/css/style-no-helper-classes.css':
      'src/scss/index-no-helper-classes.scss'
    }
  }
};
